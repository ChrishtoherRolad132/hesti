<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PenilaianController;

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
//     return view('welcome');
// });
// Login
Route::get('/', [AuthController::class, 'index']);
Route::post('/login', [AuthController::class, 'authLogin']);
Route::post('/logout', [AuthController::class, 'logout']);
// Dashboard
Route::get('/dashboard', [DashboardController::class, 'index']);
// Data Dosen
Route::get('/data-dosen', [DosenController::class, 'index']);
Route::post('/data-dosen/tambah', [DosenController::class, 'tambah']);
Route::get('/data-dosen/{nip}/hapus', [DosenController::class, 'hapus']);
Route::get('/data-dosen/{nip}/edit', [DosenController::class, 'edit']);
Route::get('/data-dosen/edit', [DosenController::class, 'edit']);
Route::put('/data-dosen/{nip}/update', [DosenController::class, 'update']);


// Data Kriteria
Route::get('/data-kriteria', [KriteriaController::class, 'index']);
Route::get('/data-kriteria/{kd_kriteria}/edit', [KriteriaController::class, 'edit']);
Route::put('/data-kriteria/{kd_kriteria}/update', [KriteriaController::class, 'update']);
// Data Kriteria
Route::get('/penilaian', [PenilaianController::class, 'index']);
