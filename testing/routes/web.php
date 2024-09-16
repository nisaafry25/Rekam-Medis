<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\DasboardController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\obatController;
use GuzzleHttp\Middleware;
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


Route::get('/', [AuthController::class, 'login'])->name('login');
Route::post('/postlogin', [AuthController::class, 'postlogin'])->name('postlogin')->middleware('throttle:login');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::group(['middleware' => 'auth'], function(){
    
});

Route::get('/dashboard', [DasboardController::class, 'index'])->name('dashboard');

Route::get('/create-pasien', [PasienController::class, 'create'])->name('pasien.create');
Route::get('/data-pasien', [PasienController::class, 'index'])->name('pasien.index');
Route::get('/pasien', [PasienController::class, 'index'])->name('pasien.index');
Route::post('/pasien', [PasienController::class, 'store'])->name('pasien');
Route::get('/edit-pasien/{id}', [PasienController::class, 'edit'])->name('pasien.edit');
Route::post('/update-pasien/{id}', [PasienController::class, 'update'])->name('pasien.update');
Route::get('/delete-pasien/{id}', [PasienController::class, 'destroy'])->name('pasien.destroy');


Route::get('/create-dokter', [DokterController::class, 'create'])->name('dokter.create');
Route::get('/data-dokter', [DokterController::class, 'index'])->name('dokter.index');
Route::get('/dokter', [DokterController::class, 'index'])->name('dokter.index');
Route::post('/dokter', [DokterController::class, 'store'])->name('dokter');
Route::get('/edit-dokter/{id}', [DokterController::class, 'edit'])->name('dokter.edit');
Route::post('/update-dokter/{id}', [DokterController::class, 'update'])->name('dokter.update');
Route::get('/delete-dokter/{id}', [DokterController::class, 'destroy'])->name('dokter.destroy');

Route::get('/create-obat', [ObatController::class, 'create'])->name('obat.create');
Route::get('/data-obat', [ObatController::class, 'index'])->name('obat.index');
Route::get('/obat', [ObatController::class, 'index'])->name('obat.index');
Route::post('/obat', [ObatController::class, 'store'])->name('obat');
Route::get('/edit-obat/{id}', [ObatController::class, 'edit'])->name('obat.edit');
Route::post('/update-obat/{id}', [ObatController::class, 'update'])->name('obat.update');
Route::get('/delete-obat/{id}', [ObatController::class, 'destroy'])->name('obat.destroy');