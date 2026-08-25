<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri Dokumentasi & Karya — Doa Ibu Production</title>

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
    </style>
</head>
<body class="text-white overflow-x-hidden">

    <!-- ================= NAVBAR ================= -->
    @include('components.navbar')

    <!-- ================= HEADER SECTION ================= -->
    <section class="pt-44 pb-20 section-pattern border-b border-white/10">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <span class="uppercase tracking-[6px] text-[#83d401] text-sm font-semibold">
                Dokumentasi & Visual
            </span>
            <h1 class="text-5xl lg:text-7xl font-black mt-4 uppercase">
                Galeri <span class="outline-text block mt-1">Karya Kami</span>
            </h1>
            <p class="max-w-2xl mx-auto mt-6 text-gray-300 text-lg leading-relaxed">
                Kumpulan dokumentasi proses produksi, workshop, instalasi lapangan, serta hasil karya neon box dan advertising.
            </p>

            <!-- Filter Buttons -->
            <div class="flex justify-center gap-3 mt-10">
                <a href="{{ route('galleries.public') }}" 
                   class="px-6 py-2.5 rounded-full text-xs font-bold uppercase tracking-widest transition {{ !request('filter') ? 'bg-[#83d401] text-[#34383b] shadow-lg shadow-[#83d401]/20' : 'border border-white/20 text-gray-300 hover:border-[#83d401] hover:text-[#83d401]' }}">
                    Semua
                </a>
                <a href="{{ route('galleries.public', ['filter' => 'foto']) }}" 
                   class="px-6 py-2.5 rounded-full text-xs font-bold uppercase tracking-widest transition {{ request('filter') == 'foto' ? 'bg-[#83d401] text-[#34383b] shadow-lg shadow-[#83d401]/20' : 'border border-white/20 text-gray-300 hover:border-[#83d401] hover:text-[#83d401]' }}">
                    Foto
                </a>
                <a href="{{ route('galleries.public', ['filter' => 'video']) }}" 
                   class="px-6 py-2.5 rounded-full text-xs font-bold uppercase tracking-widest transition {{ request('filter') == 'video' ? 'bg-[#83d401] text-[#34383b] shadow-lg shadow-[#83d401]/20' : 'border border-white/20 text-gray-300 hover:border-[#83d401] hover:text-[#83d401]' }}">
                    Video
                </a>
            </div>
        </div>
    </section>

    <!-- ================= DYNAMIC GALLERIES GRID ================= -->
    <section class="py-24 bg-[#34383b]">
        <div class="max-w-7xl mx-auto px-6">
            @if($galleries->isEmpty())
                <div class="text-center py-20 bg-[#3b3f42] rounded-3xl border border-white/10 p-8 max-w-xl mx-auto">
                    <span class="text-4xl mb-3 block">🖼️</span>
                    <h3 class="text-xl font-bold text-white">Belum Ada Item Galeri</h3>
                    <p class="text-gray-400 text-sm mt-2">Belum ada foto atau video yang ditambahkan pada kategori ini.</p>
                </div>
            @else
                <div class="grid sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                    @foreach($galleries as $index => $gallery)
                        <div class="group relative overflow-hidden rounded-2xl border border-white/10 bg-[#3b3f42] hover:border-[#83d401] transition-all duration-500 flex flex-col justify-between">
                            
                            <!-- Media Box -->
                            <div class="relative overflow-hidden aspect-square bg-black/40">
                                @if($gallery->jenis === 'video')
                                    <div class="w-full h-full relative">
                                        <img 
                                            src="{{ $gallery->file ? asset('storage/' . $gallery->file) : 'https://picsum.photos/600/600?random=' . ($index + 50) }}" 
                                            alt="{{ $gallery->judul ?? 'Video Dokumentasi' }}"
                                            class="w-full h-full object-cover group-hover:scale-110 transition duration-700 brightness-75"
                                        >

                                        <!-- Custom Themed Play Button -->
                                        @if($gallery->video_url)
                                            <a href="{{ $gallery->video_url }}" target="_blank" class="absolute inset-0 flex items-center justify-center bg-black/20 group-hover:bg-black/40 transition-all duration-300">
                                                <div class="relative flex items-center justify-center">
                                                    <!-- Ping Ring Glow Effect -->
                                                    <span class="animate-ping absolute inline-flex h-14 w-14 rounded-full bg-[#83d401] opacity-30"></span>
                                                    
                                                    <!-- Main Button Disc -->
                                                    <div class="relative w-14 h-14 rounded-full bg-[#34383b]/90 border-2 border-[#83d401] backdrop-blur-md flex items-center justify-center group-hover:bg-[#83d401] transition-all duration-300 shadow-[0_0_20px_rgba(131,212,1,0.4)] group-hover:scale-110">
                                                        <!-- Clean SVG Triangle Icon -->
                                                        <svg class="w-6 h-6 text-[#83d401] group-hover:text-[#34383b] translate-x-0.5 transition-colors duration-300 fill-current" viewBox="0 0 24 24">
                                                            <path d="M8 5v14l11-7z"/>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </a>
                                        @endif
                                    </div>
                                @else
                                    <img 
                                        src="{{ $gallery->file ? asset('storage/' . $gallery->file) : 'https://picsum.photos/600/600?random=' . ($index + 50) }}" 
                                        alt="{{ $gallery->judul ?? 'Dokumentasi Galeri' }}"
                                        class="w-full h-full object-cover group-hover:scale-110 transition duration-700"
                                    >
                                @endif

                                <!-- Category Badge -->
                                <span class="absolute top-3 left-3 bg-[#34383b]/90 backdrop-blur-md border border-white/10 text-[#83d401] text-[10px] uppercase font-bold tracking-widest px-2.5 py-1 rounded-full">
                                    {{ $gallery->jenis }}
                                </span>
                            </div>

                            <!-- Caption / Meta -->
                            <div class="p-5">
                                <h4 class="font-bold text-white text-base group-hover:text-[#83d401] transition line-clamp-1">
                                    {{ $gallery->judul ?? ($gallery->service->nama_layanan ?? 'Dokumentasi Produksi') }}
                                </h4>

                                <div class="flex items-center justify-between text-xs text-gray-400 mt-2">
                                    @if($gallery->project)
                                        <span class="truncate max-w-[150px]">📁 {{ $gallery->project->judul_proyek }}</span>
                                    @elseif($gallery->service)
                                        <span class="truncate max-w-[150px]">🏷️ {{ $gallery->service->nama_layanan }}</span>
                                    @else
                                        <span>Doa Ibu Production</span>
                                    @endif

                                    @if($gallery->video_url)
                                        <a href="{{ $gallery->video_url }}" target="_blank" class="text-[#83d401] hover:underline font-semibold flex items-center gap-1">
                                            Putar Video ↗
                                        </a>
                                    @endif
                                </div>
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
                        Creative Production House yang berfokus pada media promosi, neonbox, huruf timbul, dan advertising berkualitas tinggi.
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