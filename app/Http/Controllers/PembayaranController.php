<?php

namespace App\Http\Controllers;

use App\Models\Barcode;
use App\Models\User;
use App\Models\Akademi;
use App\Models\Pembayaran;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log; // Tambahkan ini
use Illuminate\Support\Facades\File;

class PembayaranController extends Controller
{
    public function showPembayaran($id)
    {
        // Mengambil data dari controller Akademi
        $user = Auth::user();
        $akademi = Akademi::findOrFail($id);
        // $pembayaran = Akademi::with('user');

        // Mengambil data dari controller Barcode
        $barcodes = Barcode::all();

        // Mengirimkan data ke view
        return view('user.pembayaran', compact('user', 'akademi', 'barcodes'));
    }

    public function bayar(Request $request)
    {


        $request->validate([
            'photo' => 'required|image|mimes:jpeg,jpg,png|max:2048',
        ], [
            'photo.image' => 'Format gambar tidak sesuai',
            'photo.mimes' => 'Format gambar tidak sesuai',
            'photo.max' => 'Ukuran gambar melebihi kapasitas, max 2 mb'
        ]);
        $user = Auth::user();
        $akademi = Akademi::find($request->kegiatan_id);



        $imageName = time() . '.' . $request->photo->extension();
        $request->photo->move(public_path('bukti'), $imageName);

        $produk = new Pembayaran();
        $produk->user_id = $user->id;
        $produk->kegiatan_id = $akademi->kegiatan_id;
        $produk->photo = $imageName;
        $produk->save();

        return redirect()->route('user.akademi')->with('success', 'Pendaftaran berhasil!');
    }

    public function list()
    {
        $pendaftaran = Pembayaran::with(['user', 'activity']);

        return view('user.akademi', ['pendaftaran' => $pendaftaran]);
    }
}
