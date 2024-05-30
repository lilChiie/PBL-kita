<?php

namespace App\Http\Controllers;

use App\Models\Barcode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BarcodeController extends Controller
{
    public function index()
    {
        $files = Barcode::all();

        return view('admin.akademi.barcode', compact('files'));
    }

    public function insert(request $request)
    {
        $request->validate([
            'bank' => 'required|string|max:255',
            'photo' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $imageName = time() . '.' . $request->photo->extension();
        $request->photo->move(public_path('barcode'), $imageName);

        $produk = new Barcode();
        $produk->bank = $request->input('bank');
        $produk->photo = $imageName;
        $produk->save();

        return redirect()->back()->with('success', 'Barcode Berhasil Disimpan!');
    }

    public function delete($id)
    {
        // Cari data berdasarkan ID
        $files = Barcode::where('barcode_id', $id)->first();

        if (!$files) {
            // Jika data tidak ditemukan, redirect dengan pesan error
            return redirect()->back()->with(['error' => 'Barcode tidak ditemukan']);
        }

        // Hapus file gambar dari folder public/images jika ada
        if ($files->photo) {
            $oldImagePath = public_path('barcode/' . $files->photo);
            if (File::exists($oldImagePath)) {
                File::delete($oldImagePath);
            }
        }

        // Hapus data dari database
        $files->delete();

        // Redirect ke halaman yang sesuai dengan pesan sukses
        return redirect()->back()->with(['success' => 'Barcode berhasil dihapus']);
    }
}
