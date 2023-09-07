<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Providers\AdminProvider;
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
    return view('welcome');
});

Route::get('/products', [ProductController::class, 'index'])->name('products.index');
// Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::get('/products/{id}/category', [ProductController::class, 'category'])->name('product.category');
Route::get('products/{id}/details', [ProductController::class, 'details'])->name('products.details');
Route::get('/products/search', [ProductController::class, 'search_products'])->name('products.search');
Route::post('/product/rate/{id}', [ProductController::class, 'rating'])->name('product.rate');





// User & Auth
Route::get('auth/login', [AuthController::class, 'getLogin'])->name('login');

Route::get('auth/login', [AuthController::class, 'getLogin'])->name('auth.getLogin');
Route::post('auth/login', [AuthController::class, 'postLogin'])->name('auth.postLogin');
Route::get('auth/register', [AuthController::class, 'getRegister'])->name('auth.getRegister');
Route::post('auth/register', [AuthController::class, 'postRegister'])->name('auth.postRegister');
Route::get("/auth/logout", [AuthController::class, 'logout'])->name('auth.logout');

Route::middleware('auth')->group(
    function() {
        //User's Profile and Functionnalities
            Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
            Route::get('/profile/create_product', [ProfileController::class, 'create'])->name('profile.create');
            Route::post('/profile/create_product', [ProfileController::class, 'save'])->name('profile.save');
            Route::get('/profile/help', [ProfileController::class, 'get_help'])->name('profile.help');
            Route::post('/profile/help', [ProfileController::class, 'save_help'])->name('profile.save_help');
            Route::get('profile/{id}/edit', [ProfileController::class, 'edit'])->name('profile.edit');
            Route::put("/profile/{id}", [ProfileController::class, 'update'])->name('profile.update');
            Route::delete("/profile/{id}/delete", [ProfileController::class, 'delete'])->name('profile.delete');
            Route::get('/products/{id}/buy', [ProductController::class, 'buy_product'])->name('product.buy');

}); 
 
 Route::middleware('isAdmin')->group(
    function() {
        //Admin & Auth
        Route::get('/admin', [AdminController::class, 'adminHome'])->name('admin.home');
        Route::get('/admin/users', [AdminController::class, 'users'])->name('view_users');
        Route::get('/admin/products', [AdminController::class, 'products'])->name('view_products');
        Route::delete('/admin/products/{id}/delete', [AdminController::class, 'delete_product'])->name('delete_product');
        Route::delete('/admin/users/{id}/delete', [AdminController::class, 'delete_user'])->name('delete_user');
        Route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

        Route::get('admin/categories', [CategoryController::class, 'view_categories'])->name('admin.categories');
        Route::get('/admin/category/{id}/edit', [CategoryController::class, 'edit_category'])->name('edit.category');
        // Route::put('/admin/categories/{id}/update', [CategoryController::class, 'update_category'])->name('update_category');
        Route::post('/admin/categories', [CategoryController::class, 'save_category'])->name('save_category');
        Route::delete("/admin/category/{id}/delete", [CategoryController::class, 'delete_category'])->name('delete.category');

        Route::get('admin/search', [AdminController::class, 'admin_search'])->name('admin.search');
        Route::get('admin/user/search', [AdminController::class, 'users'])->name('user.search');
        Route::get('admin/user/{id}/details', [AdminController::class, 'view_user'])->name('view.user');
        Route::get('admin/product/{id}/details', [AdminController::class, 'view_product'])->name('view.product');


 }); 