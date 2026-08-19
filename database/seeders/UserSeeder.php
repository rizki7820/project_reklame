<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Data User Spesifik (Akun Admin / Developer)
        User::create([
            'name'              => 'Admin',
            'email'             => 'admin@exp.com',
            'email_verified_at' => now(),
            'password'          => Hash::make('password'), // ganti password sesuai kebutuhan
            'remember_token'    => Str::random(10),
        ]);

        // 2. Data Dummy Tambahan menggunakan Factory (opsional, generate 10 user acak)
        // User::factory(10)->create();
    }
}