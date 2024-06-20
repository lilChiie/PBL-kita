<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

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
            'name' => 'string|max:255',
            'email' => 'required|email|unique:users,email,' . Auth::id(),
            'phone' => 'required|string|max:15',
            'address' => 'string|max:255',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ], [
            'username.required' => 'Nama Pengguna wajib diisi',
            'username.unique' => 'Username sudah terdaftar',
            'email.required' => 'Email wajib diisi',
            'email.unique' => 'Email sudah terdaftar',
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

        // Check if a new profile photo is uploaded
        if ($request->hasFile('photo')) {
            // Get the uploaded file
            $image = $request->file('photo');
            // Generate a new name for the file
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            // Store the new image in public/images
            $image->move(public_path('images'), $imageName);

            // Delete old image if it exists
            if ($user->photo) {
                $oldImagePath = public_path('images/' . $user->photo);
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
}
