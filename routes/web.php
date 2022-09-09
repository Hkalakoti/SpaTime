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

Route::get('/', function () {
    return view('frontend.index');
})->name('index');

Auth::routes();

Route::get('/add', function () {
    return view('layouts.add');
})->name('add');

Route::get('/edit/{id}','App\Http\Controllers\HomeController@edit')->name('edit');

Route::get('/delete/{id}', function () {
    return view('admin.delete');
})->name('delete');


Route::post('/adding','App\Http\Controllers\HomeController@add')->name('adding');
Route::get('/banner/manage','App\Http\Controllers\HomeController@manage')->name('bannerManage');
Route::post('/banner/update','App\Http\Controllers\HomeController@updateData')->name('updateData');
Route::get('/banner/delete/{id}','App\Http\Controllers\HomeController@destroy')->name('destroy');

Route::post('/signup','App\Http\Controllers\UserController@signup')->name('signup');

Route::get('/home', [App\Http\Controllers\HomeController::class,'index'])->name('home');
