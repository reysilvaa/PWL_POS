<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\POSController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::prefix('/level')->group(function () {
    Route::get('/', [LevelController::class, 'index']);
    Route::get('/tambah', [LevelController::class, 'tambah']);
    Route::post('/tambah_simpan', [LevelController::class, 'tambah_simpan'])->name('level.tambah_simpan');
});

Route::prefix('/kategori')->group(function () {
    Route::get('/', [KategoriController::class, 'index']);
    Route::get('/create', [KategoriController::class, 'create'])->name('kategori.create');
    Route::get('/edit/{id}', [KategoriController::class, 'edit'])->name('kategori.edit');
    Route::put('/{id}', [KategoriController::class, 'update']);
    Route::post('/', [KategoriController::class, 'store']);
    Route::get('/delete/{id}', [KategoriController::class, 'delete'])->name('kategori.delete');
});

Route::prefix('/user')->group(function () {
    Route::get('/', [UserController::class, 'index']);
    Route::get('/tambah', [UserController::class, 'tambah']);
    Route::post('/tambah_simpan', [UserController::class, 'tambah_simpan'])->name('user.tambah_simpan');
    Route::get('/ubah/{id}', [UserController::class, 'ubah']);
    Route::put('/ubah_simpan/{id}', [UserController::class, 'ubah_simpan']);
    Route::get('/hapus/{id}', [UserController::class, 'hapus']);
});

Route::resource('m_user', POSController::class);
