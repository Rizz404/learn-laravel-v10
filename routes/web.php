<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\ProductController;

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

Route::get('/', [HomeController::class, 'index'])->name('home'); // * Namain route pake ->name
Route::get('/product', [ProductController::class, 'index'])->name('product');
Route::get('/keranjang', [KeranjangController::class, 'index'])->name('keranjang');
Route::get('/login', [AuthController::class, 'login']);
