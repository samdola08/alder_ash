<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    Route::middleware('scope.user.type:1,3,4')->group(function () {
        Route::resource('users', UserController::class)
            ->except('show')
            ->parameters(['users' => 'user']);
        Route::get('users/{user}', [UserController::class, 'show'])->name('admin.users.show');
        Route::patch('users/{user}/status', [UserController::class, 'updateStatus'])->name('admin.users.status');
        Route::get('users/trashed/{id}/restore', [UserController::class, 'restore'])->name('admin.users.restore');
    });
});
