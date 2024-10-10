<?php

use Illuminate\Support\Facades\Route;

Route::prefix('/pemilik-kos')->group(function () {
    Route::get('/', function () {
        return view('pemilik-kos.dashboard');
    });
    
    Route::get('/kos-saya', function () {
        return view('pemilik-kos.kos-saya');
    });
    Route::get('/kos-saya/tambah-data-kos', function () {
        return view('pemilik-kos.tambah-data-kos');
    });


    
    Route::get('/akun-saya', function () {
        return view('pemilik-kos.akun-saya');
    });
});

Route::prefix('/admin')->group(function () {
    Route::get('/', function () {
        return view('admin.dashboard');
    });

    Route::get('/data-kos', function () {
        return view('admin.data-kos');
    });
    
});
