<?php

use App\Http\Controllers\profileController;
use App\Http\Controllers\infosController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\pageController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/login', [LoginController::class,'show'])->name('login');
Route::post('/login', [LoginController::class,'login'])->name('login.login');
Route::get('/', [pageController::class,'index'])->name('home.index');
Route::get('/profiles', [profileController::class,'index'])->name('profiles.index');
Route::get('/profiles/create', [profileController::class,'create'])->name('create');
Route::get('/profiles/{profile}', [profileController::class,'show'])
->where('id','\d+')
->name('profiles.show');
Route::get('/infos', [infosController::class,'index'])->name('infos.index');

Route::post('/profiles/store', [profileController::class,'store'])->name('store');



