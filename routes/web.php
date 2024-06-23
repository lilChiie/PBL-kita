<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TentangkamiController;
use App\Http\Controllers\KonsultasiController;
use App\Http\Controllers\RisetController;
use App\Http\Controllers\PublikasiController;
use App\Http\Controllers\PertanyaanController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BarcodeController;
use App\Http\Controllers\AkademiController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\PembayaranController;






Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/sign', [LoginController::class, 'sign'])->middleware('guest')->name('sign');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');



Route::get('/daftar', [LoginController::class, 'daftar'])->middleware('guest')->name('daftar');
Route::post('/register', [LoginController::class, 'register'])->middleware('guest')->name('register');

Route::get('/LupaPassword', function () {
    return view('auth/lupa_password');
})->middleware('guest')->name('password.request');

Route::get('/verifikasi', function () {
    return view('auth/verifikasi');
});

Route::get('/', [HomeController::class, 'dashboard'])->name('home');

Route::prefix('user')->middleware(['auth', 'user'])->group(function () {
    Route::get('/', [HomeController::class, 'home'])->name('user.home');

    Route::get('/TentangKami', [TentangkamiController::class, 'selectUser'])->name('user.tentangkami');
    Route::get('/TentangKami/Detail/{id}', [TentangkamiController::class, 'showUser'])->name('user.tentangkami.detail');

    Route::get('/Riset', [RisetController::class, 'selectUser'])->name('user.riset');
    Route::get('/Detail_Riset/{id}', [RisetController::class, 'ShowUser'])->name('user.riset.detail');

    Route::get('/Konsultasi', [KonsultasiController::class, 'selectUser'])->name('user.konsultasi');
    Route::get('/Konsultasi/Detail/{id}', [KonsultasiController::class, 'ShowUser'])->name('user.konsultasi.detail');
    Route::post('/Konsultasi/Detail', [PertanyaanController::class, 'insertPertanyaanUser'])->name('user.pertanyaan.tambah');

    Route::get('/Publikasi', [PublikasiController::class, 'selectUser'])->name('user.publikasi');
    Route::get('/Publikasi/Detail/{id}', [PublikasiController::class, 'showUser'])->name('user.publikasi.detail');

    Route::get('/Berita', [BeritaController::class, 'selectUser'])->name('user.berita');
    Route::get('/Berita/Detail/{id}', [BeritaController::class, 'showUser'])->name('user.berita.detail');

    Route::get('/Akademi', function () {
        return view('user/akademi');
    });

    Route::get('/Pelatihan', [AkademiController::class, 'selectUser'])->name('user.pelatihan');
    Route::get('/Pelatihan/Detail/{id}', [AkademiController::class, 'showUser'])->name('user.pelatihan.detail');

    Route::get('/Kegiatan', [KegiatanController::class, 'selectUser'])->name('user.kegiatan');
    Route::get('/Kegiatan/detail/{id}', [KegiatanController::class, 'showUser'])->name('user.kegiatan.detail');

    Route::get('/Pembayaran/{id}', [PembayaranController::class, 'showPembayaran'])->name('pembayaran');
    Route::post('/pembayaran', [PembayaranController::class, 'bayar'])->name('pembayaran.kirim');


    Route::get('/Detail_Riwayat', function () {
        return view('user/detail_riwayat');
    });

    Route::get('/profil', [UserController::class, 'profiluser'])->name('user.profil');
    Route::put('/profil/update', [UserController::class, 'updateuser'])->name('user.profil.update');
});



Route::prefix('guest')->middleware('guest')->group(function () {

    Route::get('/TentangKami', [TentangkamiController::class, 'selectGuest'])->name('guest.tentangkami');
    Route::get('/TentangKami/Detail/{id}', [TentangkamiController::class, 'showGuest'])->name('guest.tentangkami.detail');

    Route::get('/Riset', [RisetController::class, 'selectGuest'])->name('guest.riset');
    Route::get('/Riset/Detail/{id}', [RisetController::class, 'ShowGuest'])->name('guest.riset.detail');


    Route::get('/Konsultasi', [KonsultasiController::class, 'selectGuest'])->name('guest.konsultasi');
    Route::get('/Konsultasi/Detail/{id}', [KonsultasiController::class, 'ShowGuest'])->name('guest.konsultasi.detail');
    Route::post('/Konsultasi/Detail', [PertanyaanController::class, 'insertPertanyaanGuest'])->name('guest.pertanyaan.tambah');


    Route::get('/Publikasi', [PublikasiController::class, 'selectGuest'])->name('guest.publikasi');
    Route::get('/Publikasi/Detail/{id}', [PublikasiController::class, 'showGuest'])->name('guest.publikasi.detail');

    Route::get('/Akademi', function () {
        return view('guest/akademi');
    });

    Route::get('/Pelatihan', [AkademiController::class, 'selectGuest'])->name('guest.pelatihan');

    Route::get('/Kegiatan', [KegiatanController::class, 'selectGuest'])->name('guest.kegiatan');

    Route::get('/Berita', [BeritaController::class, 'selectGuest'])->name('guest.berita');
    Route::get('/Berita/Detail/{id}', [BeritaController::class, 'showGuest'])->name('guest.berita.detail');
});





Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {
    Route::get('/', [HomeController::class, 'adminhome'])->name('admin.home');

    Route::get('/profil', [UserController::class, 'profiladmin'])->name('admin.profil');
    Route::put('/profil/update', [UserController::class, 'updateadmin'])->name('admin.profil.update');


    Route::prefix('tentangkami')->group(function () {
        Route::get('/', [TentangkamiController::class, 'selectAdmin'])->name('admin.tentangkami');
        Route::get('/detail/{id}', [TentangkamiController::class, 'showAdmin'])->name('admin.tentangkami.detail');
        Route::get('/tambah', function () {
            return view('admin/tentangkami/tambah');
        });
        Route::get('/edit/{id}', [TentangkamiController::class, 'edit'])->name('admin.tentangkami.edit');
        Route::post('/tambah', [TentangkamiController::class, 'insertTentangkami'])->name('admin.tentangkami.tambah');
        Route::post('/update/{id}', [TentangkamiController::class, 'update'])->name('admin.tentangkami.update');
        Route::delete('/delete/{id}', [TentangkamiController::class, 'delete'])->name('admin.tentangkami.delete');
    });

    Route::prefix('konsultasi')->group(function () {
        Route::get('/', [KonsultasiController::class, 'selectAdmin'])->name('admin.konsultasi');
        Route::get('/detail/{id}', [KonsultasiController::class, 'showAdmin'])->name('admin.konsultasi.detail');
        Route::get('/tambah', function () {
            return view('admin/konsultasi/tambah');
        });
        Route::get('/edit/{id}', [KonsultasiController::class, 'edit'])->name('admin.konsultasi.edit');
        Route::post('/tambah', [KonsultasiController::class, 'insertKonsultasi'])->name('admin.konsultasi.tambah');
        Route::post('/update/{id}', [KonsultasiController::class, 'update'])->name('admin.konsultasi.update');
        Route::delete('/delete/{id}', [KonsultasiController::class, 'delete'])->name('admin.konsultasi.delete');

        Route::get('/pertanyaan', [PertanyaanController::class, 'selectAdmin'])->name('admin.konsultasi.pertanyaan');
        Route::get('/pertanyaan/detail/{id}', [PertanyaanController::class, 'showAdmin'])->name('admin.detail.pertanyaan');
    });

    Route::prefix('riset')->group(function () {
        Route::get('/', [RisetController::class, 'selectAdmin'])->name('admin.riset');
        Route::get('/detail/{id}', [RisetController::class, 'showAdmin'])->name('admin.riset.detail');
        Route::get('/edit/{id}', [RisetController::class, 'edit'])->name('admin.riset.edit');
        Route::get('/tambah', function () {
            return view('admin/riset/tambah');
        });
        Route::post('/tambah', [RisetController::class, 'insertRiset'])->name('admin.riset.tambah');
        Route::post('/update/{id}', [RisetController::class, 'update'])->name('admin.riset.update');
        Route::delete('/delete/{id}', [RisetController::class, 'delete'])->name('admin.riset.delete');
    });

    Route::prefix('publikasi')->group(function () {
        Route::get('/', [PublikasiController::class, 'selectAdmin'])->name('admin.publikasi');
        Route::get('/detail/{id}', [PublikasiController::class, 'showAdmin'])->name('admin.publikasi.detail');

        Route::get('/tambah', function () {
            return view('admin/publikasi/tambah');
        });
        Route::post('/tambah', [PublikasiController::class, 'insertPublikasi'])->name('admin.publikasi.tambah');
        Route::get('/edit/{id}', [PublikasiController::class, 'edit'])->name('admin.publikasi.edit');
        Route::post('/update/{id}', [PublikasiController::class, 'update'])->name('admin.publikasi.update');
        Route::delete('/delete/{id}', [PublikasiController::class, 'delete'])->name('admin.publikasi.delete');
    });

    Route::prefix('berita')->group(function () {
        Route::get('/', [BeritaController::class, 'selectAdmin'])->name('admin.berita');
        Route::get('/detail/{id}', [BeritaController::class, 'showAdmin'])->name('admin.berita.detail');
        Route::get('/edit/{id}', [BeritaController::class, 'edit'])->name('admin.berita.edit');
        Route::get('/tambah', function () {
            return view('admin/berita/tambah');
        });
        Route::post('/tambah', [BeritaController::class, 'insertBerita'])->name('admin.berita.tambah');
        Route::put('/update/{id}', [BeritaController::class, 'update'])->name('admin.berita.update');
        Route::delete('/delete/{id}', [BeritaController::class, 'delete'])->name('admin.berita.delete');
    });


    Route::get('/pelatihan', [AkademiController::class, 'selectAkademi'])->name('admin.pelatihan');

    Route::prefix('kegiatan')->group(function () {
        Route::get('/', [KegiatanController::class, 'selectAkademi'])->name('admin.kegiatan');
        Route::get('/tambah', function () {
            return view('admin/akademi/tambah_kegiatan');
        });
        Route::post('/insert', [KegiatanController::class, 'insertAkademi'])->name('admin.kegiatan.insert');
    });



    Route::prefix('akademi')->group(function () {
        Route::get('/', function () {
            return view('admin/akademi/akademi');
        });

        //barcode
        Route::get('/barcode', [BarcodeController::class, 'index'])->name('barcode');
        Route::post('/tambah', [BarcodeController::class, 'insert'])->name('barcode.tambah');
        Route::delete('/barcode/delete/{id}', [BarcodeController::class, 'delete'])->name('barcode.delete');

        //pelatihan dan kegiatan
        Route::get('/detail/{id}', [AkademiController::class, 'showAkademi'])->name('admin.akademi.detail');

        Route::get('/edit/{id}', [AkademiController::class, 'edit'])->name('admin.akademi.edit');
        Route::put('/update/{id}', [AkademiController::class, 'update'])->name('admin.akademi.update');

        Route::get('/tambah', function () {
            return view('admin/akademi/tambah_pelatihan');
        });
        Route::post('/insert', [AkademiController::class, 'insertAkademi'])->name('admin.akademi.insert');

        Route::delete('/delete/{id}', [AkademiController::class, 'delete'])->name('admin.akademi.delete');

        Route::get('/detail_pembayaran', function () {
            return view('admin/akademi/detail_bayar');
        });
    });
});
