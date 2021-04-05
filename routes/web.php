<?php

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

use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Controls\PageController as ControlsPageController;
use App\Http\Controllers\Controls\ProductController as ControlsProductController;
use App\Http\Controllers\Controls\OrderController as ControlsOrderController;
use App\Http\Controllers\Controls\BrandController as ControlsBrandController;
use App\Http\Controllers\Controls\CategoryController as ControlsCategoryController;
use App\Http\Controllers\Controls\SubcategoryController as ControlsSubcategoryController;
use App\Http\Controllers\Controls\UserController as ControlsUserController;
use App\Http\Controllers\Controls\CartController as ControlsCartController;


// use App\Http\Controllers\MemberController;
// use App\Http\Controllers\MemberSessionController;
// Route::prefix('members')->name('members.')->group(function(){
//     Route::resource('/', MemberController::class)->only(['create', 'store']);
//     Route::delete('/session', [MemberSessionController::class, 'delete'])->name('session.delete');
//     Route::resource('session', MemberSessionController::class)->only([
//         'create',
//         'store',
//     ]);
// });

Route::get('/', [PageController::class, 'home'])->name('root');

// == not logged in ==
// page
// products
Route::resource('products', ProductController::class)->only('show', 'index');
// products/search
// users
// cart/index
Route::prefix('cart')->name('cart.')->group(function () {
    Route::get('/', [CartController::class, 'index'])->name('index');
    Route::post('/addToCart', [CartController::class, 'addToCart'])->name('addToCart');
    Route::delete('/deleteCartItem', [CartController::class, 'deleteCartItem'])->name('deleteCartItem');
    Route::patch('/updateCartItems', [CartController::class, 'updateCartItems'])->name('updateCartItems');
});

// == logged in ==
// orders
// profile
// cart/purchase

// == admin ==
// controls/page
// controls/products , product options
// controls/orders
// controls/brands
// controls/categories , subcategories
// controls/users
// controls/cart
Route::prefix('controls')->name('controls.')->middleware(['auth:admin'])->group(function () {
    Route::get('/', [ControlsPageController::class, 'home'])->name('home');
    Route::resource('products', ControlsProductController::class)->except('show');
    Route::resource('orders', ControlsOrderController::class)->except('show', 'create', 'store');
    Route::resource('brands', ControlsBrandController::class)->except('show');
    Route::resource('categories', ControlsCategoryController::class)->except('show');
    Route::resource('categories.subcategories', ControlsSubcategoryController::class)->except('show');

    Route::resource('users', ControlsUserController::class)->except('show');
    Route::resource('cart', ControlsCartController::class)->only('index');
});


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
