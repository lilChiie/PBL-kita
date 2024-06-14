<?php

namespace App\Http\Controllers;

use App\Models\Tentangkami;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class TentangKamiController extends Controller
{

    //home user
    public function home()
    {
        return view('user.user_home')->with('success', 'Login berhasil');
    }
    public function dashboard()
    {
        return view('home');
    }


    //admin
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
        ], [
            'title.required' => 'Judul wajib di isi',
            'content.required' => 'Informasi wajib di isi',
            'photo.required' => 'Gambar wajib di isi',
            'photo.image' => 'Format gambar tidak sesuai',
            'photo.mimes' => 'Format gambar tidak sesuai',
            'photo.max' => 'Ukuran gambar melebihi kapasitas, max 2 mb'
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
        ], [
            'title.required' => 'Judul wajib di isi',
            'content.required' => 'Informasi wajib di isi',
            'photo.image' => 'Format gambar tidak sesuai',
            'photo.mimes' => 'Format gambar tidak sesuai',
            'photo.max' => 'Ukuran gambar melebihi kapasitas, max 2 mb'
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


    //punya api

    // admin
//     public function selectAdmin()
//     {
//         $files = Tentangkami::all();
//         return response()->json($files);
//     }

//     public function showAdmin($id)
//     {
//         $files = Tentangkami::findOrFail($id);
//         return response()->json($files);
//     }

//     public function insertTentangkami(Request $request)
//     {
//         $request->validate([
//             'title' => 'required|string|max:255',
//             'content' => 'required|string',
//             'photo' => 'required|image|mimes:jpeg,png,jpg|max:2048',
//         ]);

//         $imageName = time() . '.' . $request->photo->extension();
//         $request->photo->move(public_path('images'), $imageName);

//         $produk = new Tentangkami();
//         $produk->title = $request->input('title');
//         $produk->content = $request->input('content');
//         $produk->photo = $imageName;
//         $produk->save();

//         return response()->json(['message' => 'Data Berhasil Disimpan!', 'data' => $produk], 201);
//     }

//     public function edit($id)
//     {
//         $post = Tentangkami::findOrFail($id);
//         return response()->json($post);
//     }

//     public function update(Request $request, $id)
//     {
//         $request->validate([
//             'title' => 'required|string|max:255',
//             'content' => 'required|string',
//             'photo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
//         ]);

//         $post = Tentangkami::findOrFail($id);

//         if ($request->hasFile('photo')) {
//             $image = $request->file('photo');
//             $imageName = time() . '.' . $image->getClientOriginalExtension();
//             $image->move(public_path('images'), $imageName);

//             if ($post->photo) {
//                 $oldImagePath = public_path('images/' . $post->photo);
//                 if (File::exists($oldImagePath)) {
//                     File::delete($oldImagePath);
//                 }
//             }

//             $post->update([
//                 'photo' => $imageName,
//                 'title' => $request->title,
//                 'content' => $request->content,
//             ]);
//         } else {
//             $post->update([
//                 'title' => $request->title,
//                 'content' => $request->content,
//             ]);
//         }

//         return response()->json(['message' => 'Data Berhasil Diubah!', 'data' => $post], 200);
//     }

//     public function delete($id)
//     {
//         $files = Tentangkami::findOrFail($id);

//         if ($files->photo) {
//             $oldImagePath = public_path('images/' . $files->photo);
//             if (File::exists($oldImagePath)) {
//                 File::delete($oldImagePath);
//             }
//         }

//         $files->delete();

//         return response()->json(['message' => 'Data berhasil dihapus'], 200);
//     }

//     // guest
//     public function selectGuest()
//     {
//         $files = Tentangkami::all();
//         return response()->json($files);
//     }

//     public function showGuest($id)
//     {
//         $files = Tentangkami::findOrFail($id);
//         return response()->json($files);
//     }

//     // user
//     public function selectUser()
//     {
//         $files = Tentangkami::all();
//         return response()->json($files);
//     }

//     public function showUser($id)
//     {
//         $files = Tentangkami::findOrFail($id);
//         return response()->json($files);
//     }
