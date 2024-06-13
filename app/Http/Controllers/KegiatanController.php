<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Akademi;
use Illuminate\Support\Facades\File;

class KegiatanController extends Controller
{
    //admin
    public function selectKegiatan()
    {
        $files = Akademi::all();

        return view('admin.akademi.kegiatan', compact('files'));
    }

    public function showKegiatan($id)
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
            'price' => 'required',
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

    public function edit($id)
    {
        //get post by ID
        $post = Akademi::findOrFail($id);

        //render view with post
        return view('admin.akademi.edit', compact('post'));
    }

    public function update(request $request, $id)
    {
        //validate form
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'location' => 'required',
            'price' => 'required',
            'slot'  => 'required|integer|min:1',
            'date'  => 'required|date',
            'category' => 'required'
        ], [
            'title.required' => 'Judul wajib di isi',
            'description.required' => 'Informasi wajib di isi',
            'photo.image' => 'Format gambar tidak sesuai',
            'photo.mimes' => 'Format gambar tidak sesuai',
            'photo.max' => 'Ukuran gambar melebihi kapasitas, max 2 mb',

            'location.required' => 'Lokasi wajib diisi',
            'price.required' => 'Harga wajib diisi',

            'slot.required' => 'Slot wajib diisi',
            'slot.integer' => 'Slot harus berupa angka bulat',
            'slot.min' => 'Slot tidak boleh kurang dari 1',

            'date.required' => 'Tanggal wajib diisi',
            'date.date' => 'Format tanggal tidak sesuai',

            'category.required' => 'Kategori wajib diisi',
        ]);

        //get post by ID
        $post = Akademi::findOrFail($id);

        //check if image is uploaded
        if ($request->hasFile('photo')) {
            // Get the uploaded file
            $image = $request->file('photo');
            // Generate a new name for the file
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            // Store the new image in public/images
            $image->move(public_path('images'), $imageName);

            // Delete old image if it exists
            if ($post->photo) {
                $oldImagePath = public_path('images/' . $post->photo);
                if (File::exists($oldImagePath)) {
                    File::delete($oldImagePath);
                }
            }

            //update post with new image
            $post->update([
                'photo' => $imageName,
                'title' => $request->title,
                'description' => $request->description,
                'location' => $request->location,
                'price' => $request->price,
                'slot' => $request->slot,
                'date' => $request->date,
                'category' => $request->category
            ]);
        } else {
            //update post without new image
            $post->update([
                'title' => $request->title,
                'description' => $request->description,
                'location' => $request->location,
                'price' => $request->price,
                'slot' => $request->slot,
                'date' => $request->date,
                'category' => $request->category
            ]);
        }
        //redirect to index
        return redirect()->route('admin.kegiatan.detail', $id)->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function delete($id)
    {
        // Cari data berdasarkan ID
        $files = Akademi::where('kegiatan_id', $id)->first();

        if (!$files) {
            // Jika data tidak ditemukan, redirect dengan pesan error
            return redirect()->route('admin.kegiatan')->with(['error' => 'Data tidak ditemukan']);
        }

        // Hapus file gambar dari folder public/images jika ada
        if ($files->photo) {
            $oldImagePath = public_path('images/' . $files->photo);
            if (File::exists($oldImagePath)) {
                File::delete($oldImagePath);
            }
        }

        // Hapus data dari database
        $files->delete();

        // Redirect ke halaman yang sesuai dengan pesan sukses
        return redirect()->route('admin.kegiatan')->with(['success' => 'Data berhasil dihapus']);
    }


    // guest
    public function selectGuest()
    {
        $files = Akademi::all();

        return view('guest.tentang_kami', compact('files'));
    }

    public function showGuest($id)
    {
        $files = Akademi::find($id);

        return view('guest.tentangkami_detail', compact('files'));
    }


    // user
    public function selectUser()
    {
        $files = Akademi::all();

        return view('user.tentang_kami', compact('files'));
    }

    public function showUser($id)
    {
        $files = Akademi::find($id);

        return view('user.tentangkami_detail', compact('files'));
    }
}
