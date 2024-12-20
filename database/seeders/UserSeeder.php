<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Admin User
        User::create([
            'name' => 'Admin Lelang',
            'email' => 'admin@lelang.com',
            'password' => Hash::make('admin1234'),
            'role' => 'admin',
        ]);

        // Peserta User 1
        User::create([
            'name' => 'Udin Gambut',
            'email' => 'udin@lelang.com',
            'password' => Hash::make('udin1234'),
            'role' => 'peserta',
        ]);

        // Peserta User 2
        User::create([
            'name' => 'Agus Kocak',
            'email' => 'agus@lelang.com',
            'password' => Hash::make('agus1234'),
            'role' => 'peserta',
        ]);
    }
}
