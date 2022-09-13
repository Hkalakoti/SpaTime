<?php

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

Route::get('/', 'App\Http\Controllers\HomeController@home')->name('index');

Auth::routes();

Route::group(['middleware' => 'disable_back_btn'], function(){

Route::get('/add', 'App\Http\Controllers\HomeController@bannerAdd')->name('bannerAdd');

Route::get('/edit/{id}','App\Http\Controllers\HomeController@edit')->name('edit');

Route::get('/delete/{id}', function () {
    return view('admin.delete');
})->name('delete');


Route::post('/adding','App\Http\Controllers\HomeController@add')->name('adding');
Route::get('/banner/manage','App\Http\Controllers\HomeController@manage')->name('bannerManage');
Route::post('/banner/update','App\Http\Controllers\HomeController@updateData')->name('updateData');
Route::get('/banner/delete/{id}','App\Http\Controllers\HomeController@destroy')->name('destroy');

Route::post('/signup','App\Http\Controllers\UserController@signup')->name('signup');

Route::get('/home','App\Http\Controllers\HomeController@index')->name('home');

Route::get('/products-listing','App\Http\Controllers\HomeController@category')->name('category');
Route::get('/Category','App\Http\Controllers\HomeController@products')->name('products');
Route::get('/Category/Add','App\Http\Controllers\HomeController@categoryAdd')->name('categoryAdd'); 
Route::post('/Category/Adding','App\Http\Controllers\HomeController@categoryAdding')->name('categoryAdding'); 
Route::get('/Category/Manage','App\Http\Controllers\HomeController@categoryManage')->name('categoryManage');
Route::get('/Category/edit/{id}','App\Http\Controllers\HomeController@categoryEdit')->name('categoryEdit ');
Route::post('/Category/update','App\Http\Controllers\HomeController@updateCategory')->name('updateCategory');


});