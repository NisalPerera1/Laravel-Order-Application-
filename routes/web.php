<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;


Route::get('/', function () {return view('welcome');});
Route::resource("orders",OrderController::class);
Route::get('/orders', [OrderController::class, 'index'])->name('order.index');



Route::resource("customers",CustomerController::class,['create']);
Route::get('/customers', [CustomerController::class, 'index'])->name('customer.index');
Route::get('/customers/create', [CustomerController::class, 'create'])->name('customer.create');
Route::post('/customers/create', [CustomerController::class, 'create'])->name('customer.create');
Route::post('/customers/create/store', [CustomerController::class, 'store'])->name('customer.store');
Route::get('/customers/{id}/delete', [CustomerController::class, 'delete'])->name('customer.destroy');
Route::delete('/customers/{id}/delete', [CustomerController::class, 'destroy'])->name('customer.destroy');

Route::get('/customers/{id}/edit', [CustomerController::class, 'edit'])->name('customer.edit');
Route::put('/customers/{id}/update', [CustomerController::class, 'update'])->name('customer.update');




Route::resource("products",ProductController::class);

