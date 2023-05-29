<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Driver\DriverController;
use App\Http\Controllers\Trip\TripController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/login', [LoginController::class, 'submit'])->name('login');
Route::post('/login/verify', [LoginController::class, 'verify'])->name('login.verify');


Route::group(['middleware' => 'auth:sanctum'], function () {

    Route::get('driver', [DriverController::class, 'get'])->name('driver.get');
    Route::post('driver', [DriverController::class, 'update'])->name('driver.update');

    Route::post('/trip', [TripController::class, 'store'])->name('trip.store');

    Route::get('/user', function (Request $request) {
        return $request->user();
    });

});

