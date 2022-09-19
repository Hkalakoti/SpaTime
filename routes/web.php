<?php

use App\Http\Controllers\OurServices;
use App\Models\Banner;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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


Auth::routes();

Route::group(['middleware' => 'disable_back_btn'], function(){

// Route::get('/delete/{id}', function () {
//     return view('admin.delete');
// })->name('delete');

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
Route::get('/products/list','App\Http\Controllers\ProductsController@products')->name('products');
Route::get('/products/Add','App\Http\Controllers\ProductsController@Add')->name('productsAdd');
Route::post('/products/Adding','App\Http\Controllers\ProductsController@adding')->name('productsAdding'); 
Route::get('/products/manage','App\Http\Controllers\ProductsController@Manage')->name('productsManage');

// home and defaults
Route::get('/home','App\Http\Controllers\HomeController@index')->name('index');
Route::post('/signup','App\Http\Controllers\UserController@signup')->name('signup');
Route::get('/contact-us','App\Http\Controllers\HomeController@contactUs')->name('contactUs');
Route::post('/contact-us','App\Http\Controllers\HomeController@contact_Us')->name('contact_us');
Route::get('/OurServices','App\Http\Controllers\OurServicesController@view')->name('OurServices');

});