<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/login', [LoginController::class, 'submit'])->name('login');
Route::post('/login/verify', [LoginController::class, 'verify'])->name('login.verify');


Route::group(['middleware' => 'auth:sanctum'], function () {

    

    Route::get('/user', function (Request $request) {
        return $request->user();
    });

});

