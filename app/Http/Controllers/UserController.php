<?php

namespace App\Http\Controllers;

use App\Mail\TestSendingEmail;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    //profil user
    public function profiluser()
    {
        return view('user.profil');
    }

    public function updateuser(Request $request)
    {
        // Validate form input
        $request->validate([
            'username' => 'required|unique:users,username,' . Auth::id(),

            'email' => 'required|email|unique:users,email,' . Auth::id(),
            'phone' => 'required|string|max:15',

            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ], [
            'username.required' => 'Nama Pengguna wajib diisi',
            'username.unique' => 'Username sudah terdaftar',
            'email.required' => 'Email wajib diisi',
            'email.unique' => 'Email sudah terdaftar',
            'email.email' => 'Email tidak valid',
            'phone.required' => 'No. Telepone wajib diisi',
            'photo.image' => 'Format gambar tidak sesuai',
            'photo.mimes' => 'Format gambar tidak sesuai',
            'photo.max' => 'Ukuran gambar melebihi kapasitas, max 2 mb',
        ]);

        // Get the authenticated user
        $user = User::find(Auth::id());

        // Prepare data for updating
        $data = [
            'username' => $request->input('username'),
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'address' => $request->input('address'),
        ];
        $defaultPhoto = '5.jpg';
        // Check if a new profile photo is uploaded
        // Memeriksa apakah ada foto profil baru yang diunggah
        if ($request->hasFile('photo')) {
            // Mendapatkan file yang diunggah
            $image = $request->file('photo');
            // Menghasilkan nama baru untuk file
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            // Menyimpan gambar baru di folder public/profile
            $image->move(public_path('profile'), $imageName);

            // Menghapus gambar lama jika bukan gambar default
            if ($user->photo && $user->photo !== $defaultPhoto) {
                $oldImagePath = public_path('profile/' . $user->photo);
                if (File::exists($oldImagePath)) {
                    File::delete($oldImagePath);
                }
            }

            // Add new profile photo to data array
            $data['photo'] = $imageName;
        }

        // Update user data
        $user->update($data);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Profil berhasil di update!');
    }

    //profil admin
    public function profiladmin()
    {
        return view('admin.profil');
    }

    public function updateadmin(Request $request)
    {
        // Validate form input
        $request->validate([
            'username' => 'required|unique:users,username,' . Auth::id(),
            'email' => 'required|email|unique:users,email,' . Auth::id(),

        ], [
            'username.required' => 'Nama Pengguna wajib diisi',
            'username.unique' => 'Username sudah terdaftar',
            'email.required' => 'Email wajib diisi',
            'email.unique' => 'Email sudah terdaftar',
            'email.email' => 'Email tidak valid',

        ]);

        // Get the authenticated user
        $user = User::find(Auth::id());

        // Prepare data for updating
        $data = [
            'username' => $request->input('username'),
            'email' => $request->input('email'),

        ];



        // Update user data
        $user->update($data);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Profil berhasil di update!');
    }

    public function list()
    {
        $user = User::where('role', 'user')->paginate(9);

        return view('admin.list', compact('user'));
    }
}
