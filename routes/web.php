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
Route::get('/jenis-buku', [App\Http\Controllers\JenisBukuController::class, 'index'])
    ->middleware('can:isAdmin')
    ->name('jenis-buku');
Route::get('/users', [App\Http\Controllers\UsersController::class, 'index'])
    ->middleware('can:isAdmin')
    ->name('users');
Route::get('/history', [App\Http\Controllers\HistoryController::class, 'index'])
    ->middleware('can:isUser')
    ->name('history');
