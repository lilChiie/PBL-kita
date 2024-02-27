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
    return view('home');
});

//tentang kami
Route::get('/TentangKami', function () {
    return view('Tentang_Kami');
});

//riset
Route::get('/Riset', function () {
    return view('riset');
});

Route::get('/Konsultasi', function () {
    return view('konsultasi');
});
