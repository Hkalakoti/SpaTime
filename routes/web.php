<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/', 'App\Http\Controllers\HomeController@home')->name('home');
Route::get('/home','App\Http\Controllers\HomeController@index')->name('index');


Auth::routes();

Route::group(['middleware' => 'disable_back_btn'], function(){

// Banner
Route::get('/add', 'App\Http\Controllers\HomeController@bannerAdd')->name('bannerAdd');
Route::post('/adding','App\Http\Controllers\HomeController@add')->name('adding');
Route::get('/banner/manage','App\Http\Controllers\HomeController@manage')->name('bannerManage');
Route::post('/banner/update','App\Http\Controllers\HomeController@updateData')->name('updateData');
Route::get('/banner/delete/{id}','App\Http\Controllers\HomeController@destroy')->name('destroy');
Route::get('/edit/{id}','App\Http\Controllers\HomeController@edit')->name('edit');

// Category
Route::get('/products-listing','App\Http\Controllers\CategoryController@category')->name('category');
Route::get('/Category/Add','App\Http\Controllers\CategoryController@add')->name('categoryAdd'); 
Route::post('/Category/Adding','App\Http\Controllers\CategoryController@adding')->name('categoryAdding'); 
Route::get('/Category/Manage','App\Http\Controllers\CategoryController@manage')->name('categoryManage');
Route::get('/Category/edit/{id}','App\Http\Controllers\CategoryController@edit')->name('categoryEdit');
Route::post('/Category/update','App\Http\Controllers\CategoryController@update')->name('updateCategory');
Route::get('/Category/delete/{id}','App\Http\Controllers\CategoryController@destroy')->name('categoryDestroy');

// products
Route::get('/test/{id}','App\Http\Controllers\ProductsController@products')->name('productsID');
Route::get('/products/Add','App\Http\Controllers\ProductsController@add')->name('productsAdd');
Route::post('/products/Adding','App\Http\Controllers\ProductsController@adding')->name('productsAdding'); 
Route::get('/products/manage','App\Http\Controllers\ProductsController@Manage')->name('productsManage');
Route::get('/products/edit/{id}','App\Http\Controllers\ProductsController@edit')->name('productsEdit');
Route::post('/products/update','App\Http\Controllers\ProductsController@update')->name('updateProducts');
Route::get('/products/delete/{id}','App\Http\Controllers\ProductsController@destroy')->name('productsDestroy');


// home and defaults
Route::post('/signup','App\Http\Controllers\UserController@signup')->name('signup');

// e-commerce

    // cart
Route::get('/Shopping-cart','App\Http\Controllers\CartController@cart')->name('cart');
Route::get('/addToCart','App\Http\Controllers\CartController@cartAdd')->name('cartAdd');
Route::get('/update-item/{id}','App\Http\Controllers\CartController@update')->name('cartUpdate');
Route::get('/delete-item', 'App\Http\Controllers\CartController@destroy')->name('cartDestroy');

    // ContactUs
Route::get('/contact-us','App\Http\Controllers\HomeController@contactUs')->name('contactUs');
Route::post('/contact-us','App\Http\Controllers\HomeController@contact_Us')->name('contact_us');

    // checkout
Route::get('/Checkout','App\Http\Controllers\HomeController@checkout')->name('check_out');

    // Services
Route::get('/OurServices','App\Http\Controllers\OurServicesController@view')->name('OurServices');
Route::get('/OurServices/Add','App\Http\Controllers\OurServicesController@add')->name('ServicesAdd');

    // coupons
Route::get('/Coupon/Add','App\Http\Controllers\CouponController@add')->name('couponAdd');
Route::post('/Coupon/Adding','App\Http\Controllers\CouponController@adding')->name('couponAdding');
Route::get('/Coupon/Delete/{id}', 'App\Http\Controllers\CouponController@destroy')->name('couponDestroy');
Route::get('/Coupon/Manage','App\Http\Controllers\CouponController@manage')->name('couponManage');
Route::get('/Coupon/Edit/{id}','App\Http\Controllers\CouponController@edit')->name('couponEdit');
Route::post('/Coupon/update','App\Http\Controllers\CouponController@update')->name('couponUpdate');

// data table
Route::get('/users', [UserController::class, 'index'])->name('users.index');
});
