<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\KalkulatorController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmployeController;
use App\Http\Controllers\AuthController;

// Route Halaman Login Utama (Menggantikan route '/' lama sesuai modul hal 35)
Route::get('/', function () {
    return view('login');
});
Route::post('/login', [AuthController::class, 'cek']);

// Route Praktikum Awal
route::get('/about', function() {
    return "<h2>ini adalah halaman about</h2>";
});

route::get('/about/{nama}', function($nama) {
    return "<h2>halo,nama saya adalah : $nama</h2>";
});

// Route Latihan Halaman 12
Route::get('/daftar/mahasiswa', [MahasiswaController::class, 'index']);
Route::get('/kalkulator/segitiga', [KalkulatorController::class, 'segitiga']);
Route::post('/kalkulator/segitiga/proses', [KalkulatorController::class, 'prosesSegitiga']);

// Route Group yang Wajib Login (Bab 1, 2, dan 4 digabung di sini)
Route::group(['middleware' => 'islogin'], function () {
    // Bab Sistem Templating
    Route::get('/dashboard', [DashboardController::class, 'home']);
    Route::get('/gallery', [DashboardController::class, 'gallery']);

    // Bab CRUD Data Pegawai
    Route::get('/employe', [EmployeController::class, 'index']);
    Route::get('/employe/create', [EmployeController::class, 'create']);
    Route::post('/employe/store', [EmployeController::class, 'store']);
    Route::get('/employe/edit/{employe}', [EmployeController::class, 'show']);
    Route::put('/employe/{employe}', [EmployeController::class, 'update']);
    Route::delete('/employe/{employe}', [EmployeController::class, 'destroy']);

    // Logout
    Route::get('/logout', [AuthController::class, 'logout']);
});