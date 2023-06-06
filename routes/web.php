<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/product',function(){return view('product');})->name('product');
Route::get('/news',function(){return view('news');})->name('news');
Route::get('/program',function(){return view('program');})->name('program');
Route::get('/about',function(){return view('aboutUs');})->name('about');
Route::get('/contact',function(){return view('contactUs');})->name('contact');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
