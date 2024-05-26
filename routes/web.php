<?php

use App\Http\Controllers\admin\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\admin\AdminBlogController;
use App\Http\Controllers\admin\AdminCategoryController;
use App\Http\Controllers\admin\AdminCommentController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\AdminLogoutController;
use App\Http\Controllers\admin\AdminOrderController;
use App\Http\Controllers\admin\AdminProductController;
use App\Http\Controllers\admin\AdminRoleController;
use App\Http\Controllers\admin\AdminSettingController;
use App\Http\Controllers\admin\AdminUserController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\ForgotpassController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PassnewController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\ViewcartController;
use App\Http\Controllers\WishlistController;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[HomeController::class, 'index'])->name('home');
Route::get('/detail/{slug}',[DetailController::class, 'detail'])->name('detail');
Route::get('/products',[ProductController::class, 'index'])->name('products');
Route::get('/products/search',[ProductController::class, 'search'])->name('products.search');
Route::get('/products/filter',[ProductController::class, 'filter'])->name('products.filter');
Route::get('/about',[AboutController::class, 'index'])->name('about');
Route::get('/blog',[BlogController::class, 'index'])->name('blog');
Route::get('/contact',[ContactController::class, 'index'])->name('contact');
Route::get('/viewcart',[ViewcartController::class, 'index'])->name('viewcart');
Route::get('/checkout',[CheckoutController::class, 'index'])->name('checkout');
Route::get('/login',[LoginController::class, 'index'])->name('login');
Route::get('/signup',[SignupController::class, 'index'])->name('signup');
Route::get('/forgotpass',[ForgotpassController::class, 'index'])->name('forgotpass');
Route::get('/passnew',[PassnewController::class, 'index'])->name('passnew');
Route::get('/wishlist',[WishlistController::class, 'index'])->name('wishlist');

Route::fallback(function () {
    return response()->view('error.404', [], 404);
});
// admin routes 
// middleware('auth.admin')->
Route::get('loginAdmin', [AdminController::class, 'login'])->name('loginAdmin');
Route::post('loginAdmin', [AdminController::class, 'postlogin'])->name('login.admin');
Route::get('logoutAdmin', [AdminController::class, 'logout'])->name('logout.admin');
Route::middleware('auth.admin')->prefix('admin')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    // Route::post('admin-dashboard',[AdminController::class, 'dashboard']);
    Route::prefix('products')->group( function() {
        Route::get('/',[AdminProductController::class,'index'])->name('allproduct');
        // Route::get('/edit',[AdminProductController::class,'index'])->name('editproduct');
        Route::get('/add',[AdminProductController::class,'addproduct'])->name('addproduct');
        // Route::get('/deteleproduct',[AdminProductController::class,'index'])->name('deteleproduct');
    });
    Route::prefix('categories')->group( function() {

        Route::get('/',[AdminCategoryController::class,'index'])->name('allcategory');
        Route::get('/add',[AdminCategoryController::class,'addcategory'])->name('addcategory');
    });
    Route::prefix('user')->group( function() {
        Route::get('/',[AdminUserController::class,'index'])->name('alluser');
        Route::get('/add',[AdminUserController::class,'adduser'])->name('adduser');
    });
    Route::prefix('role')->group( function() {
        Route::get('/',[AdminRoleController::class,'index'])->name('allrole');
        Route::get('/add',[AdminRoleController::class,'addrole'])->name('addrole');
    });
    Route::prefix('blog')->group( function() {
        Route::get('/',[AdminBlogController::class,'index'])->name('allblog');
        Route::get('/add',[AdminBlogController::class,'addblog'])->name('addblog');
    });
    Route::prefix('order')->group( function() {
        Route::get('/',[AdminOrderController::class,'index'])->name('order');
    });
    Route::prefix('comment')->group( function() {
        Route::get('/',[AdminCommentController::class,'index'])->name('comment');
    });
    Route::prefix('setting')->group( function() {
        Route::get('/',[AdminSettingController::class,'index'])->name('setting');
    });
}); 