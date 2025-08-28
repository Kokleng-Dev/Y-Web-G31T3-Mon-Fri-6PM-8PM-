<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backends\HomeController;
use App\Http\Controllers\Backends\UserController;
use App\Http\Controllers\Backends\CustomerController;
use App\Http\Controllers\Backends\ProductController;

Auth::routes(['register' => false]);

Route::middleware('auth')->group(function(){
  Route::get('/', [HomeController::class,'index'])->name('home');
  Route::get('/user', [UserController::class,'index'])->name('user.index');
  Route::get('/customer', [CustomerController::class,'index'])->name('customer.index');
  Route::post('/customer/create', [CustomerController::class,'create'])->name('customer.create');
  Route::get('/customer/delete/{id}', [CustomerController::class,'delete'])->name('customer.delete');
  Route::post('/customer/update/{id}', [CustomerController::class,'update'])->name('customer.update');

  Route::get('/test', [CustomerController::class,'test'])->name('customer.test');


  // product 
  Route::get('/product', [ProductController::class,'index'])->name('product.index');
  Route::get('/product/create', [ProductController::class,'create'])->name('product.create');
  Route::post('/product/store', [ProductController::class,'store'])->name('product.store'); 
});






Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
