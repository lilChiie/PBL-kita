<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;


class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Data admin
        $adminData = [
            'username' => 'Pjappolibatam',
            'name' => null,
            'phone' => null,
            'email' => 'apjappolibatam@gmail.com',
            'password' => Hash::make('Pjappolibatam05'),
            'role' => 'admin',
            'address' => null,
            'photo' => '5.jpg',
            'created_at' => null,
            'updated_at' => null,
        ];

        // Insert data ke dalam tabel users
        DB::table('users')->insert($adminData);
    }
}
