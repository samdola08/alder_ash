<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::prefix('staff')->group(function () {
    Route::get('/', function () {
        return view('staff.dashboard');
    })->name('staff.dashboard');

    Route::middleware('scope.user.type:1')->group(function () {
        Route::resource('users', UserController::class)
            ->except('show')
            ->parameters(['users' => 'user']);
        Route::get('users/{user}', [UserController::class, 'show'])->name('staff.users.show');
        Route::patch('users/{user}/status', [UserController::class, 'updateStatus'])->name('staff.users.status');
        Route::get('users/trashed/{id}/restore', [UserController::class, 'restore'])->name('staff.users.restore');
    });
});
