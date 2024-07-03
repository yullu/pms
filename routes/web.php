<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/',[AuthController::class,'login'])->name('login');
Route::get('/forgot',[AuthController::class,'forgot']);
Route::post('login_post',[AuthController::class,'login_post']);
Route::post('forgot_post',[AuthController::class,'forgot_post']);

Route::group(['middleware' => 'admin'], function () {
    Route::get('/admin/dashboard',[\App\Http\Controllers\DashboardController::class,'dashboard']);
    Route::get('/admin/customers',[\App\Http\Controllers\CustomersController::class,'index'])->name('customers');
    Route::get('/admin/customers/add',[\App\Http\Controllers\CustomersController::class,'add']);
    Route::post('/admin/customers',[\App\Http\Controllers\CustomersController::class,'store']);
    Route::get('/admin/customers/edit/{id}',[\App\Http\Controllers\CustomersController::class,'edit']);
    Route::put('/admin/customers/edit/{id}',[\App\Http\Controllers\CustomersController::class,'update']);
    Route::get('/admin/customers/delete/{id}',[\App\Http\Controllers\CustomersController::class,'destroy']);

    Route::get('admin/medicines',[\App\Http\Controllers\MedicinesController::class,'index'])->name('medicines');
    Route::get('admin/medicines/add',[\App\Http\Controllers\MedicinesController::class,'add']);
    Route::post('admin/medicines',[\App\Http\Controllers\MedicinesController::class,'store']);
    Route::get('admin/medicines/edit/{id}',[\App\Http\Controllers\MedicinesController::class,'edit']);
    Route::put('admin/medicines/edit/{id}',[\App\Http\Controllers\MedicinesController::class,'update']);
    Route::get('admin/medicines/delete/{id}',[\App\Http\Controllers\MedicinesController::class,'destroy']);
    Route::get('admin/medicines_stock',[\App\Http\Controllers\MedicinesController::class,'medicines_stock'])->name('medicines_stock');
    Route::get('admin/medicines_stock/add',[\App\Http\Controllers\MedicinesController::class,'medicines_stock_add']);
    Route::put('admin/medicines_stock/save',[\App\Http\Controllers\MedicinesController::class,'medicines_stock_save']);
    Route::get('admin/medicines_stock/edit/{id}',[\App\Http\Controllers\MedicinesController::class,'medicines_stock_edit']);
    Route::put('admin/medicines_stock/updating/{id}',[\App\Http\Controllers\MedicinesController::class,'medicines_stock_update']);
    Route::get('admin/medicines_stock/delete/{id}',[\App\Http\Controllers\MedicinesController::class,'medicines_stock_delete']);
    Route::get('admin/suppliers',[\App\Http\Controllers\SuppliersController::class,'index'])->name('suppliers');
    Route::get('admin/suppliers/add',[\App\Http\Controllers\SuppliersController::class,'add']);
    Route::post('admin/suppliers/save',[\App\Http\Controllers\SuppliersController::class,'store']);
    Route::get('admin/suppliers/edit/{id}',[\App\Http\Controllers\SuppliersController::class,'edit']);
    Route::put('admin/suppliers/updating/{id}',[\App\Http\Controllers\SuppliersController::class,'update']);
    Route::get('admin/suppliers/delete/{id}',[\App\Http\Controllers\SuppliersController::class,'destroy']);
    //Invoice start
    Route::get('admin/invoices',[\App\Http\Controllers\InvoicesController::class,'index'])->name('invoices');
    Route::get('admin/invoices/add',[\App\Http\Controllers\InvoicesController::class,'add']);
    Route::post('admin/invoices/save',[\App\Http\Controllers\InvoicesController::class,'store']);
    Route::get('admin/invoices/edit/{id}',[\App\Http\Controllers\InvoicesController::class,'edit']);
    Route::put('admin/invoices/update/{id}',[\App\Http\Controllers\InvoicesController::class,'updating']);
    Route::get('admin/invoices/delete/{id}',[\App\Http\Controllers\InvoicesController::class,'destroy']);
    //Invoice end
    //purchases start
    Route::get('admin/purchases',[\App\Http\Controllers\PurchasesController::class,'index'])->name('purchases');
    Route::get('admin/purchases/add',[\App\Http\Controllers\PurchasesController::class,'add']);
    Route::post('admin/purchases/save',[\App\Http\Controllers\PurchasesController::class,'store']);
    Route::get('admin/purchases/edit/{id}',[\App\Http\Controllers\PurchasesController::class,'edit']);
    Route::put('admin/purchases/updating/{id}',[\App\Http\Controllers\PurchasesController::class,'updating']);
    Route::get('admin/purchases/delete/{id}',[\App\Http\Controllers\PurchasesController::class,'destroy']);
    //purchases end

    Route::get('admin/dashboard/my_account',[\App\Http\Controllers\DashboardController::class,'my_account']);
    Route::post('admin/dashboard/my_account/save',[\App\Http\Controllers\DashboardController::class,'my_account_save']);
    Route::get('admin/settings',[\App\Http\Controllers\SettingsController::class,'index'])->name('settings');
    Route::post('admin/settings/save',[\App\Http\Controllers\SettingsController::class,'store']);


});

Route::get('logout',[AuthController::class,'logout']);


