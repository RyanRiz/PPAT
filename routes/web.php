<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OutcomeController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Login
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store'])->name('login.store');

// Register
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

// Logout
Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');

Route::get('/', [AdminController::class, 'index']);

// Customer
Route::get('/data-customer', [CustomerController::class, 'index'])->name('showCustomer');
Route::get('/input-customer', [CustomerController::class, 'create'])->name('formCustomer');
Route::get('/data-customer/{user:id}/detail', [CustomerController::class, 'show'])->name('upshowCustomer');
Route::post('/input-customer/store', [CustomerController::class, 'store'])->name('inputCustomer');
Route::put('/data-customer/{user:id}/update', [CustomerController::class, 'update'])->name('updateCustomer');
Route::delete('/data-customer/{user:id}/delete', [CustomerController::class, 'destroy'])->name('deleteCustomer');

// Permohonan
Route::get('/data-permohonan', [OrderController::class, 'index'])->name('show.permohonan');
Route::get('/input-permohonan', [OrderController::class, 'create'])->name('form.permohonan');

// Pengeluaran
Route::get('/data-pengeluaran', [OutcomeController::class, 'index'])->name('show.pengeluaran');
Route::get('/input-pengeluaran', [OutcomeController::class, 'create'])->name('form.pengeluaran');
Route::post('/input-pengeluaran', [OutcomeController::class, 'store'])->name('input.pengeluaran');
Route::get('/data-pengeluaran/{user:id}/detail', [OutcomeController::class, 'show'])->name('update-form.pengeluaran');
Route::put('/data-pengeluaran/{user:id}/update', [OutcomeController::class, 'update'])->name('update.pengeluaran');
Route::delete('/data-pengeluaran/{user:id}/delete', [OutcomeController::class, 'destroy'])->name('delete.pengeluaran');

// User
Route::get('/data-user', [UserController::class, 'index'])->name('show.user');

