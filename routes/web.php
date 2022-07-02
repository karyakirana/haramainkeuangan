<?php

use App\Http\Controllers\Custom\DashboardController;
use App\Http\Controllers\Custom\LoginController;
use App\Http\Livewire\Kasir\PenerimaanPenjualanForm;
use App\Http\Livewire\Kasir\PenerimaanPenjualanIndex;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware('guest')->group(function (){
    // login
    Route::get('login', [LoginController::class, 'index'])->name('login');
    Route::post('login', [LoginController::class, 'login']);
    // register
    Route::get('register', [LoginController::class, 'registerIndex'])->name('register');
    Route::post('register', [LoginController::class, 'store']);
    // logout
    Route::get('logout', [LoginController::class, 'logout'])->name('logout');
    Route::post('logout', [LoginController::class, 'logout']);
});

/**
 * Dashboard
 */
Route::middleware('auth')->group(function (){
    // dashboard index
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

/**
 * Kasir
 */
Route::middleware('auth')->group(function (){
    // penerimaan penjualan
    Route::get('penerimaan/penjualan', PenerimaanPenjualanIndex::class)->name('penerimaan.penjualan');
    Route::get('penerimaan/penjualan/form', PenerimaanPenjualanForm::class)->name('penerimaan.penjualan.form');
    // penerimaan lain-lain
    Route::get('penerimaan/lainlain')->name('penerimaan.lainlain');
    // pengeluaran pembelian
    Route::get('pengeluaran/pembelian')->name('pengeluaran.pembelian');
    // pengeluaran lain-lain
    Route::get('pengeluaran/lainlain')->name('pengeluaran.lainlain');
    // mutasi kas
    Route::get('mutasi')->name('mutasi');
    // piutang penjualan
    Route::get('piutang/penjualan')->name('piutang.penjualan');
    // piutang internal
    Route::get('piutang/internal')->name('piutang.internal');
    // hutang pembelian
    Route::get('hutang/pembelian')->name('hutang.pembelian');
    // hutang lain
    Route::get('hutang/lainlain')->name('hutang.lainlain');
});

/**
 * Neraca
 */
Route::middleware('auth')->group(function (){
    // neraca awal
    // neraca saldo
});

//require __DIR__.'/auth.php';
