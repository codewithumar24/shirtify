<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;

// shop routes
Route::get("/", [ShopController::class, 'index'])->name('shop.index');
Route::get('/shirt/{slug}', [ShopController::class, 'detail'])->name('shop.detail');


Route::get("/login", [AuthController::class, 'loginForm'])->name("loginForm");
Route::post("/login", [AuthController::class, 'login'])->name("login");
Route::post("/logout", [AuthController::class, 'logout'])->name('logout');


Route::get("/signup", [AuthController::class, 'signupForm'])->name("signupForm");
Route::post("/register", [AuthController::class, 'register'])->name("register");


Route::get('/', [ShopController::class, 'index'])->name("shirts.index");
Route::get('/shirts/shop', [ShopController::class, 'shop'])->name("shirts.shop");
Route::get('/shirts/product/{id}' , [ShopController::class, 'productDetail'])->name("shirts.product");
Route::get('/shirts/contact', [ShopController::class, 'contact'])->name("shirts.contact");
Route::get('/shirts/addcart', [ShopController::class, 'addToCart'])->name("shirts.addcart");
Route::get('/shirts/about', [ShopController::class, 'about'])->name("shirts.about");
Route::get('/checkout/checkout', [ShopController::class, 'checkout'])->name("shirts.checkout");


// Admin Dashboard Routes
Route::middleware(['auth'])->prefix('admin')->group(function () {

    Route::get("/main", [AdminController::class, 'index'])->name('admin.main');
    Route::get("/products", [AdminController::class, 'products'])->name('admin.products');
    Route::get("/orders", [AdminController::class, 'orders'])->name('admin.orders');

    // product crud routes
    Route::get("/product/create", [ProductController::class, 'create'])->name('admin.products.create');
    Route::post("/product/store", [ProductController::class, 'store'])->name('admin.products.store');
    Route::get("/product/edit", [ProductController::class, 'edit'])->name('admin.products.edit');
    Route::delete('/admin/products/{id}', [ProductController::class, 'destroy'])->name('admin.products.destroy');

    // Show edit form
    Route::get('/admin/products/edit/{id}', [ProductController::class, 'edit'])->name('admin.products.edit');

    // Handle update
    Route::post('/admin/products/{id}', [ProductController::class, 'update'])->name('admin.products.update');
    Route::get('/category',[CategoryController::class,'index'])->name("admin.category.index");
    Route::get('/category/create',[CategoryController::class,'create'])->name("admin.category.create");
    Route::post('/category/store',[CategoryController::class,'store'])->name("admin.category.store");
});
