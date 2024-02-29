<?php

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
    return view('user/home');
});
Route::prefix('user')->group(function () {
    Route::get('/TentangKami', function () {
        return view('user/Tentang_Kami');
    });


    Route::get('/Riset', function () {
        return view('user/riset');
    });

    Route::get('/Konsultasi', function () {
        return view('user/konsultasi');
    });

    Route::get('/Publikasi', function () {
        return view('user/publikasi');
    });

    Route::get('/Akademi', function () {
        return view('user/akademi');
    });

    Route::get('/Berita', function () {
        return view('user/berita');
    });
});

Route::prefix('admin')->group(function () {
    Route::get('/TentangKami', function () {
        return view('admin/Tentang_Kami');
    });

    Route::get('/Riset', function () {
        return view('user/riset');
    });

    Route::get('/Konsultasi', function () {
        return view('user/konsultasi');
    });

    Route::get('/Publikasi', function () {
        return view('user/publikasi');
    });

    Route::get('/Akademi', function () {
        return view('user/akademi');
    });

    Route::get('/Berita', function () {
        return view('user/berita');
    });
});
