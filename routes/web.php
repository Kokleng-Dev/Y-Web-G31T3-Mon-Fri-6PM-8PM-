<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backends\HomeController;
use App\Http\Controllers\Backends\UserController;


Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/user', [UserController::class,'index'])->name('user.index');


