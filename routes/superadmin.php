<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::prefix('super-admin')->group(function () {
    Route::get('/', function () {
        return view('superadmin.dashboard');
    })->name('superadmin.dashboard');

    Route::middleware('scope.user.type:1,2,3,4')->group(function () {
        Route::resource('users', UserController::class)
            ->except('show')
            ->parameters(['users' => 'user']);
        Route::get('users/{user}', [UserController::class, 'show'])->name('superadmin.users.show');
        Route::patch('users/{user}/status', [UserController::class, 'updateStatus'])->name('superadmin.users.status');
        Route::get('users/trashed/{id}/restore', [UserController::class, 'restore'])->name('superadmin.users.restore');
    });
});
