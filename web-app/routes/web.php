<?php

use Illuminate\Support\Facades\Route;

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


