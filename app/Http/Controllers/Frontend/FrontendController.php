<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\SubCategory;
use Auth;
class FrontendController extends Controller
{
    public function index()
    {
    	$products = Product::where('status','0')->Paginate(10);
    	// $categories = Category::take(15)->get();/
    	return view('frontend.frontendDashboard',compact('products'));
    }
    public function productDetails($slug)
    {
        $product = Product::where('slug',$slug)->first();
        return view('frontend.products.productDetails',compact('product'));
    }
    public function addCart($slug)
    {
       $user = Auth::user();
       $product = Product::where('slug',$slug)->first();
       dd($product);
    }
}
