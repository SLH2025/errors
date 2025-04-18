<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\SaleController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::prefix('brands')->group(function () {
    Route::match(['get', 'post'], '/', [BrandController::class, 'brand'])->name('brands');
    Route::get('delete/{id}', [BrandController::class, 'delete'])->name('brand.delete');
});

route::prefix('sales')->group(function () {
    Route::get('summary', [SaleController::class, 'summary'])->name('sales.summary');
    Route::match(['get', 'post'], 'form', [SaleController::class, 'form'])->name('sales.form');
});

Route::prefix('price')->group(function () {
    Route::match(['get', 'post'], '/', [BrandController::class, 'price'])->name('price');
    Route::get('delete/{id}', [BrandController::class, 'deleteprice'])->name('price.delete');
});
