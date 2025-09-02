<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backends\HomeController;
use App\Http\Controllers\Backends\UserController;
use App\Http\Controllers\Backends\CustomerController;
use App\Http\Controllers\Backends\ProductController;
use App\Http\Controllers\Backends\LanguageController;

Auth::routes(['register' => false]);

Route::middleware(['auth','switch_language'])->group(function(){
  Route::get('/', [HomeController::class,'index'])->name('home');
  Route::get('/user', [UserController::class,'index'])->name('user.index');
  Route::get('/customer', [CustomerController::class,'index'])->name('customer.index');
  Route::post('/customer/create', [CustomerController::class,'create'])->name('customer.create');
  Route::get('/customer/delete/{id}', [CustomerController::class,'delete'])->name('customer.delete');
  Route::post('/customer/update/{id}', [CustomerController::class,'update'])->name('customer.update');

  // export
  Route::get('/customer/export', [CustomerController::class,'export_excel'])->name('customer.export');

  Route::post('/customer/import', [CustomerController::class,'import_excel'])->name('customer.import');

  Route::get('customer/download', [CustomerController::class,'download'])->name('customer.download');

  Route::get('/test', [CustomerController::class,'test'])->name('customer.test');


  // product 
  Route::get('/product', [ProductController::class,'index'])->name('product.index');
  Route::get('/product/create', [ProductController::class,'create'])->name('product.create');
  Route::post('/product/store', [ProductController::class,'store'])->name('product.store'); 

  // swtich language
  Route::get('/locale/{locale}', [LanguageController::class,'locale'])->name('locale');
});






// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
