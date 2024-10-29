<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PidController;

Route::get('/', [PidController::class, 'index']);
Route::post('/', [PidController::class, 'store']);