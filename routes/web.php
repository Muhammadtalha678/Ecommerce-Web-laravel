<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\ShopController;
use App\Http\Controllers\User\CartController;
use App\Http\Controllers\User\CheckoutController;
use App\Http\Controllers\Frontend\FrontendController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth','role:admin'])->name('dashboard');

Route::middleware('auth','role:admin')->group(function(){

Route::controller(DashboardController::class)->group(function(){
	Route::get('/admin/dashboard','index')->name('adminDashboard');
});

Route::controller(UserController::class)->group(function(){
	Route::get('/admin/user','index')->name('admin.user');
	Route::get('/admin/user/{id}','delete')->name('admin.delete');
});

Route::controller(CategoryController::class)->group(function(){
	Route::get('/admin/category','index')->name('allCategory');
	Route::get('/admin/category/add','create')->name('addCategory');
	Route::post('/admin/category/create','storeCategory')->name('storecategory');
	Route::get('/admin/category/delete/{id}','deleteCategory')->name('deletecategory');
	Route::get('/admin/category/edit/{id}','editCategory')->name('editcategory');
	Route::post('/admin/category/edit/editstore','editstoreCategory')->name('storeEditcategory');
	Route::get('/admin/category/editimage/{id}','editcatimg')->name('editcategoryimage');
	Route::post('/admin/category/store-editimage','storeeditcatimg')->name('EditImagecategory');
});

Route::controller(SubCategoryController::class)->group(function(){
	Route::get('/admin/subcategory','index')->name('allsubCategory');
	Route::get('/admin/subcategory/add','create')->name('addsubCategory');
	Route::post('/admin/subcategory/create','storeSubCategory')->name('storesubcategory');
	Route::get('/admin/subcategory/edit/{id}','editSubCategory')->name('Editsubcategroy');
	Route::post('/admin/subcategory/edit/editstore','editstoreSubCategory')->name('storeEditsubcategroy');
	Route::get('/admin/subcategory/editimage/{id}','editimageSubCategory')->name('EditImagesubcategroy');
	Route::post('/admin/subcategory/editimagestore','storeeditimageSubCategory')->name('StoreEditImagesubcategroy');
	Route::get('/admin/subcategory/delete/{id}','deleteSubCategory')->name('Deletesubcategroy');
});

Route::controller(ProductController::class)->group(function(){
	Route::get('/admin/product','index')->name('allProduct');
	Route::get('/admin/product/add','create')->name('addproduct');
	Route::post('/admin/product/storeproduct','storeProduct')->name('addProduct');
	Route::get('/admin/product/edit/{id}','edit')->name('editproduct');
	Route::post('/admin/product/edit','editProduct')->name('editproducts');
	Route::get('/admin/product/editimage/{id}','editimage')->name('editproductimage');
	Route::post('/admin/product/editimage','editproductimage')->name('editproductsimage');
	Route::get('/admin/product/deleteproduct/{id}','deleteProduct')->name('deleteproduct');
});

Route::controller(OrderController::class)->group(function(){
	Route::get('/admin/order/pending','pending')->name('orderPending');
	Route::get('/admin/order/complete','complete')->name('ordercomplete');
	Route::get('/admin/order/cancel','cancel')->name('orderCancel');
});

});
// For User
 Route::middleware('auth','role:user')->group(function(){
 	Route::controller(FrontendController::class)->group(function(){
		Route::get('/','index')->name('frontend.index');
		Route::get('/product-details/{slug}','productDetails')->name('frontend.productdetails');
		Route::post('/add_cart/{slug}','addCart')->name('frontend.add_cart');
 });
	});Route::controller(FrontendController::class)->group(function(){
		Route::get('/','index')->name('frontend.index');
		Route::get('/product-details/{slug}','productDetails')->name('frontend.productdetails');
	});


require __DIR__.'/auth.php';
