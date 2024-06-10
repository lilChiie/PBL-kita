<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function sign(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        // // Ambil user berdasarkan username
        $user = User::where('username', $request->username)->first();

        if ($user) {
            // Jika user ditemukan, cek password
            if (Hash::check($request->password, $user->password)) {
                // Jika password cocok, lakukan login

                // return response()->json(['Login berhasil!']);
                return $user->createToken('user')->plainTextToken;
            } else {
                // Jika password salah
                throw ValidationException::withMessages(['failed' => 'Kata sandi salah'], 401);
            }
        } else {
            // Jika user tidak ditemukan
            throw ValidationException::withMessages([
                'username' => 'Username tidak ditemukan',
                'password' => 'Password salah!'
            ], 404);
        }

        return $user->createToken('user')->plainTextToken;
    }

    public function register(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:users,email',
            'username' => 'required|unique:users,username|regex:/^\S*$/',
            'phone' => 'required|numeric',
            'password' => [
                'required',
                'min:8',
                'regex:/[a-z]/', // harus mengandung huruf kecil
                'regex:/[A-Z]/', // harus mengandung huruf kapital
                'regex:/[0-9]/', // harus mengandung angka
            ],
        ], [
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Email tidak valid',
            'email.unique' => 'Email sudah terdaftar',
            'username.required' => 'Username wajib diisi',
            'username.unique' => 'Username sudah terdaftar',
            'username.regex' => 'Username tidak boleh mengandung spasi',
            'phone.required' => 'Nomor telepon wajib diisi',
            'phone.numeric' => 'Nomor telepon harus berupa angka',
            'password.required' => 'Kata sandi wajib diisi',
            'password.min' => 'Kata sandi harus minimal 8 karakter',
            'password.regex' => 'Kata sandi harus mengandung huruf kecil, huruf kapital, dan angka',
        ]);

        $data['email'] = $request->email;
        $data['username'] = $request->username;
        $data['phone'] = $request->phone;
        $data['password'] = Hash::make($request->password);

        User::create($data);

        return response()->json(['success' => 'Registrasi berhasil'], 201);
    }

    public function logout()
    {
        Auth::logout();
        return response()->json(['success' => 'Logout berhasil'], 200);
    }
}
