<?php

use App\Http\Controllers\PenyimpananController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PenyimpananController::class, 'index']);
Route::post('/add', [PenyimpananController::class, 'add']);