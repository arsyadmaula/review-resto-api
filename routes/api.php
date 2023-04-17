<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Routing\RouteRegistrar;
use App\Http\Controllers\RestoController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\AuthenticationController;

Route::post('/auth/login', [AuthenticationController::class,'login'])->name('auth.login');
Route::post('/auth/register', [AuthenticationController::class,'register'])->name('auth.register');

Route::middleware('auth:sanctum')->group(function() {

    Route::get('/auth/profile', [AuthenticationController::class,'profile'])->name('auth.profile');
    Route::get('/auth/logout', [AuthenticationController::class,'logout'])->name('auth.logout');
   
    Route::apiResource('reviews',ReviewController::class);
});

Route::apiResource('restos',RestoController::class);





