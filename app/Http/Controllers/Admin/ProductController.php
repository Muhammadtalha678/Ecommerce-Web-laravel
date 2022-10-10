<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Product;
class ProductController extends Controller
{
    public function index()
    {
    	$products = Product::latest()->get();
    	return view('admin.product.index',compact('products'));
    }
    public function create()
    {
    	$subcategories = SubCategory::latest()->get();
    	$categories = Category::latest()->get();
    	return view('admin.product.add',compact('categories','subcategories')); 
    }
    public function storeProduct(Request $request)
    {
    	$request->validate([
    		'product_name' => 'required|unique:products',
            'original_price' => 'required',
    		'qty' => 'required',
    		'product_short_des' => 'required',
    		'product_long_des' => 'required',
    		'category_id' => 'required',
    		'subcategory_id' => 'required',
            'tax' => 'required',
            // 'product_sale' => 'required',
            // 'product_new' => 'required',
    		'product_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    	]);
    	$imageName = time().'.'.$request->product_img->extension();
    	// return $imageName;
    	 $request->product_img->move(public_path('/assets/images/frontend/products/'), $imageName);


    	$category_id = $request->category_id;
    	$category_name = Category::where('id',$category_id)->value('category_name');

    	$subcategory_id = $request->subcategory_id;
    	$subcategory_name = SubCategory::where('id',$subcategory_id)->value('subcategory_name'); 
    	Product::insert([
    		'product_name' => $request->product_name,
    		'slug' => strtolower(str_replace(' ', '-', $request->product_name)),
    		'product_short_des' => $request->product_short_des,
    		'product_long_des' => $request->product_long_des,
    		'selling_price' => $request->selling_price,
            'original_price' => $request->original_price,
    		'qty' => $request->qty,
    		'product_category_name' => $category_name,
    		'product_subcategory_name' => $subcategory_name,
    		'product_category_id' => $request->category_id,
    		'product_subcategory_id' => $request->subcategory_id,
            'trending' => $request->trending == True ? 1 : 0,
            'status' => $request->status == True ? 1 : 0,
            'tax' => $request->tax,
            'product_sale' => $request->product_sale == True ? 1 : 0,
            'product_new' => $request->product_new == True ? 1 : 0,
    		'product_img' => $imageName
    	]);
    	 SubCategory::where('id',$subcategory_id)->increment('product_count');
         Category::where('id',$category_id)->increment('product_count');
    	return redirect()->route('allProduct')->with('message','Product Created Successfully!');
    }
    public function edit($id)
    {
         // product value
    	$product = Product::findOrFail($id);
        // category name
         $category_id = $product->product_category_id;
         $categories = Category::where('id',$category_id)->value('category_name');
         //subcategory name
         $subcategory_id = $product->product_subcategory_id;
         $subcategories = SubCategory::where('id',$subcategory_id)->value('subcategory_name');
    	return view('admin.product.edit',compact('product','categories','subcategories'));
    }
    public function editimage($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.product.editimage',compact('product'));
    }
    public function editproductimage(Request $request)
    {
        $data = Product::findOrFail($request->id);
        $request->validate([
            'product_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
       if ($request->product_img != '') {
           $path = public_path().'/assets/images/frontend/products/';
           if ($data->product_img != '' && $data->product_img != null) {
               $file_old = $path.$data->product_img;
                if (file_exists($file_old)) {
                unlink($file_old);
                }
               $imageName = time().'.'.$request->product_img->extension();
               $request->product_img->move($path,$imageName);
           }
           else{
            $imageName = time().'.'.$request->product_img->extension();
            $request->product_img->move($path,$imageName);
           }
       }
       Product::findOrFail($request->id)->update([
        'product_img' => $imageName
       ]);
       return redirect()->route('allProduct')->with('message','Product Image Updated Successfully!');
    }

    public function editProduct(Request $request)
    {
        $products = Product::findOrFail($request->id);
        // echo($products);exit();
        $request->validate([
    		'product_name' => 'required|',
            'original_price' => 'required',
    		'qty' => 'required',
            'tax' => 'required',
    		'product_short_des' => 'required',
    		'product_long_des' => 'required',
    		// 'product_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    	]);
        // var_dump($request->trending);
        // var_dump($request->status);exit();
            $products->product_name = $request->product_name;
            $products->slug = strtolower(str_replace(' ', '-', $request->product_name));
            $products->product_short_des = $request->product_short_des;
            $products->product_long_des = $request->product_long_des;
            $products->selling_price = $request->selling_price;
            $products->original_price = $request->original_price;
            $products->qty = $request->qty;
            $products->trending = $request->trending == True ? 1 : 0;
            $products->status = $request->status == True ? 1 : 0;
            $products->tax = $request->tax;
            $products->product_sale =  $request->product_sale == True ? 1 : 0;
            $products->product_new =  $request->product_new == True ? 1 : 0;
            $products->update();
    	return redirect()->route('allProduct')->with('message','Product Updated Successfully!');
    }
    public function deleteProduct($id)
    {
    	$product = Product::findOrFail($id);
    	$path = public_path().'/assets/images/frontend/products/';
    	unlink($path.$product->product_img);
    	SubCategory::where('id',$product->product_subcategory_id)->decrement('product_count');
        Category::where('id',$product->product_category_id)->decrement('product_count');
    	Product::findOrFail($id)->delete();
    	return redirect()->route('allProduct')->with('message','Product deleted Successfully!');
    }
}
