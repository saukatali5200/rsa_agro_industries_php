<?php

use Illuminate\Support\Facades\Route;


Route::get('/', [App\Http\Controllers\Adminpnlx\DashboardController::class,'index'])->name('Admin.Dashboard');

Route::get('category', [App\Http\Controllers\Adminpnlx\CategoryController::class,'index'])->name('Category.index');
Route::get('category-result', [App\Http\Controllers\Adminpnlx\CategoryController::class,'resultData'])->name('Category.resultData');
Route::get('category/create', [App\Http\Controllers\Adminpnlx\CategoryController::class,'create'])->name('Category.create');
Route::post('category/store', [App\Http\Controllers\Adminpnlx\CategoryController::class,'store'])->name('Category.store');
Route::get('category/show/{id}', [App\Http\Controllers\Adminpnlx\CategoryController::class,'show'])->name('Category.show');
Route::get('category/edit/{id}', [App\Http\Controllers\Adminpnlx\CategoryController::class,'edit'])->name('Category.edit');
Route::post('category/update/{id}', [App\Http\Controllers\Adminpnlx\CategoryController::class,'update'])->name('Category.update');
Route::post('category/delete', [App\Http\Controllers\Adminpnlx\CategoryController::class,'delete'])->name('Category.delete');
Route::get('category/status/{id}', [App\Http\Controllers\Adminpnlx\CategoryController::class,'status'])->name('Category.status');

Route::get('product', [App\Http\Controllers\Adminpnlx\ProductController::class,'index'])->name('Product.index');

