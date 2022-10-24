<?php
use App\Models\Product;
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

Route::get('/product/create', function () {
    return view('product.create');
});

Route::get('/product',[App\http\Controllers\ProductController::class,'create'])->name(' product.create');
Route::get('/product',[App\http\Controllers\ProductController::class,'index'])->name(' product');
Route::get('/product/{id}',[App\http\Controllers\ProductController::class,'destroy'])->name(' product.destroy');
Route::get('/product/{id}',[App\http\Controllers\ProductController::class,'edit'])->name(' product.edit');
Route::get('/product/{id}',[App\http\Controllers\ProductController::class,'update'])->name(' product.update');
Route::resource('/product','App\http\Controllers\ProductController');
