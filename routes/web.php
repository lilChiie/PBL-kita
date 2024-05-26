<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TentangkamiController;
use App\Http\Controllers\KonsultasiController;
use App\Http\Controllers\RisetController;
use App\Http\Controllers\PublikasiController;
use App\Http\Controllers\PertanyaanController;
use App\Models\Konsultasi;
use App\Models\Riset;
use App\Models\Tentangkami;
use App\Models\Publikasi;
use App\Models\Pertanyaan;





Route::get('/login', function () {
    return view('auth/login');
});

Route::get('/daftar', function () {
    return view('auth/daftar');
});

Route::get('/LupaPassword', function () {
    return view('auth/lupa_password');
});

Route::get('/verifikasi', function () {
    return view('auth/verifikasi');
});

Route::get('/', function () {
    return view('home');
});

Route::prefix('user')->group(function () {
    Route::get('/', function () {
        return view('user/user_home');
    });

    Route::get('/TentangKami', [TentangkamiController::class, 'selectUser'])->name('user.tentangkami');
    Route::get('/TentangKami/Detail/{id}', [TentangkamiController::class, 'showUser'])->name('user.tentangkami.detail');

    Route::get('/Riset', [RisetController::class, 'selectUser'])->name('user.riset');
    Route::get('/Detail_Riset/{id}', [RisetController::class, 'ShowUser'])->name('user.riset.detail');

    Route::get('/Konsultasi', [KonsultasiController::class, 'selectUser'])->name('user.konsultasi');
    Route::get('/Konsultasi/Detail/{id}', [KonsultasiController::class, 'ShowUser'])->name('user.konsultasi.detail');
    Route::post('/Konsultasi/Detail', [PertanyaanController::class, 'insertPertanyaanUser'])->name('user.pertanyaan.tambah');

    Route::get('/Publikasi', [PublikasiController::class, 'selectUser'])->name('user.publikasi');
    Route::get('/Publikasi/Detail/{id}', [PublikasiController::class, 'showUser'])->name('user.publikasi.detail');

    Route::get('/Berita', function () {
        return view('user/berita');
    });
    Route::get('/Detail_Berita', function () {
        return view('user/berita_detail');
    });

    Route::get('/Akademi', function () {
        return view('user/akademi');
    });

    Route::get('/Pelatihan', function () {
        return view('user/pelatihan');
    });
    Route::get('/Detail_Pelatihan', function () {
        return view('user/pelatihan_detail');
    });

    Route::get('/Kegiatan', function () {
        return view('user/kegiatan');
    });

    Route::get('/Detail_Kegiatan', function () {
        return view('user/kegiatan_detail');
    });

    Route::get('/Pembayaran', function () {
        return view('user/pembayaran');
    });

    Route::get('/Detail_Riwayat', function () {
        return view('user/detail_riwayat');
    });

    Route::get('/profil', function () {
        return view('user/profil');
    });
});



Route::prefix('guest')->group(function () {

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

    Route::get('/Pelatihan', function () {
        return view('guest/pelatihan');
    });

    Route::get('/Kegiatan', function () {
        return view('guest/kegiatan');
    });

    Route::get('/Berita', function () {
        return view('guest/berita');
    });
    Route::get('/Detail_Berita', function () {
        return view('guest/berita_detail');
    });
});





Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admin/adm_home');
    });

    Route::prefix('tentangkami')->group(function () {
        Route::get('/', [TentangkamiController::class, 'selectAdmin'])->name('admin.tentangkami');
        Route::get('/detail/{id}', [TentangkamiController::class, 'showAdmin'])->name('admin.tentangkami.detail');
        Route::get('/tambah', function () {
            return view('admin/tentangkami/tambah');
        });
        Route::post('/tambah', [TentangkamiController::class, 'insertTentangkami'])->name('admin.tentangkami.tambah');
        Route::get('/edit/{id}', [TentangkamiController::class, 'edit'])->name('admin.tentangkami.edit');
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
        Route::get('/', function () {
            return view('admin/berita/berita');
        });
        Route::get('/detail', function () {
            return view('admin/berita/detail');
        });
        Route::get('/edit', function () {
            return view('admin/berita/edit');
        });
        Route::get('/tambah', function () {
            return view('admin/berita/tambah');
        });
    });

    Route::prefix('pelatihan')->group(function () {
        Route::get('/', function () {
            return view('admin/akademi/pelatihan/pelatihan');
        });
        Route::get('/detail', function () {
            return view('admin/akademi/pelatihan/detail');
        });
        Route::get('/edit', function () {
            return view('admin/akademi/pelatihan/edit');
        });
        Route::get('/tambah', function () {
            return view('admin/akademi/pelatihan/tambah');
        });
    });

    Route::prefix('kegiatan')->group(function () {
        Route::get('/', function () {
            return view('admin/akademi/kegiatan/kegiatan');
        });
        Route::get('/detail', function () {
            return view('admin/akademi/kegiatan/detail');
        });
        Route::get('/edit', function () {
            return view('admin/akademi/kegiatan/edit');
        });
        Route::get('/tambah', function () {
            return view('admin/akademi/kegiatan/tambah');
        });
    });

    Route::prefix('akademi')->group(function () {
        Route::get('/', function () {
            return view('admin/akademi/akademi');
        });
        Route::get('/barcode', function () {
            return view('admin/akademi/barcode');
        });
        Route::get('/detail_pembayaran', function () {
            return view('admin/akademi/detail_bayar');
        });
    });
});


// controller
// Route::get('/guest/TentangKami', [TentangkamiController::class, 'selectTentangkami']);
// Route::get('/guest/Konsultasi', [KonsultasiController::class, 'index']);
