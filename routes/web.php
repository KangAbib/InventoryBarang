<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\JenisController;
use App\Http\Controllers\RuangController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InventarisController;

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

Route::get('/welcome', function () {
    return view('welcome');
});

// SI Inventory Routes
Route::get('/', function () {
    return view('landing');
})->name('landing');

Route::get('/login', function () {
    return view('login');
})->name('login');

Auth::routes();


Route::middleware(['auth'])->group(function(){

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

    Route::get('/jenis', [JenisController::class, 'index'])->name('jenis.index');
    Route::get('/jenis/create', [JenisController::class, 'create'])->name('jenis.create');
    Route::post('/jenis/store', [jenisController::class, 'store'])->name('jenis.store');
    Route::get('/jenis/edit/{id}', [JenisController::class, 'edit'])->name('jenis.edit');
    Route::put('/jenis/update/{id}', [JenisController::class, 'update'])->name('jenis.update');
    Route::delete('/jenis/destroy/{id}', [JenisController::class, 'destroy'])->name('jenis.destroy');

    Route::get('/barang', [BarangController::class, 'index'])->name('barang.index');
    Route::get('/barang/create', [BarangController::class, 'create'])->name('barang.create');
    Route::post('/barang/store', [BarangController::class, 'store'])->name('barang.store');
    Route::get('/barang/edit/{id}', [BarangController::class, 'edit'])->name('barang.edit');
    Route::put('/barang/update/{id}', [BarangController::class, 'update'])->name('barang.update');
    Route::delete('/barang/destroy/{id}', [BarangController::class, 'destroy'])->name('barang.destroy');

    Route::get('/ruang', [RuangController::class, 'index'])->name('ruang.index');
    Route::get('/ruang/create', [RuangController::class, 'create'])->name('ruang.create');
    Route::post('/ruang/store', [RuangController::class, 'store'])->name('ruang.store');
    Route::get('/ruang/edit/{id}', [RuangController::class, 'edit'])->name('ruang.edit');
    Route::put('/ruang/update/{id}', [RuangController::class, 'update'])->name('ruang.update');
    Route::delete('/ruang/destroy/{id}', [RuangController::class, 'destroy'])->name('ruang.destroy');

    Route::get('/user', [UserController::class, 'index'])->name('user.index');
    Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
    Route::post('/user/store', [UserController::class, 'store'])->name('user.store');
    Route::get('/user/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
    Route::put('/user/update/{id}', [UserController::class, 'update'])->name('user.update');
    Route::delete('/user/destroy/{id}', [UserController::class, 'destroy'])->name('user.destroy');

    Route::get('/inventaris', [InventarisController::class, 'index'])->name('inventaris.index');
    Route::get('/inventaris/create', [InventarisController::class, 'create'])->name('inventaris.create');
    Route::post('/inventaris/store', [InventarisController::class, 'store'])->name('inventaris.store');
    Route::get('/inventaris/edit/{id}', [InventarisController::class, 'edit'])->name('inventaris.edit');
    Route::put('/inventaris/update/{id}', [InventarisController::class, 'update'])->name('inventaris.update');
    Route::delete('/inventaris/destroy/{id}', [InventarisController::class, 'destroy'])->name('inventaris.destroy');

    Route::get('/laporan', [LaporanController::class, 'index'])->name('laporan.index');
    Route::get('/laporan/baik', [LaporanController::class, 'baik'])->name('laporan.baik');
    Route::get('/laporan/rusak', [LaporanController::class, 'rusak'])->name('laporan.rusak');
    Route::get('/laporan/tersedia', [LaporanController::class, 'tersedia'])->name('laporan.tersedia');
    Route::get('/laporan/habis', [LaporanController::class, 'habis'])->name('laporan.habis');

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

});