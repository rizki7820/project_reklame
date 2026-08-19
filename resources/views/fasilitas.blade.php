<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fasilitas & Workshop — Doa Ibu Production</title>

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
        .section-pattern > * { position: relative; z-index: 2; }
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
        .outline-text { color: transparent; -webkit-text-stroke: 2px #83d401; }
    </style>
</head>
<body class="text-white overflow-x-hidden">

   <nav
    class="fixed top-0 left-0 w-full z-50 transition-all duration-300 backdrop-blur-md bg-[#34383b]/85 border-b border-white/10"
    id="navbar"
>
    <div class="max-w-screen-2xl mx-auto px-6 py-4 flex items-center justify-between">

        <!-- ================= LOGO ================= -->
        <a href="{{ route('landing') }}" class="flex items-center gap-3 text-2xl font-black tracking-wider">
            <img
                src="/logo_dip.png"
                alt="Doa Ibu Production"
                class="h-14 w-auto lg:h-16 object-contain flex-shrink-0"
            >

            <div class="relative w-fit">
                <!-- DOA IBU -->
                <div class="relative inline-block z-10">
                    <span
                        class="font-['Anton'] text-sm lg:text-xl text-white"
                        style="-webkit-text-stroke: 8px #83d401; paint-order: stroke fill;"
                    >
                        doa ibu
                    </span>
                    <span
                        class="absolute inset-0 font-['Anton'] text-sm lg:text-xl text-white mt-2 lg:mt-0"
                        style="-webkit-text-stroke: 4px #000; paint-order: stroke fill;"
                    >
                        doa ibu
                    </span>
                </div>

                <!-- PRODUCTION -->
                <div class="relative block z-10 -mt-3">
                    <span
                        class="font-['Anton'] text-sm lg:text-xl text-white"
                        style="-webkit-text-stroke: 8px #83d401; paint-order: stroke fill;"
                    >
                        production
                    </span>
                    <span
                        class="absolute inset-0 font-['Anton'] text-sm lg:text-xl mt-2 text-white"
                        style="-webkit-text-stroke: 4px #000; paint-order: stroke fill;"
                    >
                        production
                    </span>
                </div>

                <!-- ADVERTISING -->
                <div class="absolute z-20 left-[38%] top-[70%] lg:top-[80%] -rotate-[8deg] whitespace-nowrap">
                    <span
                        class="font-['Kaushan_Script'] text-sm lg:text-xl text-white"
                        style="-webkit-text-stroke: 8px #83d401; paint-order: stroke fill;"
                    >
                        Advertising
                    </span>
                    <span
                        class="absolute inset-0 font-['Kaushan_Script'] text-sm lg:text-xl mt-2 text-white"
                        style="-webkit-text-stroke: 4px #000; paint-order: stroke fill;"
                    >
                        Advertising
                    </span>
                </div>

                <!-- BANJARMASIN -->
                <div class="absolute z-20 left-[47%] top-[90%] lg:top-[120%] -rotate-[8deg] whitespace-nowrap">
                    <span
                        class="font-['Kaushan_Script'] text-sm lg:text-xl text-white"
                        style="-webkit-text-stroke: 8px #83d401; paint-order: stroke fill;"
                    >
                        Banjarmasin
                    </span>
                    <span
                        class="absolute inset-0 font-['Kaushan_Script'] text-sm lg:text-xl mt-2 text-white"
                        style="-webkit-text-stroke: 4px #000; paint-order: stroke fill;"
                    >
                        Banjarmasin
                    </span>
                </div>
            </div>
        </a>

        <!-- ================= NAVIGATION LINKS ================= -->
        <div class="hidden lg:flex items-center gap-8 text-xs font-bold uppercase tracking-widest text-gray-300">
            <!-- Beranda -->
            <a 
                href="{{ route('landing') }}" 
                class="transition-colors {{ Request::is('/') ? 'text-[#83d401]' : 'hover:text-[#83d401]' }}"
            >
                Beranda
            </a>

            <!-- Layanan -->
            <a 
                href="{{ route('services.public') }}" 
                class="transition-colors {{ Request::is('services*') || Request::is('layanan*') ? 'text-[#83d401]' : 'hover:text-[#83d401]' }}"
            >
                Layanan
            </a>

            <!-- Proyek -->
            <a 
                href="{{ route('projects.public') }}" 
                class="transition-colors {{ Request::is('proyek*') ? 'text-[#83d401]' : 'hover:text-[#83d401]' }}"
            >
                Proyek
            </a>

            <!-- Galeri -->
            <a 
                href="{{ route('galleries.public') }}" 
                class="transition-colors {{ Request::is('galeri*') || Request::is('gallery*') ? 'text-[#83d401]' : 'hover:text-[#83d401]' }}"
            >
                Galeri
            </a>

            <!-- Artikel -->
            <a 
                href="{{ route('articles.public') }}" 
                class="transition-colors {{ Request::is('artikel*') ? 'text-[#83d401]' : 'hover:text-[#83d401]' }}"
            >
                Artikel
            </a>

            <!-- Dropdown Perusahaan -->
            <div class="group relative">
                <button class="flex items-center gap-1.5 uppercase font-bold text-xs tracking-widest transition-colors {{ Request::is('tentang-kami*') || Request::is('fasilitas*') || Request::is('faq*') ? 'text-[#83d401]' : 'text-gray-300 hover:text-[#83d401]' }} py-2">
                    Perusahaan
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5 transition-transform duration-300 group-hover:rotate-180" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>

                <!-- Sub-menu Dropdown -->
                <div class="invisible opacity-0 translate-y-2 group-hover:visible group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-200 absolute left-0 top-full min-w-[200px] bg-[#3b3f42] border border-white/10 rounded-2xl p-2 shadow-2xl backdrop-blur-lg z-50">
                    <a 
                        href="{{ route('about.public') }}" 
                        class="block px-4 py-2.5 rounded-xl text-xs font-semibold uppercase tracking-wider transition {{ Request::is('tentang-kami*') ? 'bg-[#83d401] text-[#34383b]' : 'text-gray-300 hover:bg-[#83d401] hover:text-[#34383b]' }}"
                    >
                        Tentang Kami
                    </a>
                    <a 
                        href="{{ route('facilities.public') }}" 
                        class="block px-4 py-2.5 rounded-xl text-xs font-semibold uppercase tracking-wider transition {{ Request::is('fasilitas*') ? 'bg-[#83d401] text-[#34383b]' : 'text-gray-300 hover:bg-[#83d401] hover:text-[#34383b]' }}"
                    >
                        Fasilitas
                    </a>
                    <a 
                        href="{{ route('faq.public') }}" 
                        class="block px-4 py-2.5 rounded-xl text-xs font-semibold uppercase tracking-wider transition {{ Request::is('faq*') ? 'bg-[#83d401] text-[#34383b]' : 'text-gray-300 hover:bg-[#83d401] hover:text-[#34383b]' }}"
                    >
                        FAQ
                    </a>
                </div>
            </div>

            <!-- Kontak -->
            <a 
                href="{{ route('contact.public') }}" 
                class="transition-colors {{ Request::is('kontak*') ? 'text-[#83d401]' : 'hover:text-[#83d401]' }}"
            >
                Kontak
            </a>
        </div>

        <!-- ================= ACTION BUTTON ================= -->
        <div class="flex items-center gap-3">
            <a
                href="https://wa.me/6285828666615?text=Halo%20Doa%20Ibu%20Production%2C%20saya%20tertarik%20untuk%20konsultasi%20pembuatan%20media%20promosi."
                target="_blank"
                class="border border-[#83d401] text-[#83d401] px-5 py-2.5 rounded-full text-xs font-bold uppercase tracking-widest hover:bg-[#83d401] hover:text-[#34383b] transition duration-300"
            >
                Hubungi Kami
            </a>
        </div>

    </div>
</nav>

    <!-- ================= HEADER SECTION ================= -->
    <section class="pt-44 pb-20 section-pattern border-b border-white/10">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <span class="uppercase tracking-[6px] text-[#83d401] text-sm font-semibold">Infrastruktur & Mesin</span>
            <h1 class="text-5xl lg:text-7xl font-black mt-4 uppercase">
                Fasilitas <span class="outline-text block mt-1">Produksi</span>
            </h1>
            <p class="max-w-2xl mx-auto mt-6 text-gray-300 text-lg leading-relaxed">
                Didukung oleh mesin modern, workshop terstandarisasi, dan tenaga teknisi berpengalaman untuk memastikan kepresisian setiap detail produk.
            </p>
        </div>
    </section>

    <!-- ================= FACILITIES GRID ================= -->
    <section class="py-24 bg-[#34383b]">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Facility 1 -->
                <div class="p-8 rounded-3xl bg-[#3b3f42] border border-white/10 hover:border-[#83d401] transition duration-300">
                    <div class="w-14 h-14 rounded-2xl bg-[#83d401]/10 border border-[#83d401] flex items-center justify-center text-2xl text-[#83d401]">
                        ⚡
                    </div>
                    <h3 class="text-2xl font-bold text-white mt-6">Laser Cutting & CNC Router</h3>
                    <p class="text-gray-400 text-sm mt-3 leading-relaxed">
                        Mesin laser berpresisi tinggi untuk memotong akrilik, kayu, MDF, dan ACP dengan tepi potongan yang halus dan akurat sesuai pola desain CAD.
                    </p>
                </div>

                <!-- Facility 2 -->
                <div class="p-8 rounded-3xl bg-[#3b3f42] border border-white/10 hover:border-[#83d401] transition duration-300">
                    <div class="w-14 h-14 rounded-2xl bg-[#83d401]/10 border border-[#83d401] flex items-center justify-center text-2xl text-[#83d401]">
                        🛠️
                    </div>
                    <h3 class="text-2xl font-bold text-white mt-6">Bending & Welding Station</h3>
                    <p class="text-gray-400 text-sm mt-3 leading-relaxed">
                        Peralatan bending profil huruf timbul stainless/galvanis serta pengelasan rangka besi hollow tebal anti karat untuk pylon dan billboard.
                    </p>
                </div>

                <!-- Facility 3 -->
                <div class="p-8 rounded-3xl bg-[#3b3f42] border border-white/10 hover:border-[#83d401] transition duration-300">
                    <div class="w-14 h-14 rounded-2xl bg-[#83d401]/10 border border-[#83d401] flex items-center justify-center text-2xl text-[#83d401]">
                        💡
                    </div>
                    <h3 class="text-2xl font-bold text-white mt-6">Assembly & LED Lab</h3>
                    <p class="text-gray-400 text-sm mt-3 leading-relaxed">
                        Ruang perakitan modul LED Samsung/Epistar tahan air (IP68) dan pengetesan beban trafo untuk menjamin keamanan kelistrikan sebelum dikirim.
                    </p>
                </div>

                <!-- Facility 4 -->
                <div class="p-8 rounded-3xl bg-[#3b3f42] border border-white/10 hover:border-[#83d401] transition duration-300">
                    <div class="w-14 h-14 rounded-2xl bg-[#83d401]/10 border border-[#83d401] flex items-center justify-center text-2xl text-[#83d401]">
                        🖨️
                    </div>
                    <h3 class="text-2xl font-bold text-white mt-6">Large Format Digital Print</h3>
                    <p class="text-gray-400 text-sm mt-3 leading-relaxed">
                        Mesin cetak banner dan stiker vinyl UV tahan cuaca ekstrem untuk kebutuhan backlite neon box toko, car branding, dan spanduk event.
                    </p>
                </div>

                <!-- Facility 5 -->
                <div class="p-8 rounded-3xl bg-[#3b3f42] border border-white/10 hover:border-[#83d401] transition duration-300">
                    <div class="w-14 h-14 rounded-2xl bg-[#83d401]/10 border border-[#83d401] flex items-center justify-center text-2xl text-[#83d401]">
                        🚚
                    </div>
                    <h3 class="text-2xl font-bold text-white mt-6">Armada Transportasi</h3>
                    <p class="text-gray-400 text-sm mt-3 leading-relaxed">
                        Kendaraan operasional logistik siap mengantar dan memobilisasi perlengkapan instalasi reklame hingga ke area luar kota.
                    </p>
                </div>

                <!-- Facility 6 -->
                <div class="p-8 rounded-3xl bg-[#3b3f42] border border-white/10 hover:border-[#83d401] transition duration-300">
                    <div class="w-14 h-14 rounded-2xl bg-[#83d401]/10 border border-[#83d401] flex items-center justify-center text-2xl text-[#83d401]">
                        🦺
                    </div>
                    <h3 class="text-2xl font-bold text-white mt-6">Safety Installation Tools</h3>
                    <p class="text-gray-400 text-sm mt-3 leading-relaxed">
                        Perlengkapan keselamatan kerja (K3), scaffolding, dan tali suspensi rigging untuk pemasangan reklame di gedung bertingkat tinggi.
                    </p>
                </div>
            </div>
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