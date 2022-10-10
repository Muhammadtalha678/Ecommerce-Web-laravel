<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Product;
class SubCategoryController extends Controller
{
    public function index()
    {
    	$subcategories = SubCategory::paginate(10);
    	return view('admin.subCategory.index',compact('subcategories'));
    }
    public function create()
    {
    	$Category = Category::all();
    	return view('admin.subCategory.add',compact('Category')); 
    }
     public function storeSubCategory(Request $request)
    {
        $request->validate([
            'subcategory_name' => 'required|unique:sub_categories',
            'category_id' => 'required',
            'subcat_img' => 'required'
        ]);
        $imageName = time().'.'.$request->subcat_img->extension();
        $category_id = $request->category_id;
        $category_name = Category::where('id',$category_id)->value('category_name');
        SubCategory::insert([
        	'subcategory_name' => $request->subcategory_name,
        	'category_id' => $request->category_id,
        	'category_name' => $category_name,
        	'slug' => strtolower(str_replace(' ', '-', $request->subcategory_name)),
            'subcat_img' => $imageName
        ]);
        $request->subcat_img->move(public_path('/assets/images/frontend/subcategory/'),$imageName);
        Category::where('id',$category_id)->increment('subcategory_count');
        return redirect()->route('allsubCategory')->with('message','SubCategor Created Successfully!');
    }
    public function editSubCategory($id)
    {
    	$subcategories = SubCategory::findOrFail($id);
    	if ($subcategories) {
    		return view('admin.subCategory.edit',compact('subcategories'));
    	}
    }
    public function editstoreSubCategory(Request $request)
    {
    	$request->validate([
            'subcategory_name' => 'required|unique:sub_categories',
        ]);
    	 SubCategory::findOrFail($request->id)->update([
    	 	'subcategory_name' => $request->subcategory_name,
    	 	'slug' => strtolower(str_replace(' ', '-', $request->subcategory_name))
    	 ]);
    	 return redirect()->route('allsubCategory')->with('message','SubCategor Updated Successfully!');
    }
    public function editimageSubCategory($id)
    {
        $subcategories = SubCategory::findOrFail($id);
        return view('admin.subCategory.editimage',compact('subcategories'));
    }
    public function storeeditimageSubCategory(Request $request)
    {
        $request->validate([
            'subcat_img' => 'required',
        ]);
        $id = $request->id;
        $subcategory = SubCategory::findOrFail($id); 
        if ($request->subcat_img != '') {
            $path = public_path().'/assets/images/frontend/subcategory/';
            if ($subcategory->subcat_img != '' && $subcategory->subcat_img != null) {
            $file_old = $path.$subcategory->subcat_img;
                if (file_exists($file_old)) {
                    unlink($file_old);
                }
                $imageName = time().'.'.$request->subcat_img->extension();
                $request->subcat_img->move($path,$imageName);
            }
            else{
                $imageName = time().'.'.$request->subcat_img->extension();
                $request->subcat_img->move(public_path('/assets/images/frontend/subcategory/'),$imageName);
            }
        }
         $subcategory->subcat_img = $imageName;
         $subcategory->update();
         return redirect()->route('allsubCategory')->with('message','SubCategory Image Updated Successfully!');
    }
    public function deleteSubCategory($id)
    {
    	$category_id = SubCategory::findOrFail($id);
    	SubCategory::findOrFail($id)->delete();
    	Category::where('id',$category_id->category_id)->decrement('subcategory_count');
    	return redirect()->route('allsubCategory')->with('message','SubCategor Delete Successfully!');
    }
}
