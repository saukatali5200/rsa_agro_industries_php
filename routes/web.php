<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\Frontend\HomeController::class, 'index'])->name('Front.index');
Route::get('/home', [App\Http\Controllers\Frontend\HomeController::class, 'index'])->name('Front.home');
Route::get('/features', [App\Http\Controllers\Frontend\HomeController::class, 'features'])->name('Front.features');
Route::get('/innovations', [App\Http\Controllers\Frontend\HomeController::class, 'innovations'])->name('Front.innovations');
Route::get('/architecture', [App\Http\Controllers\Frontend\HomeController::class, 'architecture'])->name('Front.architecture');
Route::get('/benchmarks', [App\Http\Controllers\Frontend\HomeController::class, 'benchmarks'])->name('Front.benchmarks');
Route::get('/contact', [App\Http\Controllers\Frontend\HomeController::class, 'contact'])->name('Front.contact');
Route::get('/careers', [App\Http\Controllers\Frontend\HomeController::class, 'careers'])->name('Front.careers');
Route::get('/faq', [App\Http\Controllers\Frontend\HomeController::class, 'faq'])->name('Front.faq');
Route::get('/privacy', [App\Http\Controllers\Frontend\HomeController::class, 'privacy'])->name('Front.privacy');
Route::get('/terms', [App\Http\Controllers\Frontend\HomeController::class, 'terms'])->name('Front.terms');


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

        Route::get('roles', [App\Http\Controllers\Adminpnlx\RoleController::class, 'index'])->name('Role.index');
        Route::get('roles-result', [App\Http\Controllers\Adminpnlx\RoleController::class, 'resultData'])->name('Role.resultData');
        Route::get('roles/create', [App\Http\Controllers\Adminpnlx\RoleController::class, 'create'])->name('Role.create');
        Route::post('roles/store', [App\Http\Controllers\Adminpnlx\RoleController::class, 'store'])->name('Role.store');
        Route::get('roles/show/{id}', [App\Http\Controllers\Adminpnlx\RoleController::class, 'show'])->name('Role.show');
        Route::get('roles/edit/{id}', [App\Http\Controllers\Adminpnlx\RoleController::class, 'edit'])->name('Role.edit');
        Route::post('roles/update/{id}', [App\Http\Controllers\Adminpnlx\RoleController::class, 'update'])->name('Role.update');
        Route::post('roles/delete', [App\Http\Controllers\Adminpnlx\RoleController::class, 'delete'])->name('Role.delete');
        Route::get('roles/status/{id}', [App\Http\Controllers\Adminpnlx\RoleController::class, 'status'])->name('Role.status');
        Route::get('roles/assign/{id}', [App\Http\Controllers\Adminpnlx\RoleController::class, 'assign'])->name('Role.assign');
        Route::post('roles/assign-permission', [App\Http\Controllers\Adminpnlx\RoleController::class, 'assignPermission'])->name('Role.assignPermission');

        Route::get('modules', [App\Http\Controllers\Adminpnlx\ModuleController::class, 'index'])->name('Module.index');
        Route::get('modules-result', [App\Http\Controllers\Adminpnlx\ModuleController::class, 'resultData'])->name('Module.resultData');
        Route::get('modules/create', [App\Http\Controllers\Adminpnlx\ModuleController::class, 'create'])->name('Module.create');
        Route::post('modules/store', [App\Http\Controllers\Adminpnlx\ModuleController::class, 'store'])->name('Module.store');
        Route::get('modules/show/{id}', [App\Http\Controllers\Adminpnlx\ModuleController::class, 'show'])->name('Module.show');
        Route::get('modules/edit/{id}', [App\Http\Controllers\Adminpnlx\ModuleController::class, 'edit'])->name('Module.edit');
        Route::post('modules/update/{id}', [App\Http\Controllers\Adminpnlx\ModuleController::class, 'update'])->name('Module.update');
        Route::post('modules/delete', [App\Http\Controllers\Adminpnlx\ModuleController::class, 'delete'])->name('Module.delete');
        Route::get('modules/status/{id}', [App\Http\Controllers\Adminpnlx\ModuleController::class, 'status'])->name('Module.status');

        Route::get('product', [App\Http\Controllers\Adminpnlx\ProductController::class, 'index'])->name('Product.index');
        Route::get('product-result', [App\Http\Controllers\Adminpnlx\ProductController::class, 'resultData'])->name('Product.resultData');
        Route::get('product/create', [App\Http\Controllers\Adminpnlx\ProductController::class, 'create'])->name('Product.create');
        Route::post('product/store', [App\Http\Controllers\Adminpnlx\ProductController::class, 'store'])->name('Product.store');
        Route::get('product/show/{id}', [App\Http\Controllers\Adminpnlx\ProductController::class, 'show'])->name('Product.show');
        Route::get('product/edit/{id}', [App\Http\Controllers\Adminpnlx\ProductController::class, 'edit'])->name('Product.edit');
        Route::post('product/update/{id}', [App\Http\Controllers\Adminpnlx\ProductController::class, 'update'])->name('Product.update');
        Route::post('product/delete', [App\Http\Controllers\Adminpnlx\ProductController::class, 'delete'])->name('Product.delete');
        Route::get('product/status/{id}', [App\Http\Controllers\Adminpnlx\ProductController::class, 'status'])->name('Product.status');

        Route::get('category', [App\Http\Controllers\Adminpnlx\CategoryController::class, 'index'])->name('Category.index');
        Route::get('category-result', [App\Http\Controllers\Adminpnlx\CategoryController::class, 'resultData'])->name('Category.resultData');
        Route::get('category/create', [App\Http\Controllers\Adminpnlx\CategoryController::class, 'create'])->name('Category.create');
        Route::post('category/store', [App\Http\Controllers\Adminpnlx\CategoryController::class, 'store'])->name('Category.store');
        Route::get('category/show/{id}', [App\Http\Controllers\Adminpnlx\CategoryController::class, 'show'])->name('Category.show');
        Route::get('category/edit/{id}', [App\Http\Controllers\Adminpnlx\CategoryController::class, 'edit'])->name('Category.edit');
        Route::post('category/update/{id}', [App\Http\Controllers\Adminpnlx\CategoryController::class, 'update'])->name('Category.update');
        Route::post('category/delete', [App\Http\Controllers\Adminpnlx\CategoryController::class, 'delete'])->name('Category.delete');
        Route::get('category/status/{id}', [App\Http\Controllers\Adminpnlx\CategoryController::class, 'status'])->name('Category.status');

    });
});

