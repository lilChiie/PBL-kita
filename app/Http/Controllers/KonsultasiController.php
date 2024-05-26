<?php

namespace App\Http\Controllers;

use App\Models\Konsultasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class KonsultasiController extends Controller
{
    // admin
    public function selectAdmin()
    {
        $files = Konsultasi::all();

        return view('admin.konsultasi.konsultasi', compact('files'));
    }

    public function showAdmin($id)
    {
        $files = Konsultasi::find($id);

        return view('admin.konsultasi.detail', compact('files'));
    }

    public function insertKonsultasi(request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'photo' => 'required|image:jpeg,jpg,gif,svg|max:2048',
        ]);

        $imageName = time() . '.' . $request->photo->extension();
        $request->photo->move(public_path('images'), $imageName);

        $produk = new Konsultasi();
        $produk->title = $request->input('title');
        $produk->content = $request->input('content');
        $produk->photo = $imageName;
        $produk->save();

        return redirect()->route('admin.konsultasi')->with('success', 'Data Berhasil Disimpan!');
    }

    public function edit($id)
    {
        // get post by ID
        $post = Konsultasi::findOrFail($id);

        // render view with post
        return view('admin.konsultasi.edit', compact('post'));
    }

    public function update(request $request, $id)
    {
        //validate form
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        //get post by ID
        $post = Konsultasi::findOrFail($id);

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
        return redirect()->route('admin.konsultasi.detail', $id)->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function delete($id)
    {
        // Cari data berdasarkan ID
        $files = Konsultasi::where('konsultasi_id', $id)->first();

        if (!$files) {
            // Jika data tidak ditemukan, redirect dengan pesan error
            return redirect()->route('admin.konsultasi')->with(['error' => 'Data tidak ditemukan']);
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
        return redirect()->route('admin.konsultasi')->with(['success' => 'Data berhasil dihapus']);
    }



    // guest
    public function selectGuest()
    {
        $files = Konsultasi::all();

        return view('guest.konsultasi', compact('files'));
    }

    public function showGuest($id)
    {
        $files = Konsultasi::find($id);

        return view('guest.konsultasi_detail', compact('files'));
    }

    // user
    public function selectUser()
    {
        $files = Konsultasi::all();

        return view('user.konsultasi', compact('files'));
    }

    public function showUser($id)
    {
        $files = Konsultasi::find($id);

        return view('user.konsultasi_detail', compact('files'));
    }
}
