<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Service;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        $neonBox = Service::where('nama_layanan', 'Neon Box')->first();

        Project::create([
            'service_id'    => $neonBox?->id,
            'judul_proyek'  => 'Neon Box & Neon Sign Cafe Kopi',
            'slug'          => Str::slug('Neon Box & Neon Sign Cafe Kopi'),
            'lokasi'        => 'Bandar Lampung',
            'segmen_klien'  => 'Cafe & Coffee Shop',
            'tahun'         => 2024,
            'deskripsi'     => 'Fasad cafe dilengkapi neon box backlite dan neon sign dekoratif di dalam ruangan.',
            'tags'          => 'Neon Box Backlite, Neon Sign Interior, Survei & Pemasangan',
            'urutan'        => 0,
            'status'        => true,
        ]);
    }
}
