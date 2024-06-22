<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\ProvisionServer;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::resource('users', UserController::class);
Route::resource('photos', PhotoController::class);
Route::get('/server', ProvisionServer::class);
