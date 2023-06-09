<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Driver\DriverController;
use App\Http\Controllers\Trip\TripController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/login', [LoginController::class, 'submit'])->name('login');
Route::post('/login/verify', [LoginController::class, 'verify'])->name('login.verify');


Route::group(['middleware' => 'auth:sanctum'], function () {

    Route::prefix('driver')->group(function () {
        Route::get('/', [DriverController::class, 'get'])->name('driver.get');
        Route::post('/', [DriverController::class, 'update'])->name('driver.update');
    });

    Route::prefix('trip')->group(function () {
        Route::post('/', [TripController::class, 'store'])->name('trip.store');
        Route::get('/{trip}', [TripController::class, 'get'])->name('trip.get');
        Route::post('/{trip}/accept', [TripController::class, 'accept'])->name('trip.accept');
        Route::post('/{trip}/start', [TripController::class, 'start'])->name('trip.start');
        Route::post('/{trip}/end', [TripController::class, 'end'])->name('trip.end');
        Route::post('/{trip}/location', [TripController::class, 'location'])->name('trip.location');
    });

    Route::get('/user', function (Request $request) {
        return $request->user();
    });

});

