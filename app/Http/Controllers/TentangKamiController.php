<?php

namespace App\Http\Controllers;

use App\Models\Tentangkami;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class TentangKamiController extends Controller
{
    // admin
    public function selectAdmin()
    {
        $files = Tentangkami::all();

        return view('admin.tentangkami.tentang_kami', compact('files'));
    }

    public function showAdmin($id)
    {
        $files = Tentangkami::find($id);

        return view('admin.tentangkami.detail', compact('files'));
    }

    public function insertTentangkami(request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'photo' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $imageName = time() . '.' . $request->photo->extension();
        $request->photo->move(public_path('images'), $imageName);

        $produk = new Tentangkami();
        $produk->title = $request->input('title');
        $produk->content = $request->input('content');
        $produk->photo = $imageName;
        $produk->save();

        return redirect()->route('admin.tentangkami')->with('success', 'Data Berhasil Disimpan!');
    }

    public function edit($id)
    {
        //get post by ID
        $post = Tentangkami::findOrFail($id);

        //render view with post
        return view('admin.tentangkami.edit', compact('post'));
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
        $post = Tentangkami::findOrFail($id);

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
        return redirect()->route('admin.tentangkami.detail', $id)->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function delete($id)
    {
        // Cari data berdasarkan ID
        $files = Tentangkami::where('tentang_id', $id)->first();

        if (!$files) {
            // Jika data tidak ditemukan, redirect dengan pesan error
            return redirect()->route('admin.tentangkami')->with(['error' => 'Data tidak ditemukan']);
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
        return redirect()->route('admin.tentangkami')->with(['success' => 'Data berhasil dihapus']);
    }


    // guest
    public function selectGuest()
    {
        $files = Tentangkami::all();

        return view('guest.tentang_kami', compact('files'));
    }

    public function showGuest($id)
    {
        $files = Tentangkami::find($id);

        return view('guest.tentangkami_detail', compact('files'));
    }


    // user
    public function selectUser()
    {
        $files = Tentangkami::all();

        return view('user.tentang_kami', compact('files'));
    }

    public function showUser($id)
    {
        $files = Tentangkami::find($id);

        return view('user.tentangkami_detail', compact('files'));
    }
}
