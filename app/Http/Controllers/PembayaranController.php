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
            'name' => 'required'
        ], [
            'photo.required' => 'Bukti pembayaran harus di isi',
            'photo.image' => 'Format gambar tidak sesuai',
            'photo.mimes' => 'Format gambar tidak sesuai',
            'photo.max' => 'Ukuran gambar melebihi kapasitas, max 2 mb',
            'name.required' => 'Nama harus di isi, silahkan melengkapi profil',

        ]);
        $user = Auth::user();
        $akademi = Akademi::find($request->kegiatan_id);



        if ($akademi->slot > 0) {
            $imageName = time() . '.' . $request->photo->extension();
            $request->photo->move(public_path('bukti'), $imageName);

            $pembayaran = new Pembayaran();
            $pembayaran->user_id = $user->id;
            $pembayaran->kegiatan_id = $akademi->kegiatan_id;
            $pembayaran->photo = $imageName;
            $pembayaran->save();

            // Kurangi slot yang tersedia
            $akademi->decrement('slot', 1);

            return redirect()->route('user.akademi')->with('success', 'Pendaftaran berhasil!');
        } else {
            return redirect()->back()->with(['error' => 'Jumlah peserta sudah terpenuhi, anda tidak dapat melakukan pendaftaran lagi']);
        }

        return redirect()->route('user.akademi')->with('success', 'Pendaftaran berhasil!');
    }

    //list pendaftaran user
    public function list()
    {
        $userId = Auth::id();

        $pendaftaran = Pembayaran::with('user', 'activity')
            ->where('user_id', $userId)
            ->paginate(10);

        return view('user.akademi', ['pendaftaran' => $pendaftaran]);
    }

    public function show($id)
    {
        $pendaftaran = Pembayaran::with('user', 'activity')->findOrFail($id);

        return view('user.detail_riwayat', ['pendaftaran' => $pendaftaran]);
    }

    //list pendaftaran admin
    public function listadmin()
    {
        $pendaftaran = Pembayaran::with('user', 'activity')->paginate(10);

        return view('admin.akademi.akademi', ['pendaftaran' => $pendaftaran]);
    }

    public function showadmin($id)
    {
        $pendaftaran = Pembayaran::with('user', 'activity')->findOrFail($id);

        return view('admin.akademi.detail_bayar', ['pendaftaran' => $pendaftaran]);
    }

    public function konfirmasiPendaftaran($id)
    {
        // Temukan pembayaran berdasarkan ID
        $pembayaran = Pembayaran::findOrFail($id);

        // Ubah status pendaftaran menjadi "Pendaftaran dikonfirmasi"
        $pembayaran->status = 'Pendaftaran dikonfirmasi';
        $pembayaran->save();

        // Redirect kembali atau lakukan sesuatu setelah konfirmasi
        return redirect()->back()->with('success', 'Pendaftaran berhasil dikonfirmasi');
    }

    public function batalkanPendaftaran($id)
    {
        // Temukan pembayaran berdasarkan ID
        $pembayaran = Pembayaran::findOrFail($id);
        $akademi = Akademi::findOrFail($pembayaran->kegiatan_id);

        // Ubah status pendaftaran menjadi "Pendaftaran dibatalkan"
        $pembayaran->status = 'Pendaftaran dibatalkan';
        $pembayaran->save();

        $akademi->increment('slot', 1);

        // Redirect kembali atau lakukan sesuatu setelah pembatalan
        return redirect()->back()->with('success', 'Pendaftaran berhasil dibatalkan');
    }
}
