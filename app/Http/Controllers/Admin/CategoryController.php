<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Product;
class CategoryController extends Controller
{
    public function index()
    {
    	$categorys = 
        Category::get();
    	return view('admin.category.index',compact('categorys'));
    }
    public function create()
    {
    	return view('admin.category.add'); 
    }
    public function storeCategory(Request $request)
    {
    	$request->validate([
    		'category_name' => 'bail|required|unique:categories',
            'cat_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    	]);
        // $imageName = $request->cat_img->getClientOriginalName();
        $imageName = time().'.'.$request->cat_img->extension();
        // return $imageName;
    	Category::insert([
    		'category_name' => $request->category_name,
    		'slug' => strtolower(str_replace(' ', '-', $request->category_name)),
            'cat_img' => $imageName
    	]);
        $request->cat_img->move(public_path('/assets/images/frontend/category/'),$imageName);
    	return redirect()->route('allCategory')->with('message','Category created successfully!');
    }
    public function editCategory($id)
    {
        $data = Category::findOrFail($id);
        if ($data) {
             return view('admin.category.edit',compact('data'));
         } 
    }
    public function editstoreCategory(Request $request)
    {
        $request->validate([
            'category_name' => 'bail|required|unique:categories',
        ]);
        $id = $request->id;

        $data = Category::findOrFail($id)->update([
            'category_name' => $request->category_name,
            'slug' => strtolower(str_replace(' ', '-', $request->category_name)) 
        ]);
        SubCategory::where('category_id',$id)->update([
            'category_name' => $request->category_name
        ]);
        return redirect()->route('allCategory')->with('message','Category Updated Successfully!');
    }
    public function editcatimg($id)
    {
        $cat = Category::findOrFail($id);
        return view('admin.category.editimage',compact('cat'));
    }
    public function storeeditcatimg(Request $request)
    {
        $cat_id = $request->id;
        $request->validate([
            'cat_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $category_img = Category::findOrFail($cat_id);
        if ($request->cat_img != '' ) {
            $path = public_path().'/assets/images/frontend/category/';
            if ($category_img->cat_img != '' && $category_img->cat_img != null) {
                $file_old = $path.$category_img->cat_img;
                // return $file_old;
                if (file_exists($file_old)) {
                unlink($file_old);
                }
                $imageName = time().'.'.$request->cat_img->extension();
                $request->cat_img->move($path,$imageName);
            }
        else{
                $imageName = time().'.'.$request->cat_img->extension();
                $request->cat_img->move($path,$imageName);
            
        }
        }
        $category_img->cat_img = $imageName;
        $category_img->update();
         return redirect()->route('allCategory')->with('message','Category Image Updated Successfully!');
    }
    public function deleteCategory($id)
    {
        $cat_id = Category::findOrFail($id);
        if ($cat_id->cat_img != '') {
            $path = public_path().'/assets/images/frontend/category/';
            $file_old = $path.$cat_id->cat_img;
            unlink($file_old);
        }
    	$category_id = Category::find($id)->delete();
    	return redirect()->route('allCategory')->with('message','Category Delete Successfully!');
    }
}
