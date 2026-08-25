<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artikel & Wawasan — Doa Ibu Production</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">

    <style>
        body { background: #34383b; }
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

    <!-- Header Section -->
    <section class="pt-44 pb-20 section-pattern border-b border-white/10">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <span class="uppercase tracking-[6px] text-[#83d401] text-sm font-semibold">Blog & Update</span>
            <h1 class="text-5xl lg:text-7xl font-black mt-4 uppercase">
                Artikel & <span class="outline-text block mt-1">Edukasi</span>
            </h1>
            <p class="max-w-2xl mx-auto mt-6 text-gray-300 text-lg leading-relaxed">
                Tips memilih neon box, tren media promosi luar ruang, panduan branding, dan informasi terbaru seputar industri kreatif.
            </p>

            <!-- Filter & Search Form -->
            <form action="{{ route('articles.public') }}" method="GET" class="max-w-2xl mx-auto mt-10 flex gap-3">
                <input 
                    type="text" 
                    name="search" 
                    value="{{ request('search') }}" 
                    placeholder="Cari artikel..." 
                    class="flex-1 bg-[#3b3f42] border border-white/10 rounded-full px-6 py-3 text-sm focus:outline-none focus:border-[#83d401] text-white"
                >
                <button type="submit" class="bg-[#83d401] text-[#34383b] font-bold px-8 py-3 rounded-full text-xs uppercase tracking-wider hover:bg-white transition">
                    Cari
                </button>
            </form>
        </div>
    </section>

    <!-- Article Listing Grid -->
    <section class="py-24 bg-[#34383b]">
        <div class="max-w-7xl mx-auto px-6">
            @if($articles->isEmpty())
                <div class="text-center py-20">
                    <p class="text-gray-400 text-xl">Belum ada artikel yang ditemukan.</p>
                </div>
            @else
                <div class="grid md:grid-cols-2 xl:grid-cols-3 gap-8">
                    @foreach($articles as $index => $article)
                        <div class="group overflow-hidden rounded-3xl border border-white/10 bg-[#3b3f42] hover:border-[#83d401] transition-all duration-500 flex flex-col justify-between">
                            <div>
                                <div class="relative overflow-hidden h-64">
                                    <img 
                                        src="{{ $article->gambar ? asset('storage/' . $article->gambar) : 'https://picsum.photos/600/400?random=' . ($index + 10) }}" 
                                        alt="{{ $article->judul }}" 
                                        class="w-full h-full object-cover group-hover:scale-110 transition duration-700"
                                    >
                                    <div class="absolute inset-0 bg-gradient-to-t from-[#3b3f42] via-black/20 to-transparent"></div>

                                    @if($article->service)
                                        <span class="absolute top-4 left-4 bg-[#34383b]/90 backdrop-blur-md border border-[#83d401]/40 text-[#83d401] text-[10px] uppercase font-bold tracking-widest px-3 py-1.5 rounded-full">
                                            {{ $article->service->nama_layanan }}
                                        </span>
                                    @endif
                                </div>

                                <div class="p-8">
                                    <div class="flex items-center gap-2 text-xs text-gray-400 mb-3">
                                        <span>📅 {{ $article->published_at ? \Carbon\Carbon::parse($article->published_at)->translatedFormat('d M Y') : 'Terbaru' }}</span>
                                    </div>

                                    <h3 class="text-2xl font-bold text-white group-hover:text-[#83d401] transition line-clamp-2">
                                        <a href="{{ route('articles.show', $article->slug) }}">
                                            {{ $article->judul }}
                                        </a>
                                    </h3>

                                    <p class="mt-4 text-gray-400 text-sm leading-relaxed line-clamp-3">
                                        {{ $article->excerpt ?? Str::limit(strip_tags($article->konten), 120, '...') }}
                                    </p>
                                </div>
                            </div>

                            <div class="px-8 pb-8 pt-4 flex items-center justify-between border-t border-white/5 mt-auto">
                                <a href="{{ route('articles.show', $article->slug) }}" class="text-xs uppercase font-bold tracking-widest text-[#83d401] hover:underline flex items-center gap-2">
                                    Baca Selengkapnya
                                    <span>→</span>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Pagination -->
                <div class="mt-16 flex justify-center">
                    {{ $articles->links() }}
                </div>
            @endif
        </div>
    </section>

    
<!-- ===================================
FOOTER
=================================== -->

<footer class="bg-[#34383b] border-t border-white/10">

    <div class="max-w-7xl mx-auto px-6 py-20">

        <div class="grid lg:grid-cols-4 gap-16">

            <!-- Brand -->

            <div>

                <h2 class="text-3xl font-black">

                    DOA IBU

                    <span class="text-[#83d401]">

                        PRODUCTION

                    </span>

                </h2>

                <p class="mt-8 text-gray-400 leading-8">

                    Creative Production House yang berfokus pada
                    branding, advertising.
                </p>

            </div>

            <!-- Navigation -->

            <div>

                <h3 class="font-bold text-xl mb-8">

                    Navigasi

                </h3>

                <ul class="space-y-4 text-gray-400">

                    <li>
                        <a href="#" class="hover:text-[#83d401]">
                            Beranda
                        </a>
                    </li>

                    <li>
                        <a href="#about" class="hover:text-[#83d401]">
                            Tentang
                        </a>
                    </li>

                    <li>
                        <a href="#services" class="hover:text-[#83d401]">
                            Layanan
                        </a>
                    </li>

                    <li>
                        <a href="/gallery" class="hover:text-[#83d401]">
                            Gallery
                        </a>
                    </li>

                    <li>
                        <a href="#faq" class="hover:text-[#83d401]">
                            FAQ
                        </a>
                    </li>

                </ul>

            </div>

            <!-- Contact -->

            <div>

                <h3 class="font-bold text-xl mb-8">

                    Hubungi Kami

                </h3>

                <div class="space-y-5 text-gray-400">

                    <p>
                        📞 +62 858 2866 6615
                    </p>

                    <p>
                        ✉ info@doaibuproduction.com
                    </p>

                    <p>
                        📍 Banjarmasin
                    </p>

                </div>

            </div>

            <!-- Social -->

            <div>

                <h3 class="font-bold text-xl mb-8">

                    Ikuti Kami

                </h3>

                <div class="flex gap-4">

                    <a href="#"

                    class="w-12 h-12 rounded-full border border-white/20 flex items-center justify-center hover:bg-[#83d401] hover:text-[#34383b] duration-300">

                        IG

                    </a>

                    <a href="#"

                    class="w-12 h-12 rounded-full border border-white/20 flex items-center justify-center hover:bg-[#83d401] hover:text-[#34383b] duration-300">

                        FB

                    </a>

                    <a href="#"

                    class="w-12 h-12 rounded-full border border-white/20 flex items-center justify-center hover:bg-[#83d401] hover:text-[#34383b] duration-300">

                        TT

                    </a>

                </div>

            </div>

        </div>

        <div
            class="border-t border-white/10 mt-20 pt-8 flex flex-col md:flex-row justify-between items-center gap-6">

            <p class="text-gray-500">

                © 2026 Doa Ibu Production.
                All Rights Reserved.

            </p>

            <p class="text-gray-500">

                Designed with ❤️ by Doa Ibu Production

            </p>

        </div>

    </div>

</footer>

</body>
</html>