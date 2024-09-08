<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PenyimpananController;
use App\Http\Controllers\UploadFileController;
use App\Http\Middleware\Authentication;
use Illuminate\Support\Facades\Route;

Route::get('/login', [AuthenticationController::class, 'showLoginForm'])->name('login-form');
Route::post('/login', [AuthenticationController::class, 'login'])->name('login-post');
Route::post('/logout', [AuthenticationController::class, 'logout'])->name('logout');

Route::get('/', [DashboardController::class, 'index'])->name('welcome-page')->middleware(Authentication::class);

Route::get('/penyimpanan/', [PenyimpananController::class, 'index'])->name('index-penyimpanan')->middleware(Authentication::class);
Route::get('/penyimpanan/create', [PenyimpananController::class, 'create'])->name('create-penyimpanan')->middleware(Authentication::class);
Route::post('/penyimpanan/store', [PenyimpananController::class, 'store'])->name('store-penyimpanan')->middleware(Authentication::class);
Route::get('/penyimpanan/edit/{penyimpananBarang}', [PenyimpananController::class, 'edit'])->name('edit-penyimpanan')->middleware(Authentication::class);
Route::put('/penyimpanan/update/{penyimpananBarang}', [PenyimpananController::class, 'update'])->name('update-penyimpanan')->middleware(Authentication::class);
Route::delete('/penyimpanan/delete/{penyimpananBarang}', [PenyimpananController::class, 'delete'])->name('delete-penyimpanan')->middleware(Authentication::class);

Route::get('/profile', [UploadFileController::class, 'FormAvatar'])->name('profile')->middleware(Authentication::class);
Route::put('/profile/avatar/{user}', [UploadFileController::class, 'store'])->name('profile-store')->middleware(Authentication::class);