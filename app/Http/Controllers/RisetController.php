<?php

namespace App\Http\Controllers;

use App\Models\Riset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class RisetController extends Controller
{
    // admin
    public function selectAdmin()
    {
        $files = Riset::all();

        return view('admin.riset.riset', compact('files'));
    }

    public function showAdmin($id)
    {
        $files = Riset::find($id);

        return view('admin.riset.detail', compact('files'));
    }

    public function insertRiset(request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'photo' => 'required|image:jpeg,jpg,gif,svg|max:2048',
        ]);

        $imageName = time() . '.' . $request->photo->extension();
        $request->photo->move(public_path('images'), $imageName);

        $produk = new Riset();
        $produk->title = $request->input('title');
        $produk->content = $request->input('content');
        $produk->photo = $imageName;
        $produk->save();

        return redirect()->route('admin.riset')->with('success', 'Data Berhasil Disimpan!');
    }

    public function edit($id)
    {
        // get post by ID
        $post = Riset::findOrFail($id);

        // render view with post
        return view('admin.riset.edit', compact('post'));
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
        $post = Riset::findOrFail($id);

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
        return redirect()->route('admin.riset.detail', $id)->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function delete($id)
    {
        // Cari data berdasarkan ID
        $files = Riset::where('riset_id', $id)->first();

        if (!$files) {
            // Jika data tidak ditemukan, redirect dengan pesan error
            return redirect()->route('admin.riset')->with(['error' => 'Data tidak ditemukan']);
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
        return redirect()->route('admin.riset')->with(['success' => 'Data berhasil dihapus']);
    }



    // guest
    public function selectGuest()
    {
        $files = Riset::all();

        return view('guest.riset', compact('files'));
    }

    public function showGuest($id)
    {
        $files = Riset::find($id);

        return view('guest.riset_detail', compact('files'));
    }

    // user
    public function selectUser()
    {
        $files = Riset::all();

        return view('user.riset', compact('files'));
    }

    public function showUser($id)
    {
        $files = Riset::find($id);

        return view('user.riset_detail', compact('files'));
    }
}
