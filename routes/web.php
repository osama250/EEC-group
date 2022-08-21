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
Route::post('Products', [ ProductsController::class , 'Search' ] )->name('product.Search');
