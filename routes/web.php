<?php

use App\Http\Controllers\profileController;
use App\Http\Controllers\infosController;
use App\Http\Controllers\pageController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', [pageController::class,'index']);
Route::get('/profile', [profileController::class,'index']);
Route::get('/infos', [infosController::class,'index']);



