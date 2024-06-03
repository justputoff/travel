<?php

use App\Http\Controllers\API\DestinationController;
use App\Http\Controllers\API\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::post('login', [UserController::class, 'login']);
Route::post('register', [UserController::class, 'register']);
Route::get('user/index', [UserController::class, 'index']);
Route::get('destinations', [DestinationController::class, 'index']);
Route::get('destinations/{id}', [DestinationController::class, 'show']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('user/show', [UserController::class, 'show']);
    Route::post('logout', [UserController::class, 'logout']);
});
