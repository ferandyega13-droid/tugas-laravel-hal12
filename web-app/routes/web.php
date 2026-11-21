<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\KalkulatorController;
use App\Http\Controllers\DashboardController;

//import controller web dan taruh di routes dengan nama alias web


Route::get('/', function () {
    //return view('welcome');
    return "haloo nama ku adalah laravel,salam kenal";
});

route::get('/about',function(){
    return "<h2>ini adalah halaman about</h2>";
});

route::get('/about/{nama}',function($nama){
    return "<h2>halo,nama saya adalah : $nama</h2>";
});


// Route Latihan Halaman 12
Route::get('/daftar/mahasiswa', [MahasiswaController::class, 'index']);
Route::get('/kalkulator/segitiga', [KalkulatorController::class, 'segitiga']);
Route::post('/kalkulator/segitiga/proses', [KalkulatorController::class, 'prosesSegitiga']);

// Route Bab Sistem Templating
Route::get('/dashboard', [DashboardController::class, 'home']);
Route::get('/gallery', [DashboardController::class, 'gallery']);