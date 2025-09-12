<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backends\HomeController;
use App\Http\Controllers\Backends\UserController;
use App\Http\Controllers\Backends\CustomerController;
use App\Http\Controllers\Backends\ProductController;
use App\Http\Controllers\Backends\LanguageController;
use App\Http\Controllers\Backends\RoleController;
use App\Http\Controllers\Backends\PermissionController;
use App\Http\Controllers\Backends\RolePermissionController;
use App\Http\Controllers\Backends\PermissionFeatureController;
use App\Http\Controllers\Backends\ShopController;
use App\Http\Controllers\Backends\ProductCategoryController;

// use App\Http\Controllers\Backends\PermissionRoleController;
// use App\Http\Controllers\Backends\RoleUserController;
// use App\Http\Controllers\Backends\UserRoleController;
use App\Http\Controllers\Backends\CustomerTypeController;
use App\Http\Controllers\Backends\TestController;
// use Mail;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailTest;

Auth::routes(['register' => false]);

Route::middleware(['auth','switch_language'])->group(function(){
  Route::get('/', [HomeController::class,'index'])->name('home');
  // Route::get('/customer', [CustomerController::class,'index'])->name('customer.index');
  // Route::post('/customer/create', [CustomerController::class,'create'])->name('customer.create');
  // Route::get('/customer/delete/{id}', [CustomerController::class,'delete'])->name('customer.delete');
  // Route::post('/customer/update/{id}', [CustomerController::class,'update'])->name('customer.update');

  // // export
  // Route::get('/customer/export', [CustomerController::class,'export_excel'])->name('customer.export');

  // Route::post('/customer/import', [CustomerController::class,'import_excel'])->name('customer.import');

  // Route::get('customer/download', [CustomerController::class,'download'])->name('customer.download');

  // Route::get('/test', [CustomerController::class,'test'])->name('customer.test');

  // product category
  Route::get('/product-category', [ProductCategoryController::class,'index'])->name('product_category.index')->middleware('check_permission:product_category,view');
  Route::get('/product-category/create', [ProductCategoryController::class,'create'])->name('product_category.create')->middleware('check_permission:product_category,create');
  Route::post('/product-category/store', [ProductCategoryController::class,'store'])->name('product_category.store')->middleware('check_permission:product_category,create'); 
  Route::get('/product-category/edit/{id}', [ProductCategoryController::class,'edit'])->name('product_category.edit')->middleware('check_permission:product_category,edit');
  Route::post('/product-category/update/{id}', [ProductCategoryController::class,'update'])->name('product_category.update')->middleware('check_permission:product_category,edit');
  Route::get('/product-category/delete/{id}', [ProductCategoryController::class,'delete'])->name('product_category.delete')->middleware('check_permission:product_category,delete');

  // product 
  Route::get('/product', [ProductController::class,'index'])->name('product.index')->middleware('check_permission:product,view');
  Route::get('/product/create', [ProductController::class,'create'])->name('product.create')->middleware('check_permission:product,create');
  Route::post('/product/store', [ProductController::class,'store'])->name('product.store')->middleware('check_permission:product,create'); 
  Route::get('/product/edit/{id}', [ProductController::class,'edit'])->name('product.edit')->middleware('check_permission:product,edit');
  Route::post('/product/update/{id}', [ProductController::class,'update'])->name('product.update')->middleware('check_permission:product,edit');
  Route::get('/product/delete/{id}', [ProductController::class,'delete'])->name('product.delete')->middleware('check_permission:product,delete');

  // swtich language
  Route::get('/locale/{locale}', [LanguageController::class,'locale'])->name('locale');


  // user
  Route::get('/user', [UserController::class,'index'])
          ->name('user.index')
          ->middleware('check_permission:user,view');
          
  Route::get('user/create', [UserController::class,'create'])->name('user.create')->middleware('check_permission:user,create');
  Route::post('user/store', [UserController::class,'store'])->name('user.store')->middleware('check_permission:user,create');
  Route::get('user/edit/{id}', [UserController::class,'edit'])->name('user.edit')->middleware('check_permission:user,edit');
  Route::post('user/update/{id}', [UserController::class,'update'])->name('user.update')->middleware('check_permission:user,edit');
  Route::get('user/delete/{id}', [UserController::class,'delete'])->name('user.delete')->middleware('check_permission:user,delete');

  // role
  Route::get('/role', [RoleController::class,'index'])->name('role.index')->middleware('check_permission:role,view');
  Route::get('role/create', [RoleController::class,'create'])->name('role.create')->middleware('check_permission:role,create');
  Route::post('role/store', [RoleController::class,'store'])->name('role.store')->middleware('check_permission:role,create');
  Route::get('role/edit/{id}', [RoleController::class,'edit'])->name('role.edit')->middleware('check_permission:role,edit');
  Route::post('role/update/{id}', [RoleController::class,'update'])->name('role.update')->middleware('check_permission:role,edit');
  Route::get('role/delete/{id}', [RoleController::class,'delete'])->name('role.delete')->middleware('check_permission:role,delete');


  // permission
  Route::resource('/permission', PermissionController::class, ['except' => ['show','destroy']])
    ->name('index','permission.index')
    ->name('create','permission.create')
    ->name('store','permission.store')
    ->name('edit','permission.edit')
    ->name('update','permission.update');

  Route::get('/permission/delete/{id}', [PermissionController::class,'destroy'])->name('permission.destroy');


  // permission_feature
  Route::resource('/permission-feature', PermissionFeatureController::class, ['except' => ['show','destroy','index']])
    ->name('create','permission_feature.create')
    ->name('store','permission_feature.store')
    ->name('edit','permission_feature.edit')
    ->name('update','permission_feature.update');

  Route::get('/permission-feature/{permission_id}', [PermissionFeatureController::class,'index'])->name('permission_feature.index');
  Route::get('/permission-feature/delete/{id}', [PermissionFeatureController::class,'destroy'])->name('permission_feature.destroy');


  // role permission
  Route::get('/role_permission/{role_id}', [RolePermissionController::class,'role_permission'])->name('role_permission.index');

  // set role permission
  Route::post('/set_role_permission', [RolePermissionController::class,'set_role_permission'])->name('role_permission.set_permission');

  // customer type
  // Route::resource('/customer_type', CustomerTypeController::class, ['except' => ['show','destroy']])
  //     ->name('index','customer_type.index')
  //     ->name('create','customer_type.create')
  //     ->name('store','customer_type.store')
  //     ->name('edit','customer_type.edit')
  //     ->name('update','customer_type.update');

  // Route::get('/customer_type/delete/{id}', [CustomerTypeController::class,'destroy'])->name('customer_type.destroy');

  // test queue
  // Route::get('/test', [TestController::class,'test'])->name('test');




    Route::resource('/shop', ShopController::class, ['except' => ['show','destroy']])
      ->name('index','shop.index')
      ->name('create','shop.create')
      ->name('store','shop.store')
      ->name('edit','shop.edit')
      ->name('update','shop.update');

    Route::get('/shop/delete/{id}', [ShopController::class,'destroy'])->name('shop.destroy');
});


// Route::get('/mail', function(){
//   // Mail::to('kongbootang@gmail.com')->send(new MailTest('88837171'));
//   // Mail::to('senghongear168@gmail.com')->send(new MailTest('88889999'));
//   // Mail::to('')->send(new MailTest('7777631721'));
//   return 'Success';
// });






// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

