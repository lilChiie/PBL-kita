<?php

namespace App\Http\Controllers;

use App\Models\Barcode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PembayaranController extends Controller
{
    public function showPembayaran()
    {
        // Mengambil data dari controller Akademi


        // Mengambil data dari controller Barcode
        $barcodes = Barcode::all();

        // Mengirimkan data ke view
        return view('user.pembayaran', [

            'barcodes' => $barcodes
        ]);
    }
}
