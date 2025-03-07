<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController; // <-- Add this line

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
 Route::get('/Home', function () {
     return view('home');
 });
Route::get('/',[ProductController::class,'view']);
Route::get('/product', function () {
    return view('product.create');
});
Route::post('/productinfo',[ProductController::class,'store']); 
