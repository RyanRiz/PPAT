<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\WorkerController;
use App\Http\Controllers\OutcomeController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ProfileController;

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

Route::get('/', [AdminController::class, 'index'])->name('dashboard');

// Profile
Route::get('/setting', [ProfileController::class, 'setting'])->name('setting');
Route::post('/setting', [ProfileController::class, 'store'])->name('store.setting');

// Customer
Route::get('/data-customer', [CustomerController::class, 'index'])->name('index.customer');
Route::get('/input-customer', [CustomerController::class, 'create'])->name('form.customer');
Route::post('/input-customer/store', [CustomerController::class, 'store'])->name('store.customer');
Route::get('/data-customer/{user:id}/detail', [CustomerController::class, 'show'])->name('show.customer');
Route::get('/data-customer/{user:id}/edit', [CustomerController::class, 'edit'])->name('edit.customer');
Route::put('/data-customer/{user:id}/update', [CustomerController::class, 'update'])->name('update.customer');
Route::delete('/data-customer/{user:id}/delete', [CustomerController::class, 'destroy'])->name('delete.customer');

// Permohonan
Route::get('/data-permohonan', [OrderController::class, 'index'])->name('index.permohonan');
Route::get('/input-permohonan', [OrderController::class, 'create'])->name('form.permohonan');
Route::post('/input-permohonan', [OrderController::class, 'store'])->name('store.permohonan');
Route::get('/data-permohonan/{data:id}/detail', [OrderController::class, 'show'])->name('show.permohonan');
Route::get('/data-permohonan/{data:id}/edit', [OrderController::class, 'edit'])->name('edit.permohonan');
Route::put('/data-permohonan/{data:id}/update', [OrderController::class, 'update'])->name('update.permohonan');
Route::delete('/data-permohonan/{data:id}/delete', [OrderController::class, 'destroy'])->name('delete.permohonan');

// Detail Permohonan
Route::post('/data-permohonan/{data:id}/store-detail', [OrderController::class, 'store_detail'])->name('store.detail');
Route::delete('/data-permohonan/{data:id}/delete-detail', [OrderController::class, 'destroy_detail'])->name('delete.detail');

// Pengeluaran
Route::get('/data-pengeluaran', [OutcomeController::class, 'index'])->name('index.pengeluaran');
Route::get('/input-pengeluaran', [OutcomeController::class, 'create'])->name('form.pengeluaran');
Route::post('/input-pengeluaran', [OutcomeController::class, 'store'])->name('store.pengeluaran');
Route::get('/data-pengeluaran/{user:id}/detail', [OutcomeController::class, 'show'])->name('show.pengeluaran');
Route::get('/data-pengeluaran/{user:id}/edit', [OutcomeController::class, 'edit'])->name('edit.pengeluaran');
Route::put('/data-pengeluaran/{user:id}/update', [OutcomeController::class, 'update'])->name('update.pengeluaran');
Route::delete('/data-pengeluaran/{user:id}/delete', [OutcomeController::class, 'destroy'])->name('delete.pengeluaran');

// Karyawan
Route::get('/data-karyawan', [WorkerController::class, 'index'])->name('index.karyawan');
Route::get('/input-karyawan', [WorkerController::class, 'create'])->name('form.karyawan');
Route::post('/input-karyawan', [WorkerController::class, 'store'])->name('store.karyawan');
Route::get('/data-karyawan/{user:id}/detail', [WorkerController::class, 'show'])->name('show.karyawan');
Route::get('/data-karyawan/{user:id}/edit', [WorkerController::class, 'edit'])->name('edit.karyawan');
Route::put('/data-karyawan/{user:id}/update', [WorkerController::class, 'update'])->name('update.karyawan');
Route::delete('/data-karyawan/{user:id}/delete', [WorkerController::class, 'destroy'])->name('delete.karyawan');

// User
Route::get('/data-user', [UserController::class, 'index'])->name('index.user');
Route::get('/input-user', [UserController::class, 'create'])->name('form.user');
Route::post('/input-user', [UserController::class, 'store'])->name('store.user');
Route::get('/data-user/{user:id}/detail', [UserController::class, 'show'])->name('show.user');
Route::get('/data-user/{user:id}/edit', [UserController::class, 'edit'])->name('edit.user');
Route::put('/data-user/{user:id}/update', [UserController::class, 'update'])->name('update.user');
Route::delete('/data-user/{user:id}/delete', [UserController::class, 'destroy'])->name('delete.user');


