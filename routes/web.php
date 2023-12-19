<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdutcsController;
use App\Http\Controllers\SellsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');

//produtcs
Route::get('/products', [ProdutcsController::class, 'index'])->name('products');
Route::get('/add_products', [ProdutcsController::class, 'add'])->name('add_products');
Route::post('/store_products', [ProdutcsController::class, 'store'])->name('store_products');
Route::get('/sell_products/{id}', [ProdutcsController::class, 'sell'])->name('sell_product');
Route::post('/save_sell_products', [ProdutcsController::class, 'save_sell'])->name('save_sell_product');
Route::get('/update_products/{id}', [ProdutcsController::class, 'update'])->name('update_product');
Route::post('/store_update_products', [ProdutcsController::class, 'store_update'])->name('store_update_product');



//sells
Route::get('/sells', [SellsController::class, 'index'])->name('sells');
