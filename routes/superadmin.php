<?php

use Illuminate\Support\Facades\Route;

Route::prefix('super-admin')->group(function () {
    Route::get('/', function () {
        return view('superadmin.dashboard');
    })->name('superadmin.dashboard');
});