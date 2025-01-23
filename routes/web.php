<?php

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
    return view('frontend.home');
});

Route::get('/featured',function(){
    return view('frontend.featured');
})->name('featured');
Route::get('/featured',function(){
    return view('frontend.featured');
});
Route::get('/popular',function(){
    return view('frontend.popular');
});
Route::get('/offers',function(){
    return view('frontend.offers');
});
Route::get('/articles',function(){
    return view('frontend.articles');
});
