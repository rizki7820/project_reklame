<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri Proyek & Portofolio — Doa Ibu Production</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <style>
        body {
            background: #34383b;
        }

        .section-pattern {
            position: relative;
            overflow: hidden;
            background: #34383b;
        }

        .section-pattern > * {
            position: relative;
            z-index: 2;
        }

        .section-pattern::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 90px;
            background: url("/top.png") center top/cover no-repeat;
            z-index: 1;
        }

        .section-pattern::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 90px;
            background: url("/bot.png") center bottom/cover no-repeat;
            z-index: 1;
        }

        .outline-text {
            color: transparent;
            -webkit-text-stroke: 2px #83d401;
        }

        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }
        .no-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>
</head>
<body class="text-white overflow-x-hidden">

   <!-- ================= NAVBAR ================= -->
    @include('components.navbar')

    <!-- ================= HEADER SECTION ================= -->
    <section class="pt-44 pb-16 section-pattern border-b border-white/10">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <span class="uppercase tracking-[6px] text-[#83d401] text-sm font-semibold">
                Portofolio Proyek
            </span>
            <h1 class="text-5xl lg:text-7xl font-black mt-4 uppercase">
                Hasil Karya <span class="outline-text block mt-1">Terbaru</span>
            </h1>
            <p class="max-w-2xl mx-auto mt-6 text-gray-300 text-lg leading-relaxed">
                Dokumentasi pengerjaan neon box, pylon sign, huruf timbul, billboard, dan media promosi berkualitas untuk berbagai klien terpercaya.
            </p>

            <!-- ================= FILTER KATEGORI ================= -->
            @php
                $filterCategories = [
                    ['label' => 'Semua', 'slug' => ''],
                    ['label' => 'Neon Box', 'slug' => 'neon-box'],
                    ['label' => 'Huruf Timbul', 'slug' => 'huruf-timbul'],
                    ['label' => 'Papan Nama', 'slug' => 'papan-nama'],
                    ['label' => 'Reklame', 'slug' => 'reklame'],
                    ['label' => 'Running Text', 'slug' => 'running-text'],
                    ['label' => 'Car Branding', 'slug' => 'car-branding'],
                    ['label' => 'Wall Branding', 'slug' => 'wall-branding'],
                    ['label' => 'Spanduk', 'slug' => 'spanduk'],
                ];
            @endphp
            <div class="flex items-center justify-start lg:justify-center gap-2.5 mt-10 overflow-x-auto no-scrollbar pb-2 px-2">
                @foreach($filterCategories as $cat)
                    @php
                        $isActive = request('kategori') === $cat['slug'] || (!request('kategori') && $cat['slug'] === '');
                    @endphp
                    <a 
                        href="{{ $cat['slug'] ? route('projects.public', ['kategori' => $cat['slug']]) : route('projects.public') }}" 
                        class="whitespace-nowrap px-5 py-2.5 rounded-full text-xs font-bold uppercase tracking-widest transition-all duration-300 {{ $isActive ? 'bg-[#83d401] text-[#34383b] shadow-lg shadow-[#83d401]/20 scale-105' : 'bg-[#3b3f42] border border-white/10 text-gray-300 hover:border-[#83d401] hover:text-[#83d401]' }}"
                    >
                        {{ $cat['label'] }}
                    </a>
                @endforeach
            </div>
        </div>
    </section>

    <!-- ================= DYNAMIC PROJECTS GRID ================= -->
    <section class="py-20 bg-[#34383b]">
        <div class="max-w-7xl mx-auto px-6">
            @if($projects->isEmpty())
                <div class="text-center py-20 bg-[#3b3f42] rounded-3xl border border-white/10 p-8 max-w-xl mx-auto">
                    <span class="text-4xl mb-3 block">🔍</span>
                    <h3 class="text-xl font-bold text-white">Belum Ada Proyek</h3>
                    <p class="text-gray-400 text-sm mt-2">Tidak ada proyek yang sesuai dengan kategori ini.</p>
                    <a href="{{ route('projects.public') }}" class="inline-block mt-5 px-6 py-2.5 rounded-full bg-[#83d401] text-[#34383b] text-xs font-bold uppercase tracking-wider hover:bg-white transition">
                        Lihat Semua Proyek
                    </a>
                </div>
            @else
                <div class="grid md:grid-cols-2 xl:grid-cols-3 gap-8">
                    @foreach($projects as $index => $project)
                        <div class="group overflow-hidden rounded-3xl border border-white/10 bg-[#3b3f42] hover:border-[#83d401] transition-all duration-500 flex flex-col justify-between">
                            <div>
                                <!-- Image Thumbnail -->
                                <div class="relative overflow-hidden h-72">
                                    <img 
                                        src="{{ $project->gambar ? asset('storage/' . $project->gambar) : 'https://picsum.photos/600/400?random=' . ($index + 30) }}" 
                                        alt="{{ $project->judul_proyek }}"
                                        class="w-full h-full object-cover group-hover:scale-110 transition duration-700"
                                    >
                                    <div class="absolute inset-0 bg-gradient-to-t from-[#3b3f42] via-black/20 to-transparent"></div>

                                    @if($project->service)
                                        <span class="absolute top-4 left-4 bg-[#34383b]/90 backdrop-blur-md border border-[#83d401]/40 text-[#83d401] text-[10px] uppercase font-bold tracking-widest px-3 py-1.5 rounded-full">
                                            {{ $project->service->nama_layanan }}
                                        </span>
                                    @endif
                                </div>

                                <!-- Card Content -->
                                <div class="p-8">
                                    <div class="flex items-center gap-2 text-xs text-gray-400 mb-2">
                                        @if($project->tahun)
                                            <span>{{ $project->tahun }}</span>
                                        @endif
                                        @if($project->tahun && $project->lokasi)
                                            <span>•</span>
                                        @endif
                                        @if($project->lokasi)
                                            <span>📍 {{ $project->lokasi }}</span>
                                        @endif
                                    </div>

                                    <h3 class="text-2xl font-bold text-white group-hover:text-[#83d401] transition">
                                        {{ $project->judul_proyek }}
                                    </h3>

                                    @if($project->segmen_klien)
                                        <p class="text-xs text-[#83d401] uppercase tracking-wider font-semibold mt-1">
                                            Klien: {{ $project->segmen_klien }}
                                        </p>
                                    @endif

                                    <p class="mt-4 text-gray-400 leading-relaxed text-sm">
                                        {{ $project->deskripsi ?? 'Pengerjaan media promosi presisi dan rapi oleh Doa Ibu Production.' }}
                                    </p>

                                    <!-- Tags -->
                                    @if($project->tags)
                                        <div class="flex flex-wrap gap-1.5 mt-5">
                                            @foreach(explode(',', $project->tags) as $tag)
                                                <span class="text-[11px] bg-white/5 border border-white/10 px-2.5 py-1 rounded-md text-gray-300">
                                                    #{{ trim($tag) }}
                                                </span>
                                            @endforeach
                                        </div>
                                    @endif
                                </div>
                            </div>

                            <!-- Footer Card Action -->
                            <div class="px-8 pb-8 pt-4 flex items-center justify-between border-t border-white/5 mt-auto">
                                <a href="https://wa.me/6285828666615?text=Halo%20Doa%20Ibu%20Production%2C%20saya%20tertarik%20dengan%20proyek%20{{ urlencode($project->judul_proyek) }}."
                                   target="_blank"
                                   class="text-xs uppercase font-bold tracking-widest text-[#83d401] hover:underline flex items-center gap-2">
                                    Konsultasi Serupa
                                    <span>→</span>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </section>

    <!-- ================= FOOTER ================= -->
    <footer class="bg-[#34383b] border-t border-white/10">
        <div class="max-w-7xl mx-auto px-6 py-20">
            <div class="grid lg:grid-cols-4 gap-16">
                <!-- Brand -->
                <div>
                    <h2 class="text-3xl font-black">
                        DOA IBU
                        <span class="text-[#83d401]">PRODUCTION</span>
                    </h2>
                    <p class="mt-8 text-gray-400 leading-8">
                        Creative Production House yang berfokus pada pembuatan media promosi, neonbox, huruf timbul, dan advertising berkualitas tinggi.
                    </p>
                </div>

                <!-- Navigation -->
                <div>
                    <h3 class="font-bold text-xl mb-8">Navigasi</h3>
                    <ul class="space-y-4 text-gray-400">
                        <li>
                            <a href="{{ route('landing') }}" class="hover:text-[#83d401] transition">Beranda</a>
                        </li>
                        <li>
                            <a href="{{ route('services.public') }}" class="hover:text-[#83d401] transition">Layanan</a>
                        </li>
                        <li>
                            <a href="{{ route('projects.public') }}" class="hover:text-[#83d401] transition">Proyek</a>
                        </li>
                        <li>
                            <a href="{{ route('galleries.public') }}" class="hover:text-[#83d401] transition">Galeri</a>
                        </li>
                        <li>
                            <a href="{{ route('articles.public') }}" class="hover:text-[#83d401] transition">Artikel</a>
                        </li>
                        <li>
                            <a href="{{ route('faq.public') }}" class="hover:text-[#83d401] transition">FAQ</a>
                        </li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div>
                    <h3 class="font-bold text-xl mb-8">Hubungi Kami</h3>
                    <div class="space-y-5 text-gray-400">
                        <p>📞 +62 858 2866 6615</p>
                        <p>✉ info@doaibuproduction.com</p>
                        <p>📍 Banjarmasin, Kalimantan Selatan</p>
                    </div>
                </div>

                <!-- Social Media -->
                <div>
                    <h3 class="font-bold text-xl mb-8">Ikuti Kami</h3>
                    <div class="flex gap-4">
                        <a href="#" class="w-12 h-12 rounded-full border border-white/20 flex items-center justify-center hover:bg-[#83d401] hover:text-[#34383b] duration-300">
                            IG
                        </a>
                        <a href="#" class="w-12 h-12 rounded-full border border-white/20 flex items-center justify-center hover:bg-[#83d401] hover:text-[#34383b] duration-300">
                            FB
                        </a>
                        <a href="#" class="w-12 h-12 rounded-full border border-white/20 flex items-center justify-center hover:bg-[#83d401] hover:text-[#34383b] duration-300">
                            TT
                        </a>
                    </div>
                </div>
            </div>

            <div class="border-t border-white/10 mt-20 pt-8 flex flex-col md:flex-row justify-between items-center gap-6">
                <p class="text-gray-500">
                    © 2026 Doa Ibu Production. All Rights Reserved.
                </p>
                <p class="text-gray-500">
                    Designed with ❤️ by Doa Ibu Production
                </p>
            </div>
        </div>
    </footer>

</body>
</html>