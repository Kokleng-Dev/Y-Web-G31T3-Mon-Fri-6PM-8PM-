<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backends\HomeController;
use App\Http\Controllers\Backends\UserController;
use App\Http\Controllers\Backends\CustomerController;


Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/user', [UserController::class,'index'])->name('user.index');
Route::get('/customer', [CustomerController::class,'index'])->name('customer.index');
Route::post('/customer/create', [CustomerController::class,'create'])->name('customer.create');
Route::get('/customer/delete/{id}', [CustomerController::class,'delete'])->name('customer.delete');
Route::post('/customer/update/{id}', [CustomerController::class,'update'])->name('customer.update');


