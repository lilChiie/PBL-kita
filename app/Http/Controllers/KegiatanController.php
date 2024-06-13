<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Akademi;
use Illuminate\Support\Facades\File;

class KegiatanController extends Controller
{

    //admin
    public function selectAkademi()
    {
        $files = Akademi::all();

        return view('admin.akademi.kegiatan', compact('files'));
    }

    public function showAkademi($id)
    {
        $files = Akademi::find($id);

        return view('admin.akademi.detail', compact('files'));
    }

    public function insertAkademi(request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'photo' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'location' => 'required',
            'price' => 'required|max:1000000000',
            'slot'  => 'required|integer|min:1',
            'date'  => 'required|date',
            'category' => 'required'

        ], [
            'title.required' => 'Judul wajib di isi',
            'description.required' => 'Informasi wajib di isi',
            'photo.required' => 'Gambar wajib di isi',
            'photo.image' => 'Format gambar tidak sesuai',
            'photo.mimes' => 'Format gambar tidak sesuai',
            'photo.max' => 'Ukuran gambar melebihi kapasitas, max 2 mb',

            'location.required' => 'Lokasi wajib diisi',
            'price.required' => 'Harga wajib diisi',
            'price.max' => 'Sudah mencapai batas maksimal harga',

            'slot.required' => 'Slot wajib diisi',
            'slot.integer' => 'Slot harus berupa angka bulat',
            'slot.min' => 'Slot tidak boleh kurang dari 1',

            'date.required' => 'Tanggal wajib diisi',
            'date.date' => 'Format tanggal tidak sesuai',

            'category.required' => 'Kategori wajib diisi',
        ]);

        $imageName = time() . '.' . $request->photo->extension();
        $request->photo->move(public_path('images'), $imageName);

        $produk = new Akademi();
        $produk->title = $request->input('title');
        $produk->description = $request->input('description');
        $produk->location = $request->input('location');
        $produk->price = $request->input('price');
        $produk->slot = $request->input('slot');
        $produk->date = $request->input('date');
        $produk->category = $request->input('category');
        $produk->photo = $imageName;
        $produk->save();

        return redirect()->route('admin.kegiatan')->with('success', 'Data Berhasil Disimpan!');
    }



    // guest
    public function selectGuest()
    {
        $files = Akademi::all();

        return view('guest.kegiatan', compact('files'));
    }


    // user
    public function selectUser()
    {
        $files = Akademi::all();

        return view('user.kegiatan', compact('files'));
    }

    public function showUser($id)
    {
        $files = Akademi::find($id);

        return view('user.kegiatan_detail', compact('files'));
    }
}
