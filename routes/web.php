<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PidController;

Route::get('/', [PidController::class, 'index']);
Route::get('/create', [PidController::class, 'pidcreate']);
Route::get('/list', [PidController::class, 'viewpids']);
Route::post('/', [PidController::class, 'store']);