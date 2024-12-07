<?php

use App\Http\Controllers\LawyersController;
use Illuminate\Support\Facades\Route;

Route::get('/index', [LawyersController::class, 'index']);
Route::get('/create', [LawyersController::class, 'create']);
Route::post('/store', [LawyersController::class, 'store']);
Route::post('/show', [LawyersController::class, 'show']);
Route::post('/edit', [LawyersController::class, 'edit']);
Route::put('/update', [LawyersController::class, 'update']);
Route::delete('/delete', [LawyersController::class, 'delete']);