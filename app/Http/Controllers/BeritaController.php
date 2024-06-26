<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use Illuminate\Support\Facades\File;

class BeritaController extends Controller
{

    //admin
    public function selectAdmin()
    {
        $files = Berita::all();

        return view('admin.berita.berita', compact('files'));
    }

    public function showAdmin($id)
    {
        $files = Berita::find($id);

        return view('admin.berita.detail', compact('files'));
    }

    public function insertBerita(request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'photo' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ], [
            'title.required' => 'Judul wajib di isi',
            'content.required' => 'Informasi wajib di isi',
            'photo.required' => 'Gambar wajib di isi',
            'photo.image' => 'Format gambar tidak sesuai',
            'photo.mimes' => 'Format gambar tidak sesuai',
            'photo.max' => 'Ukuran gambar melebihi kapasitas, max 2 mb',
        ]);

        $imageName = time() . '.' . $request->photo->extension();
        $request->photo->move(public_path('images'), $imageName);

        $produk = new Berita();
        $produk->title = $request->input('title');
        $produk->content = $request->input('content');
        $produk->photo = $imageName;
        $produk->save();

        return redirect()->route('admin.berita')->with('success', 'Data Berhasil Disimpan!');
    }

    public function edit($id)
    {
        //get post by ID
        $post = Berita::findOrFail($id);

        //render view with post
        return view('admin.berita.edit', compact('post'));
    }

    public function update(request $request, $id)
    {


        //validate form
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',

        ], [
            'title.required' => 'Judul wajib di isi',
            'content.required' => 'Informasi wajib di isi',
            'photo.image' => 'Format gambar tidak sesuai',
            'photo.mimes' => 'Format gambar tidak sesuai',
            'photo.max' => 'Ukuran gambar melebihi kapasitas, max 2 mb',

        ]);

        //get post by ID
        $post = Berita::findOrFail($id);

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
                'content' => $request->content,

            ]);
        } else {
            //update post without new image
            $post->update([
                'title' => $request->title,
                'content' => $request->content,

            ]);
        }


        //redirect to index
        return redirect()->route('admin.berita.detail', $id)->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function delete($id)
    {
        // Cari data berdasarkan ID
        $files = Berita::where('berita_id', $id)->first();

        if (!$files) {
            // Jika data tidak ditemukan, redirect dengan pesan error
            return redirect()->route('admin.berita')->with(['error' => 'Data tidak ditemukan']);
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
        return redirect()->route('admin.berita')->with(['success' => 'Data berhasil dihapus']);
    }


    // guest
    public function selectGuest()
    {
        $files = Berita::all();

        return view('guest.berita', compact('files'));
    }

    public function showGuest($id)
    {
        $files = Berita::find($id);

        return view('guest.berita_detail', compact('files'));
    }


    // user
    public function selectUser()
    {
        $files = Berita::all();

        return view('user.berita', compact('files'));
    }

    public function showUser($id)
    {
        $files = Berita::find($id);

        return view('user.berita_detail', compact('files'));
    }
}
