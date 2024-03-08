<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;


Route::get('/', function () {
    return view('form');
});

Route::get('/products', function () {
    return view('products');
});

Route::get('/delete', function () {
    return view('delete');
});


Route::post('/submit-form', [FormController::class, 'submitForm'])->name('submit.form');
Route::get('/products', [FormController::class, 'index'])->name('products');
Route::post('/delete-product', [FormController::class, 'delete'])->name('delete-product');