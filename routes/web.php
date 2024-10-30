<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PidController;

Route::get('/', [PidController::class, 'index']);
Route::get('/create', [PidController::class, 'pidcreate']);
Route::get('/list', [PidController::class, 'viewpids']);
Route::get('/pids/{id}/detailed', [PidController::class, 'detailedpid'])->name('pids.detailedpid');
Route::post('/', [PidController::class, 'store']);
Route::delete('/pids/{id}', [PidController::class, 'destroy'])->name('pids.destroy');
