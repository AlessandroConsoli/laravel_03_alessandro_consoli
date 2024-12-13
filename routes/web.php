<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ProductsListController;

Route::get('/', [PublicController::class, 'homepage'])->name('Home_Page');

// ROTTA ARTICOLI
Route::get('/products', [ProductsListController::class, 'ProductsList'])->name('Products_List');
// ROTTA DETTAGLIO ARTICOLO
Route::get('/product.details/{id}', [ProductsListController::class, 'ProductDetails'])->name('Product_Detail');
