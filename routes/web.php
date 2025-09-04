<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backends\HomeController;
use App\Http\Controllers\Backends\UserController;
use App\Http\Controllers\Backends\CustomerController;
use App\Http\Controllers\Backends\ProductController;
use App\Http\Controllers\Backends\LanguageController;
use App\Http\Controllers\Backends\RoleController;
// use App\Http\Controllers\Backends\PermissionController;
use App\Http\Controllers\Backends\RolePermissionController;
// use App\Http\Controllers\Backends\PermissionRoleController;
// use App\Http\Controllers\Backends\RoleUserController;
// use App\Http\Controllers\Backends\UserRoleController;

Auth::routes(['register' => false]);

Route::middleware(['auth','switch_language'])->group(function(){
  Route::get('/', [HomeController::class,'index'])->name('home');
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


  // user
  Route::get('/user', [UserController::class,'index'])->name('user.index');
  Route::get('user/create', [UserController::class,'create'])->name('user.create');
  Route::post('user/store', [UserController::class,'store'])->name('user.store');
  Route::get('user/edit/{id}', [UserController::class,'edit'])->name('user.edit');
  Route::post('user/update/{id}', [UserController::class,'update'])->name('user.update');
  Route::get('user/delete/{id}', [UserController::class,'delete'])->name('user.delete');

  // role
  Route::get('/role', [RoleController::class,'index'])->name('role.index');
  Route::get('role/create', [RoleController::class,'create'])->name('role.create');
  Route::post('role/store', [RoleController::class,'store'])->name('role.store');
  Route::get('role/edit/{id}', [RoleController::class,'edit'])->name('role.edit');
  Route::post('role/update/{id}', [RoleController::class,'update'])->name('role.update');
  Route::get('role/delete/{id}', [RoleController::class,'delete'])->name('role.delete');


  // role permission
  Route::get('/role_permission/{role_id}', [RolePermissionController::class,'role_permission'])->name('role_permission.index');
});






// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
