<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\KoperasiController;
use App\Http\Controllers\MarketController;
use App\Http\Controllers\PengurusController;
use App\Http\Controllers\SimpanPinjamController;
use Illuminate\Support\Facades\Route;

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

Route::middleware(['auth'])->group(function () {
    // ADMIN
    Route::controller(AdminController::class)->group(function () {
        Route::get('/dashboard', 'index');
    });

    // PENGURUS
    Route::controller(PengurusController::class)->group(function () {
        Route::get('/pengurus', 'index');
    });

    // MARKET
    Route::controller(MarketController::class)->group(function () {
        Route::get('/market', 'index');
    });

    Route::controller(SimpanPinjamController::class)->group(function () {
        Route::get('/simpan-pinjam', 'index');
    });
});

require __DIR__ . '/auth.php';
