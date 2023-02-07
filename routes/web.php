<?php

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/barang',[App\Http\Controllers\BarangController::class, 'index'])->name('barang');

Route::post('/barang',[App\Http\Controllers\BarangController::class, 'create'])->name('add.brg');

Route::get('/barang/{id}/edit',[App\Http\Controllers\BarangController::class,'edit']);

Route::post('/barang/{id}/update',[App\Http\Controllers\BarangController::class,'update'])->name('update.brg');

Route::get('/barang/delete/{id}',[App\Http\Controllers\BarangController::class,'delete']);

Route::get('/transaksi',[App\Http\Controllers\TransaksiController::class, 'index'])->name('transaksi');

Route::post('/transaksi',[App\Http\Controllers\TransaksiController::class, 'create'])->name('add.trk');

Route::get('/transaksi/{id}/edit',[App\Http\Controllers\TransaksiController::class,'edit']);

Route::post('/transaksi/{id}/update',[App\Http\Controllers\TransaksiController::class, 'update'])->name('update.trk');

Route::get('/transaksi/delete/{id}',[App\Http\Controllers\TransaksiController::class,'delete']);


