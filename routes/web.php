<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Products\ProductsController;
use App\Http\Controllers\Pharmacies\PharmaciesController;
use App\Http\Controllers\Product_Pharmacy\ProductPharmacyController;



Route::get('/', function () {
    return view('index');
})->name('homepage');

// Phamacy
Route::resource('Pharmacies', PharmaciesController::class);

// Products
Route::resource('Products', ProductsController::class);

// products-pharmacies
Route::get('Pharmacy\Products\Add', [ ProductPharmacyController::class , 'index'] )->name('Pro_Pharmacy');

Route::post('Pharmacy\Products\Add', [ ProductPharmacyController::class , 'store'] )->name('Pro_Pharmacy.store');

// Search
Route::get('products', [ ProductsController::class , 'SearchView' ] )->name('product.ViewSearch');
Route::post('products', [ ProductsController::class , 'Search' ] )->name('productSearch.result');

