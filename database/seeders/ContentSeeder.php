<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Gallery;
use App\Models\Project;
use App\Models\Service;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. DATA SERVICES (Katalog Layanan)
        $servicesData = [
            [
                'nama_layanan' => 'Neon Box & Slim Light Box',
                'slug'         => 'neon-box-slim-light-box',
                'deskripsi'    => 'Pembuatan neon box akrilik dan backlite berkualitas tinggi dengan penerangan LED hemat daya dan tahan air (outdoor).',
                'video'        => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ',
                'gambar'       => null,
                'urutan'       => 1,
                'status'       => true,
            ],
            [
                'nama_layanan' => 'Huruf Timbul 3D (Lettering)',
                'slug'         => 'huruf-timbul-3d',
                'deskripsi'    => 'Huruf timbul berbahan stainless mirror, galvanis coating, akrilik, dan kuningan dengan opsi LED backlight mewah.',
                'video'        => null,
                'gambar'       => null,
                'urutan'       => 2,
                'status'       => true,
            ],
            [
                'nama_layanan' => 'Pylon Sign & Billboard',
                'slug'         => 'pylon-sign-billboard',
                'deskripsi'    => 'Konstruksi pylon sign bertiang dan papan reklame besar berspesifikasi rangka besi kuat untuk gedung kantor atau SPBU.',
                'video'        => null,
                'gambar'       => null,
                'urutan'       => 3,
                'status'       => true,
            ],
            [
                'nama_layanan' => 'Running Text & Videotron LED',
                'slug'         => 'running-text-videotron-led',
                'deskripsi'    => 'Display LED teks berjalan dan modul videotron full color indoor/outdoor untuk informasi dinamis dan promosi visual.',
                'video'        => null,
                'gambar'       => null,
                'urutan'       => 4,
                'status'       => true,
            ],
            [
                'nama_layanan' => 'Branding Interior & Car Branding',
                'slug'         => 'branding-interior-car-branding',
                'deskripsi'    => 'Stiker wrapping mobil operasional armada, safety signage pabrik, dan visual display dekorasi dinding interior kantor.',
                'video'        => null,
                'gambar'       => null,
                'urutan'       => 5,
                'status'       => true,
            ],
        ];

        $createdServices = [];
        foreach ($servicesData as $sData) {
            $createdServices[] = Service::updateOrCreate(
                ['slug' => $sData['slug']],
                $sData
            );
        }

        // 2. DATA PROJECTS (Portofolio Proyek)
        $projectsData = [
            [
                'service_id'   => $createdServices[0]->id,
                'judul_proyek' => 'Pemasangan Neon Box Cafe Kopi Senja',
                'slug'         => 'pemasangan-neon-box-cafe-kopi-senja',
                'lokasi'       => 'Banjarmasin Tengah',
                'segmen_klien' => 'F&B / Kafe',
                'tahun'        => 2025,
                'deskripsi'    => 'Pengerjaan neon box akrilik bulat berdiameter 1.2 meter dengan rangka besi hollow dan modul LED Samsung.',
                'gambar'       => null,
                'tags'         => 'Neon Box, Akrilik, LED Samsung, Cafe',
                'urutan'       => 1,
                'status'       => true,
            ],
            [
                'service_id'   => $createdServices[1]->id,
                'judul_proyek' => 'Huruf Timbul Stainless Kantor BUMN',
                'slug'         => 'huruf-timbul-stainless-kantor-bumn',
                'lokasi'       => 'Banjarbaru',
                'segmen_klien' => 'Instansi Perkantoran',
                'tahun'        => 2025,
                'deskripsi'    => 'Produksi dan instalasi huruf 3D stainless steel mirror finish dengan LED backlight warm white pada dinding lobby utama.',
                'gambar'       => null,
                'tags'         => 'Huruf Timbul, Stainless Mirror, Backlight, Lobby',
                'urutan'       => 2,
                'status'       => true,
            ],
            [
                'service_id'   => $createdServices[2]->id,
                'judul_proyek' => 'Pylon Sign SPBU & Rest Area',
                'slug'         => 'pylon-sign-spbu-rest-area',
                'lokasi'       => 'Jl. Ahmad Yani KM 21',
                'segmen_klien' => 'Komersial / Otomotif',
                'tahun'        => 2024,
                'deskripsi'    => 'Konstruksi pylon sign setinggi 6 meter berlapis ACP Seven dengan display running text dan logo menyala.',
                'gambar'       => null,
                'tags'         => 'Pylon Sign, ACP Seven, Konstruksi Rangka Besi',
                'urutan'       => 3,
                'status'       => true,
            ],
            [
                'service_id'   => $createdServices[4]->id,
                'judul_proyek' => 'Car Branding Armada Ekspedisi Cepat',
                'slug'         => 'car-branding-armada-ekspedisi-cepat',
                'lokasi'       => 'Banjarmasin Barat',
                'segmen_klien' => 'Logistik & Ekspedisi',
                'tahun'        => 2026,
                'deskripsi'    => 'Wrapping full body stiker vinyl Ritrama berpelindung laminasi gloss anti gores untuk 5 unit mobil blind van.',
                'gambar'       => null,
                'tags'         => 'Car Branding, Stiker Vinyl, Wrapping Mobil',
                'urutan'       => 4,
                'status'       => true,
            ],
        ];

        $createdProjects = [];
        foreach ($projectsData as $pData) {
            $createdProjects[] = Project::updateOrCreate(
                ['slug' => $pData['slug']],
                $pData
            );
        }

        // 3. DATA GALLERIES (Galeri Dokumentasi & Video)
        $galleriesData = [
            [
                'service_id' => $createdServices[0]->id,
                'project_id' => $createdProjects[0]->id,
                'judul'      => 'Dokumentasi Finishing Neon Box Bulat',
                'jenis'      => 'foto',
                'file'       => null,
                'video_url'  => null,
                'urutan'     => 1,
                'status'     => true,
            ],
            [
                'service_id' => $createdServices[1]->id,
                'project_id' => $createdProjects[1]->id,
                'judul'      => 'Uji Coba Lampu LED Backlight Huruf Stainless',
                'jenis'      => 'foto',
                'file'       => null,
                'video_url'  => null,
                'urutan'     => 2,
                'status'     => true,
            ],
            [
                'service_id' => $createdServices[2]->id,
                'project_id' => $createdProjects[2]->id,
                'judul'      => 'Proses Pengelasan Rangka Pylon Sign',
                'jenis'      => 'foto',
                'file'       => null,
                'video_url'  => null,
                'urutan'     => 3,
                'status'     => true,
            ],
            [
                'service_id' => $createdServices[0]->id,
                'project_id' => $createdProjects[0]->id,
                'judul'      => 'Video Instalasi Reklame Malam Hari',
                'jenis'      => 'video',
                'file'       => null,
                'video_url'  => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ',
                'urutan'     => 4,
                'status'     => true,
            ],
            [
                'service_id' => $createdServices[4]->id,
                'project_id' => $createdProjects[3]->id,
                'judul'      => 'Pemasangan Wrapping Stiker Mobil Presisi',
                'jenis'      => 'foto',
                'file'       => null,
                'video_url'  => null,
                'urutan'     => 5,
                'status'     => true,
            ],
        ];

        foreach ($galleriesData as $gData) {
            Gallery::create($gData);
        }

        // 4. DATA ARTICLES (Blog & Artikel Edukasi)
        $articlesData = [
            [
                'service_id'   => $createdServices[0]->id,
                'judul'        => '5 Tips Memilih Neon Box yang Tepat untuk Usaha Kafe dan Toko',
                'slug'         => '5-tips-memilih-neon-box-yang-tepat',
                'excerpt'      => 'Ketahui jenis bahan akrilik vs backlite serta ketahanan lampu LED agar neon box toko Anda menarik perhatian.',
                'konten'       => "Neon box adalah salah satu media promosi luar ruang paling efektif untuk meningkatkan daya tarik tempat usaha Anda.\n\nDalam memilih neon box, perhatikan beberapa faktor penting:\n1. Pilih bahan akrilik tebal untuk daya tahan warna yang lebih jernih.\n2. Pastikan menggunakan modul LED bersertifikasi waterproof (IP68).\n3. Gunakan trafo daya yang sesuai agar umur lampu lebih awet.\n\nDoa Ibu Production siap membantu merancang neon box dengan kualitas terbaik dan bergaransi.",
                'gambar'       => null,
                'urutan'       => 1,
                'status'       => true,
                'published_at' => now()->subDays(2),
            ],
            [
                'service_id'   => $createdServices[1]->id,
                'judul'        => 'Perbedaan Huruf Timbul Stainless, Galvanis, dan Akrilik',
                'slug'         => 'perbedaan-huruf-timbul-stainless-galvanis-akrilik',
                'excerpt'      => 'Panduan lengkap menentukan material huruf timbul 3D yang sesuai dengan karakter logo dan anggaran Anda.',
                'konten'       => "Huruf timbul memberikan kesan profesional dan elegan pada lobby kantor maupun fasad depan gedung.\n\n- Stainless: Tahan karat, mengkilap, dan memberikan kesan modern mewah.\n- Galvanis: Fleksibel untuk dicat warna custom sesuai brand identity.\n- Akrilik: Menyala merata dari depan atau samping bila dipadukan dengan LED.\n\nKonsultasikan konsep visual Anda kepada tim kami untuk rekomendasi terbaik.",
                'gambar'       => null,
                'urutan'       => 2,
                'status'       => true,
                'published_at' => now()->subDays(5),
            ],
            [
                'service_id'   => $createdServices[2]->id,
                'judul'        => 'Pentingnya Pylon Sign untuk Visibilitas Bisnis di Pinggir Jalan Raya',
                'slug'         => 'pentingnya-pylon-sign-untuk-visibilitas-bisnis',
                'excerpt'      => 'Mengapa bisnis di jalur cepat membutuhkan papan pylon bertiang kokoh untuk menarik pengendara dari kejauhan.',
                'konten'       => "Pengendara di jalan raya hanya memiliki waktu 3 hingga 5 detik untuk memperhatikan papan nama bisnis Anda. Pylon sign yang berdiri tegak dengan pencahayaan jelas membantu pengendara mengidentifikasi lokasi bisnis Anda dari jarak ratusan meter.",
                'gambar'       => null,
                'urutan'       => 3,
                'status'       => true,
                'published_at' => now()->subDays(8),
            ],
        ];

        foreach ($articlesData as $aData) {
            Article::updateOrCreate(
                ['slug' => $aData['slug']],
                $aData
            );
        }
    }
}