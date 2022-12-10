<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\AdminMobilController;
use App\Http\Controllers\Admin\AdminPesananController;
use App\Http\Controllers\Admin\AdminDashboardController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/detail/{id}', [HomeController::class, 'detail'])->name('detail');

Route::middleware('auth')->group(function(){
    Route::get('/sewa-sekarang/{id}', [HomeController::class, 'sewa'])->name('sewa');
    Route::post('/sewa-sekarang', [HomeController::class, 'simpan'])->name('sewa.simpan');
});


// route user

// route admin
Route::prefix('admin')->name('admin')->middleware(['auth', 'admin'])->group(function(){
    Route::get('dashboard', [AdminDashboardController::class, 'index'])->name('.dashboard');
    Route::prefix('mobil')->name('.mobil')->group(function(){
        Route::get('/', [AdminMobilController::class, 'index']);
        Route::get('/tambah', [AdminMobilController::class, 'tambah'])->name('.tambah');
        Route::post('/simpan', [AdminMobilController::class, 'simpan'])->name('.simpan');
        Route::get('/ubah/{id}', [AdminMobilController::class, 'ubah'])->name('.ubah');
        Route::post('/edit', [AdminMobilController::class, 'edit'])->name('.edit');
        Route::get('/hapus/{id}', [AdminMobilController::class, 'hapus'])->name('.hapus');
    });
    Route::prefix('pesanan')->name('.pesanan')->group(function(){
        Route::get('/', [AdminPesananController::class, 'index']);
        Route::get('/detail/{id}', [AdminPesananController::class, 'detail'])->name('.detail');
        Route::get('/terima/{id}', [AdminPesananController::class, 'terima'])->name('.terima');
        Route::get('/tolak/{id}', [AdminPesananController::class, 'tolak'])->name('.tolak');
    });
});

Auth::routes();
