<?php

namespace App\Http\Controllers;

use App\Models\Pertanyaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class PertanyaanController extends Controller
{
    public function selectAdmin()
    {
        $files = Pertanyaan::all();

        return view('admin.konsultasi.pertanyaan', compact('files'));
    }

    public function showAdmin($id)
    {
        $files = Pertanyaan::find($id);

        return view('admin.konsultasi.detail_pertanyaan', compact('files'));
    }

    public function insertPertanyaanGuest(request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'pertanyaan' => 'required|string',
        ]);

        
        $produk = new Pertanyaan();
        $produk->name = $request->input('name');
        $produk->email = $request->input('email');
        $produk->pertanyaan = $request->input('pertanyaan');
        $produk->save();

        return redirect()->route('guest.konsultasi')->with('success', 'Data Berhasil Disimpan!');
    }

    public function insertPertanyaanUser(request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'pertanyaan' => 'required|string',
        ]);

        
        $produk = new Pertanyaan();
        $produk->name = $request->input('name');
        $produk->email = $request->input('email');
        $produk->pertanyaan = $request->input('pertanyaan');
        $produk->save();

        return redirect()->route('user.konsultasi')->with('success', 'Data Berhasil Disimpan!');
    }
}
