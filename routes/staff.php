<?php

use Illuminate\Support\Facades\Route;

Route::prefix('staff')->group(function () {
    Route::get('/', function () {
        return view('staff.dashboard');
    })->name('staff.dashboard');
});