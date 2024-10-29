<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PidController;

Route::get('/', [PidController::class, 'index']);
Route::get('/create', [PidController::class, 'pidcreate']);
Route::post('/', [PidController::class, 'store']);