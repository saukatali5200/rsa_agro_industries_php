<?php

use Illuminate\Support\Facades\Route;

Route::prefix('adminpnlx')->group(function () {
    Route::get('login', [App\Http\Controllers\Adminpnlx\AuthController::class, 'login'])->name('Admin.login');
    Route::post('logins', [App\Http\Controllers\Adminpnlx\AuthController::class, 'logins'])->name('Admin.logins');
    Route::get('logout', [App\Http\Controllers\Adminpnlx\AuthController::class, 'logout'])->name('Admin.logout');

    Route::middleware('AuthAdmin')->group(function () {
        Route::get('/dashboard', [App\Http\Controllers\Adminpnlx\DashboardController::class, 'index'])->name('Admin.Dashboard');

        Route::get('users', [App\Http\Controllers\Adminpnlx\UserController::class, 'index'])->name('User.index');
        Route::get('users-result', [App\Http\Controllers\Adminpnlx\UserController::class, 'resultData'])->name('User.resultData');
        Route::get('users/create', [App\Http\Controllers\Adminpnlx\UserController::class, 'create'])->name('User.create');
        Route::post('users/store', [App\Http\Controllers\Adminpnlx\UserController::class, 'store'])->name('User.store');
        Route::get('users/show/{id}', [App\Http\Controllers\Adminpnlx\UserController::class, 'show'])->name('User.show');
        Route::get('users/edit/{id}', [App\Http\Controllers\Adminpnlx\UserController::class, 'edit'])->name('User.edit');
        Route::post('users/update/{id}', [App\Http\Controllers\Adminpnlx\UserController::class, 'update'])->name('User.update');
        Route::post('users/delete', [App\Http\Controllers\Adminpnlx\UserController::class, 'delete'])->name('User.delete');
        Route::get('users/status/{id}', [App\Http\Controllers\Adminpnlx\UserController::class, 'status'])->name('User.status');


        Route::get('admins', [App\Http\Controllers\Adminpnlx\AdminController::class, 'index'])->name('Admin.index');
        Route::get('admins-result', [App\Http\Controllers\Adminpnlx\AdminController::class, 'resultData'])->name('Admin.resultData');
        Route::get('admins/create', [App\Http\Controllers\Adminpnlx\AdminController::class, 'create'])->name('Admin.create');
        Route::post('admins/store', [App\Http\Controllers\Adminpnlx\AdminController::class, 'store'])->name('Admin.store');
        Route::get('admins/show/{id}', [App\Http\Controllers\Adminpnlx\AdminController::class, 'show'])->name('Admin.show');
        Route::get('admins/edit/{id}', [App\Http\Controllers\Adminpnlx\AdminController::class, 'edit'])->name('Admin.edit');
        Route::post('admins/update/{id}', [App\Http\Controllers\Adminpnlx\AdminController::class, 'update'])->name('Admin.update');
        Route::post('admins/delete', [App\Http\Controllers\Adminpnlx\AdminController::class, 'delete'])->name('Admin.delete');
        Route::get('admins/status/{id}', [App\Http\Controllers\Adminpnlx\AdminController::class, 'status'])->name('Admin.status');

        Route::get('category', [App\Http\Controllers\Adminpnlx\CategoryController::class, 'index'])->name('Category.index');
        Route::get('category-result', [App\Http\Controllers\Adminpnlx\CategoryController::class, 'resultData'])->name('Category.resultData');
        Route::get('category/create', [App\Http\Controllers\Adminpnlx\CategoryController::class, 'create'])->name('Category.create');
        Route::post('category/store', [App\Http\Controllers\Adminpnlx\CategoryController::class, 'store'])->name('Category.store');
        Route::get('category/show/{id}', [App\Http\Controllers\Adminpnlx\CategoryController::class, 'show'])->name('Category.show');
        Route::get('category/edit/{id}', [App\Http\Controllers\Adminpnlx\CategoryController::class, 'edit'])->name('Category.edit');
        Route::post('category/update/{id}', [App\Http\Controllers\Adminpnlx\CategoryController::class, 'update'])->name('Category.update');
        Route::post('category/delete', [App\Http\Controllers\Adminpnlx\CategoryController::class, 'delete'])->name('Category.delete');
        Route::get('category/status/{id}', [App\Http\Controllers\Adminpnlx\CategoryController::class, 'status'])->name('Category.status');

        Route::get('product', [App\Http\Controllers\Adminpnlx\ProductController::class, 'index'])->name('Product.index');

    });
});

