<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            'Huruf Timbul',
            'Neon Box',
            'Billboard',
            'Papan Nama',
            'ACP',
            'Branding Interior',
        ];

        foreach ($data as $i => $nama) {
            Service::create([
                'nama_layanan' => $nama,
                'slug'         => Str::slug($nama),
                'urutan'       => $i,
                'status'       => true,
            ]);
        }
    }
}
