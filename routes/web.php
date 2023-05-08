<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PenerbitController;
use App\Http\Controllers\PengadaanController;

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

// Route::get('/', function () {
//     return view('index');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//route admin
Route::resource('admin', AdminController::class);

//route buku
Route::resource('buku', BukuController::class)->except(['destroy']);
Route::get('/buku/delete/{id}', [BukuController::class, 'delete'])->name('buku.delete');

//route kategori
Route::resource('kategori', KategoriController::class)->except(['destroy']);
Route::get('/kategori/delete/{id}', [KategoriController::class, 'delete'])->name('kategori.delete');


//route penerbit
Route::resource('penerbit', PenerbitController::class)->except(['destroy']);
Route::get('/penerbit/delete/{id}', [PenerbitController::class, 'delete'])->name('penerbit.delete');

//route pengadaan
Route::resource('pengadaan', PengadaanController::class);