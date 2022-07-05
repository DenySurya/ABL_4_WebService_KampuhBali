<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoriesController;
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
    return view('template/landing');
});

Route::get('/dashboard', function () {
    return view('admin/dashboard');
})->middleware(['auth'])->name('dashboard');

// Route::get('/produk', function () {
//     return view('admin/produk');
// })->middleware(['auth'])->name('produk');

// Route::get('/kategori', function () {
//     return view('admin/kategori');
// })->middleware(['auth'])->name('kategori');

// Route::resource('/products','App\Http\Controllers\ProductController');

Route::get('home', [HomeController::class,'index'])->middleware(['auth'])->name('home');
require __DIR__.'/auth.php';

Route::get('/produk',[ProductController::class,'index'])->name('produk');
Route::get('/kategori',[CategoriesController::class,'index'])->name('kategori');
Route::get('/tambahproduk',[ProductController::class,'tambahproduk'])->name('tambahproduk');
Route::post('/tambahdata',[ProductController::class,'tambahdata'])->name('tambahdata');