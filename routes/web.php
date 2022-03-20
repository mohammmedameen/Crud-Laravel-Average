<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pages\ProductController;
use App\Http\Controllers\Pages\CategoryController;
use App\Http\Controllers\Pages\IndexController;

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

// Create route for home Page
Route::get('/',[IndexController::class,'index'])->name('/');

// Create route for category Pages
Route::get('category/index',[CategoryController::class,'index'])->name('category.index');
Route::get('category/create',[CategoryController::class,'create'])->name('category.create');
Route::post('category/store',[CategoryController::class,'store'])->name('category.store');
Route::get('category/edit/{category}',[CategoryController::class,'edit'])->name('category.edit');
Route::put('category/update/{category}',[CategoryController::class,'update'])->name('category.update');
Route::delete('category/delete/{category}',[CategoryController::class,'destroy'])->name('category.destroy');
Route::get('category/show/{category}',[CategoryController::class,'show'])->name('category.show');

// Create route for product Pages
Route::get('product/index',[ProductController::class,'index'])->name('product.index');
Route::get('product/create',[ProductController::class,'create'])->name('product.create');
Route::post('product/store',[ProductController::class,'store'])->name('product.store');
Route::get('product/edit/{product}',[ProductController::class,'edit'])->name('product.edit');
Route::put('product/update/{product}',[ProductController::class,'update'])->name('product.update');
Route::delete('product/delete/{product}',[ProductController::class,'destroy'])->name('product.destroy');
Route::get('product/show/{product}',[ProductController::class,'show'])->name('product.show');



