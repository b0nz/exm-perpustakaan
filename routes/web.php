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
Route::get('/buku', function() {
    return view('admin.buku');
})
    ->middleware('can:isAdmin')
    ->name('buku');
Route::get('/jenis-buku', function() {
    return view('admin.jenis-buku');
})
    ->middleware('can:isAdmin')
    ->name('jenis-buku');
Route::get('/users', function() {
    return view('admin.users');
})
    ->middleware('can:isAdmin')
    ->name('users');
