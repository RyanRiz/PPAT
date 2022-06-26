<?php

use App\Exports\ExcelExport;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ExcelController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ExportController;
use App\Http\Controllers\WorkerController;
use App\Http\Controllers\OutcomeController;
use App\Http\Controllers\ProfileController;
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

// Dashboard
Route::get('/', [AdminController::class, 'index'])->name('dashboard')->middleware('auth');

// Profile
Route::get('/setting', [ProfileController::class, 'setting'])->name('setting')->middleware('auth');
Route::post('/setting', [ProfileController::class, 'store'])->name('store.setting')->middleware('auth');

// Import Export Excel
Route::get('/export', [ExcelController::class, 'export'])->name('export')->middleware('auth');
Route::post('/import', [ExcelController::class, 'import'])->name('import')->middleware('auth');
Route::get('/database', [ExcelController::class, 'index'])->name('database')->middleware('auth');

// Customer
Route::get('/data-customer', [CustomerController::class, 'index'])->name('index.customer')->middleware('auth');
Route::get('/input-customer', [CustomerController::class, 'create'])->name('form.customer')->middleware('auth');
Route::post('/input-customer/store', [CustomerController::class, 'store'])->name('store.customer')->middleware('auth');
Route::get('/data-customer/{user:id}/detail', [CustomerController::class, 'show'])->name('show.customer')->middleware('auth');
Route::get('/data-customer/{user:id}/edit', [CustomerController::class, 'edit'])->name('edit.customer')->middleware('auth');
Route::put('/data-customer/{user:id}/update', [CustomerController::class, 'update'])->name('update.customer')->middleware('auth');
Route::delete('/data-customer/{user:id}/delete', [CustomerController::class, 'destroy'])->name('delete.customer')->middleware('auth');

// Permohonan
Route::get('/data-permohonan', [OrderController::class, 'index'])->name('index.permohonan')->middleware('auth');
Route::get('/input-permohonan', [OrderController::class, 'create'])->name('form.permohonan')->middleware('auth');
Route::post('/input-permohonan', [OrderController::class, 'store'])->name('store.permohonan')->middleware('auth');
Route::get('/data-permohonan/{data:id}/detail', [OrderController::class, 'show'])->name('show.permohonan')->middleware('auth');
Route::get('/data-permohonan/{data:id}/edit', [OrderController::class, 'edit'])->name('edit.permohonan')->middleware('auth');
Route::put('/data-permohonan/{data:id}/update', [OrderController::class, 'update'])->name('update.permohonan')->middleware('auth');
Route::delete('/data-permohonan/{data:id}/delete', [OrderController::class, 'destroy'])->name('delete.permohonan')->middleware('auth');

// Detail Permohonan
Route::post('/data-permohonan/{data:id}/store-detail', [OrderController::class, 'store_detail'])->name('store.detail')->middleware('auth');
Route::delete('/data-permohonan/{data:id}/delete-detail', [OrderController::class, 'destroy_detail'])->name('delete.detail')->middleware('auth');

// Pengeluaran
Route::get('/data-pengeluaran', [OutcomeController::class, 'index'])->name('index.pengeluaran')->middleware('auth');
Route::get('/input-pengeluaran', [OutcomeController::class, 'create'])->name('form.pengeluaran')->middleware('auth');
Route::post('/input-pengeluaran', [OutcomeController::class, 'store'])->name('store.pengeluaran')->middleware('auth');
Route::get('/data-pengeluaran/{user:id}/detail', [OutcomeController::class, 'show'])->name('show.pengeluaran')->middleware('auth');
Route::get('/data-pengeluaran/{user:id}/edit', [OutcomeController::class, 'edit'])->name('edit.pengeluaran')->middleware('auth');
Route::put('/data-pengeluaran/{user:id}/update', [OutcomeController::class, 'update'])->name('update.pengeluaran')->middleware('auth');
Route::delete('/data-pengeluaran/{user:id}/delete', [OutcomeController::class, 'destroy'])->name('delete.pengeluaran')->middleware('auth');

// Laporan
Route::get('/data-pengeluaran-bulanan', [OutcomeController::class, 'report'])->name('index.monthly')->middleware('auth');

// Karyawan
Route::get('/data-karyawan', [WorkerController::class, 'index'])->name('index.karyawan')->middleware('auth');
Route::get('/input-karyawan', [WorkerController::class, 'create'])->name('form.karyawan')->middleware('auth');
Route::post('/input-karyawan', [WorkerController::class, 'store'])->name('store.karyawan')->middleware('auth');
Route::get('/data-karyawan/{user:id}/detail', [WorkerController::class, 'show'])->name('show.karyawan')->middleware('auth');
Route::get('/data-karyawan/{user:id}/edit', [WorkerController::class, 'edit'])->name('edit.karyawan')->middleware('auth');
Route::put('/data-karyawan/{user:id}/update', [WorkerController::class, 'update'])->name('update.karyawan')->middleware('auth');
Route::delete('/data-karyawan/{user:id}/delete', [WorkerController::class, 'destroy'])->name('delete.karyawan')->middleware('auth');

// User
Route::get('/data-user', [UserController::class, 'index'])->name('index.user')->middleware('auth');
Route::get('/input-user', [UserController::class, 'create'])->name('form.user')->middleware('auth');
Route::post('/input-user', [UserController::class, 'store'])->name('store.user')->middleware('auth');
Route::get('/data-user/{user:id}/detail', [UserController::class, 'show'])->name('show.user')->middleware('auth');
Route::get('/data-user/{user:id}/edit', [UserController::class, 'edit'])->name('edit.user')->middleware('auth');
Route::put('/data-user/{user:id}/update', [UserController::class, 'update'])->name('update.user')->middleware('auth');
Route::delete('/data-user/{user:id}/delete', [UserController::class, 'destroy'])->name('delete.user')->middleware('auth');


