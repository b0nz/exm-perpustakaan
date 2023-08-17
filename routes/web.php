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

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/buku', [App\Http\Controllers\BukuController::class, 'index'])
    ->middleware('can:isAdmin')
    ->name('buku');
Route::post('/buku', [App\Http\Controllers\BukuController::class, 'create'])
    ->middleware('can:isAdmin')
    ->name('buku.create');
Route::put('/buku/{id}', [App\Http\Controllers\BukuController::class, 'update'])
    ->middleware('can:isAdmin')
    ->name('buku.update');

Route::delete('/buku/{id}', [App\Http\Controllers\BukuController::class, 'delete'])
    ->middleware('can:isAdmin')
    ->name('buku.delete');

Route::get('/jenis-buku', [App\Http\Controllers\JenisBukuController::class, 'index'])
    ->middleware('can:isAdmin')
    ->name('jenis-buku');
Route::post('/jenis-buku', [App\Http\Controllers\JenisBukuController::class, 'create'])
    ->middleware('can:isAdmin')
    ->name('jenis-buku.create');
Route::put('/jenis-buku/{id}', [App\Http\Controllers\JenisBukuController::class, 'update'])
    ->middleware('can:isAdmin')
    ->name('jenis-buku.update');
Route::delete('/jenis-buku/{id}', [App\Http\Controllers\JenisBukuController::class, 'delete'])
    ->middleware('can:isAdmin')
    ->name('jenis-buku.delete');

Route::get('/users', [App\Http\Controllers\UsersController::class, 'index'])
    ->middleware('can:isAdmin')
    ->name('users');

Route::get('/transaksi', [App\Http\Controllers\HistoryController::class, 'index'])
    ->middleware('can:isAdmin')
    ->name('transaksi');

Route::get('/history', [App\Http\Controllers\HistoryController::class, 'index'])
    ->middleware('can:isUser')
    ->name('history');
Route::get('/history/pengembalian/{id}', [App\Http\Controllers\HistoryController::class, 'pengembalian'])
    ->middleware('can:isUser')
    ->name('pengembalian');
Route::get('/buku/{id}', [App\Http\Controllers\DetailBukuController::class, 'index'])
    ->middleware('can:isUser')
    ->name('buku.detail');

Route::get('/cart', [App\Http\Controllers\CartController::class, 'index']);
Route::post('/cart/{id}', [App\Http\Controllers\CartController::class, 'pinjam'])
    ->middleware('can:isUser')
    ->name('pinjam');
