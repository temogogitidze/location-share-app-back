<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DriverController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/login', [LoginController::class, 'submit'])->name('login');
Route::post('/login/verify', [LoginController::class, 'verify'])->name('login.verify');


Route::group(['middleware' => 'auth:sanctum'], function () {

    Route::get('driver', [DriverController::class, 'get'])->name('driver.get');
    Route::post('driver', [DriverController::class, 'update'])->name('driver.update');

    Route::get('/user', function (Request $request) {
        return $request->user();
    });

});

