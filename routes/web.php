<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    DashboardController,
    ProductCategoryController,
    ProductController, 
    UserController
};

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

/*
-Route::get('/product-categories', [ProductCategoryController::class, 'index' ]);
 Route::get('/product-categories', [ProductCategoryController::class, 'create']);

-Route::controller(ProductCategoryController::class)->group(function() {
    Route::get('/product-categories', 'index');
});
*/

//Route::get('/signup', [UserController::class, 'create']);
//Route::post('/signup', [UserController::class, 'signup']);

Route::prefix('/dashboard')
    ->middleware('auth')
    ->group(function() {
        Route::controller(DashboardController::class)
            ->group(function() {
                Route::get('/', 'index');
            });
        //Route::get('/',[DashboardController::class, 'index']);

        Route::prefix('/product-categories')
            ->controller(ProductCategoryController::class)
            ->group(function() {
                Route::delete('/{productCategory}','destroy');
                Route::get('/', 'index');
                Route::get('/create', 'create');
                Route::get('/{productCategory}/edit', 'edit');
                Route::get('/{productCategory}/products', 'show');        
                Route::post('/', 'store');
                Route::put('{productCategory}','update');        
            });
    });


Route::prefix('/login')
    ->controller(UserController::class)
    ->group(function() {
        Route::get('/', 'login')->name('login');
        Route::post('/','login');
    });

Route::prefix('/product-categories')
    ->controller(ProductCategoryController::class)
    ->group(function() {
        Route::get('/all', 'all');
    });

Route::prefix('/products')
    ->controller(ProductController::class)
    ->group(function() {
        Route::delete('/{product}','destroy');
        Route::get('/','index');
        Route::get('/all', 'all');
        Route::get('/create', 'create');
        Route::get('/{product}/edit', 'edit');
        Route::get('/{product}', 'show');        
        Route::post('/', 'store');
        Route::put('{product}','update');

    });

Route::prefix('/signup')
    ->controller(UserController::class)
    ->group(function() {
        Route::get('/', 'create');
        Route::post('/', 'signup');
    });