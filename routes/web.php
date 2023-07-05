<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\KaryawanController;

Route::get('/karyawan', [KaryawanController::class, 'index'])->name('karyawan.index');

use App\Http\Controllers\AbsensiController;

Route::get('/absensi/create', [AbsensiController::class, 'create'])->name('absensi.create');
Route::post('/absensi', [AbsensiController::class, 'store'])->name('absensi.store');

Route::get('/absensi/create', [AbsensiController::class, 'create'])->name('absensi.create');
Route::post('/absensi', [AbsensiController::class, 'store'])->name('absensi.store');


//tamban absensi//


Route::get('/karyawan', [KaryawanController::class, 'index'])->name('karyawan.index');
Route::get('/karyawan/create', [KaryawanController::class, 'create'])->name('karyawan.create');
Route::post('/karyawan', [KaryawanController::class, 'store'])->name('karyawan.store');

//menampilkan karyawan//


Route::get('/karyawan', [KaryawanController::class, 'index'])->name('karyawan.index');


Route::get('/karyawan/{id}', [KaryawanController::class, 'show'])->name('karyawan.show');

//baru


Route::get('/karyawan', [KaryawanController::class, 'index'])->name('karyawan.index');

Route::get('/karyawan/{id}', [KaryawanController::class, 'show'])->name('karyawan.show');


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
