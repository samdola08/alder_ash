<?php

use Illuminate\Support\Facades\Route;

Route::prefix('customer')->group(function () {
    Route::get('/', function () {
        return view('customer.dashboard');
    })->name('customer.dashboard');
});