<?php

use Illuminate\Support\Facades\Route;

Route::prefix('supplier')->group(function () {
    Route::get('/', function () {
        return view('supplier.dashboard');
    })->name('supplier.dashboard');
});