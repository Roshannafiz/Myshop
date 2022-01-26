<?php

use App\Http\Controllers\Admin\Admin_Auth\AdminAuthController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CartController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SectionController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ShopController;
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
/*-------------------------------------------------------
 Frontend Route Here --START
|-------------------------------------------------------*/

Route::get('/', [HomeController::class, 'index']);
Route::get('/shop', [ShopController::class, 'index']);
Route::get('/cart', [App\Http\Controllers\Frontend\CartController::class, 'index']);


// Product Detail Page
Route::get('/product_view/{id}', [App\Http\Controllers\Frontend\ProductController::class, 'product_detail']);

// Get Product Attribute Price / Change Price When Change Size
Route::post('/get-product-price', [App\Http\Controllers\Frontend\ProductController::class, 'getProductPrice'])->name('get-product-price');

// Add To Cart
Route::post('/add-to-cart', [App\Http\Controllers\Frontend\CartController::class, 'addtocart']);

// Update Cart Quantity Usign Ajax
Route::post('/update-cart-item-qty', [App\Http\Controllers\Frontend\CartController::class, 'updateCartItemQty']);

// Delete Cart Item Usign Ajax
Route::post('/delete-cart-item', [App\Http\Controllers\Frontend\CartController::class, 'deleteCartItem']);




/*-------------------------------------------------------
 Admin Route Here --START
|-------------------------------------------------------*/
// Admin Login / Logout
Route::get('/admins', [AdminAuthController::class, 'index']);
Route::post('/admin_dashboard', [AdminAuthController::class, 'show_dashboard']);
Route::get('/logout', [AdminAuthController::class, 'logout']);
Route::get('/dashboard', [AdminController::class, 'dashboard']);






// Section Route Here
Route::get('/sections', [SectionController::class, 'index']);
Route::get('/section_create', [SectionController::class, 'create']);
Route::post('/section_store', [SectionController::class, 'store']);
Route::get('/section_edit/{id}', [SectionController::class, 'edit']);
Route::put('section_update/{id}', [SectionController::class, 'update']);
Route::delete('section_delete/{id}', [SectionController::class, 'destroy']);
Route::get('/section-status', [SectionController::class, 'change_status'])->name('section-status');






// Category Route Here
Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/category_create', [CategoryController::class, 'create']);
Route::post('/category_store', [CategoryController::class, 'store']);
Route::get('/category_edit/{id}', [CategoryController::class, 'edit']);
Route::put('/category_update/{id}', [CategoryController::class, 'update']);
Route::delete('category_delete/{id}', [CategoryController::class, 'destroy']);
Route::get('/category-status', [CategoryController::class, 'change_status'])->name('category-status');
//____ Automative Add Slug When Type Name Flied ___//
Route::get('posts/check_slug', [CategoryController::class, 'checkSlug'])->name('checkSlug');





// Sub Category Route Here
Route::get('/subcategories', [SubCategoryController::class, 'index']);
Route::get('/subcategory_create', [SubCategoryController::class, 'create']);
Route::post('/subcategory_store', [SubCategoryController::class, 'store']);
Route::get('/subcategory_edit/{id}', [SubCategoryController::class, 'edit']);
Route::put('/subcategory_update/{id}', [SubCategoryController::class, 'update']);
Route::delete('subcategory_delete/{id}', [SubCategoryController::class, 'destroy']);
Route::get('/subcategory-status', [SubCategoryController::class, 'change_status'])->name('subcategory-status');





// Brand Route Here
Route::get('/brands', [BrandController::class, 'index']);
Route::get('/brand_create', [BrandController::class, 'create']);
Route::post('/brand_store', [BrandController::class, 'store']);
Route::get('/brand_edit/{id}', [BrandController::class, 'edit']);
Route::put('/brand_update/{id}', [BrandController::class, 'update']);
Route::delete('brand_delete/{id}', [BrandController::class, 'destroy']);
Route::get('/brand-status', [BrandController::class, 'change_status'])->name('brand-status');




// Product Route Here
Route::get('/products', [ProductController::class, 'index']);
Route::get('/product_create', [ProductController::class, 'create']);
Route::post('/product_store', [ProductController::class, 'store']);
Route::get('/product_edit/{id}', [ProductController::class, 'edit']);
Route::put('/product_update/{id}', [ProductController::class, 'update']);
Route::delete('product_delete/{id}', [ProductController::class, 'destroy']);
Route::get('/product-status', [ProductController::class, 'change_status'])->name('product-status');
//____ Automative Add Slug When Type Name Flied ___//
Route::get('posts/check_slug', [ProductController::class, 'checkSlug'])->name('checkSlug');




// Product Attribute Route Here
Route::match(['get', 'post'], 'attribute_add/{id}', [ProductController::class, 'AddAttribute']);
Route::post('attribute_edit/{id}', [ProductController::class, 'editAttribute']);
Route::get('attribute_delete/{id}', [ProductController::class, 'deleteAttribute']);
Route::get('/attribute-status', [ProductController::class, 'attribute_change_status'])->name('attribute-status');




// Product Gallery Images Route Here
Route::match(['get', 'post'], '/gallery_image_add/{id}', [ProductController::class, 'AddGalleryImages']);
Route::get('/gallery-image-status', [ProductController::class, 'gallery_image_change_status'])->name('gallery_image-status');
Route::get('/gallery_image_delete/{id}', [ProductController::class, 'gallery_image_delete']);
