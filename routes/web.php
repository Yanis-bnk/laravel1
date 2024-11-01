<?php

use App\Http\Controllers\profileController;
use App\Http\Controllers\infosController;
use App\Http\Controllers\pageController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', [pageController::class,'index'])->name('home.index');
Route::get('/profiles', [profileController::class,'index'])->name('profiles.index');
Route::get('/profiles/{id}', [profileController::class,'show'])
->where('id','\d+')
->name('profiles.show');
Route::get('/infos', [infosController::class,'index'])->name('infos.index');



