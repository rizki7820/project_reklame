<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doa Ibu Production</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">

    <style>
        body{
            background:#34383b;
        }

        .section-pattern{
            position: relative;
            overflow: hidden;
            background:#34383b;
        }

        .section-pattern>*{
            position:relative;
            z-index:2;
        }

        .section-pattern::before{
            content:"";
            position:absolute;
            top:0;
            left:0;
            width:100%;
            height:90px;
            background:url("top.png") center top/cover no-repeat;
            z-index:1;
        }

        .section-pattern::after{
            content:"";
            position:absolute;
            bottom:0;
            left:0;
            width:100%;
            height:90px;
            background:url("bot.png") center bottom/cover no-repeat;
            z-index:1;
        }

        .outline-text{
            color: transparent;
            -webkit-text-stroke: 2px #83d401;
        }

        .hero-gradient{
            background:
                radial-gradient(circle at top left,
                rgba(229,254,83,.15),
                transparent 35%);
        }

        .marquee{
        display:flex;
        width:max-content;
        animation:marquee 25s linear infinite;
        }

        .marquee span{

            font-size:60px;
            font-weight:900;

            color:transparent;

            -webkit-text-stroke:1px #83d401;

            letter-spacing:6px;

        }

    @keyframes marquee{

        from{
            transform:translateX(0);
        }

        to{
            transform:translateX(-50%);
        }

    }
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

    <!-- Hero -->
    <!-- ===================================
HERO
=================================== -->

<!-- ===================================
HERO
=================================== -->

<section id="home" class="relative h-screen w-full bg-[#34383b] overflow-hidden">


        <!-- HERO -->
        <div class="h-full grid grid-cols-1 lg:grid-cols-12 gap-6 px-6 lg:px-16 ">

           <!-- LEFT HERO -->

<div class="lg:col-span-4 h-full flex items-center ">
<div class="pt-28 w-full flex flex-col h-full">

    <!-- Heading -->

    <div class="pb-10">

        <h1 class="text-[68px] leading-[60px] font-bold italic uppercase outline-text block mt-6">
            NEONBOX
        </h1>

        <h2 class="text-[54px] leading-[60px] font-black italic uppercase mt-1">
            & SIGNAGE
        </h2>

    </div>

    <!-- Checklist -->

    <div class="mt-10 space-y-5">

        <div class="flex items-center gap-4">

            <div
                class="w-6 h-6
                border-2 border-[#83d401]
                flex items-center justify-center text-[#83d401]">

                ✓

            </div>

            <span class="text-2xl font-medium">

                <span class="text-[#83d401]">Slim</span> Light Box

            </span>

        </div>

        <div class="flex items-center gap-4">

            <div
                class="w-6 h-6
                border-2 border-[#83d401]
                flex items-center justify-center text-[#83d401]">

                ✓

            </div>

            <span class="text-2xl font-medium">

                Huruf <span class="text-[#83d401]">Timbul</span>

            </span>

        </div>

        <div class="flex items-center gap-4">

            <div
                class="w-6 h-6
                border-2 border-[#83d401]
                flex items-center justify-center text-[#83d401]">

                ✓

            </div>

            <span class="text-2xl font-medium">

                Running Text <span class="text-[#83d401]">LED</span>

            </span>

        </div>

        <div class="flex items-center gap-4">

            <div
                class="w-6 h-6
                border-2 border-[#83d401]
                flex items-center justify-center text-[#83d401]">

                ✓

            </div>

            <span class="text-2xl font-medium">

                Papan <span class="text-[#83d401]">Nama & Logo</span>

            </span>

        </div>

        <div class="flex items-center gap-4">

           <div
                class="w-6 h-6
                border-2 border-[#83d401]
                flex items-center justify-center text-[#83d401]">

                ✓

            </div>

            <span class="text-2xl font-medium">

                Custom <span class="text-[#83d401]">Design</span>

            </span>

        </div>

    </div>

    <!-- Spacer -->

    <div class="flex-1"></div>

    <!-- Button -->

    <button class="mt-12 w-full border-2 border-[#83d401] py-5 uppercase tracking-[2px] font-bold text-lg hover:bg-[#83d401] hover:text-[#34383b] transition mb-10">
        ORDER SEKARANG
    </button>
</div>
</div>

            <!-- ===========================
            RIGHT IMAGE
            =========================== -->
    <!-- RIGHT IMAGE -->
        <div class="lg:col-span-8 relative h-full lg:-mr-16">

            <img
                src="hero.png"
                alt="Doa Ibu Production"
                class="absolute inset-0 w-full h-full object-cover object-center">

            <div
                class="absolute inset-0
                bg-gradient-to-r
                from-[#34383b]
                via-[#34383b]/60
                to-transparent
                w-1/2 h-full
                pointer-events-none">
            </div>

        </div>


        </div>

        <!-- ===========================
        SERVICE
        =========================== -->

        <div
            class="mt-6
            border-2
            border-[#83d401]
            rounded-[30px]
            p-10">

            <h2
                class="text-3xl
                font-black
                text-[#83d401]">

                MELAYANI BERBAGAI KEBUTUHAN

            </h2>

            <div
                class="grid
                grid-cols-3
                gap-10
                mt-8">

                <div class="space-y-4">

                    <p>✓ Huruf Timbul</p>

                    <p>✓ Neon Box</p>

                    <p>✓ Billboard</p>

                    <p>✓ Papan Nama</p>

                </div>

                <div class="space-y-4">

                    <p>✓ ACP</p>

                    <p>✓ Branding Interior</p>

                    <p>✓ Running Text</p>

                    <p>✓ Display Acrylic</p>

                </div>

                <div class="space-y-4">

                    <p>✓ Letter Stainless</p>

                    <p>✓ Safety Sign</p>

                    <p>✓ Custom Display</p>

                    <p>✓ Dll.</p>

                </div>

            </div>

        </div>

        <!-- ===========================
        BOTTOM
        =========================== -->

        <div
            class="grid
            grid-cols-12
            gap-6
            mt-6">

            <!-- WA -->

            <div
                class="col-span-4
                border-2
                border-[#83d401]
                rounded-[30px]
                p-8">

                <p
                    class="text-[#83d401]
                    uppercase">

                    WhatsApp

                </p>

                <h2
                    class="text-4xl
                    font-black
                    mt-3">

                    0858-2866-6615

                </h2>

            </div>

            <!-- BENEFIT -->

            <div
                class="col-span-8
                border-2
                border-[#83d401]
                rounded-[30px]
                p-8">

                <div
                    class="grid
                    grid-cols-4
                    text-center">

                    <div>

                        <h3 class="font-bold">

                            Amanah

                        </h3>

                    </div>

                    <div>

                        <h3 class="font-bold">

                            Profesional

                        </h3>

                    </div>

                    <div>

                        <h3 class="font-bold">

                            Berkualitas

                        </h3>

                    </div>

                    <div>

                        <h3 class="font-bold">

                            Garansi

                        </h3>

                    </div>

                </div>

            </div>

        </div>



</section>

    <!-- =======================================
ABOUT
======================================== -->
<section id="about" class="py-28 section-pattern">

    <div class="max-w-7xl mx-auto px-6 lg:px-16">

        <div class="grid lg:grid-cols-2 gap-20 items-center">

            <!-- Left -->

            <div>

                <p class="uppercase tracking-[6px] text-[#83d401] mb-4">
                    About Us
                </p>

                <h2 class="text-5xl lg:text-6xl font-black leading-tight">

                    Kami Membuat

                    <span class="outline-text block mt-2">
                        Brand Lebih Hidup
                    </span>

                </h2>

            </div>

            <!-- Right -->

            <div>

                <p class="text-gray-300 text-lg leading-9">

                    Doa Ibu Production merupakan creative production
                    yang berfokus pada pembuatan media promosi,
                    branding, advertising, dokumentasi, social media,
                    hingga digital campaign.

                    Kami percaya bahwa sebuah visual bukan hanya
                    sekadar indah, tetapi harus mampu menyampaikan
                    pesan dan memberikan dampak terhadap bisnis Anda.

                </p>

                <div class="grid grid-cols-2 gap-8 mt-12">

                    <div>

                        <h3 class="text-5xl font-black text-[#83d401] counter"
                            data-target="150">
                            0
                        </h3>

                        <p class="mt-3 text-gray-400 uppercase tracking-widest">
                            Project
                        </p>

                    </div>

                    <div>

                        <h3 class="text-5xl font-black text-[#83d401] counter"
                            data-target="95">
                            0
                        </h3>

                        <p class="mt-3 text-gray-400 uppercase tracking-widest">
                            Clients
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

    </section>

    <!-- =======================================
    MARQUEE
    ======================================== -->

    <section class="overflow-hidden py-10 bg-[#34383b] border-y border-white/10">

        <div class="marquee whitespace-nowrap">

            <span>
                BRANDING • ADVERTISING • MARKETING • NEON PRODUCTION •
                BRANDING • ADVERTISING • MARKETING • NEON PRODUCTION •
                BRANDING • ADVERTISING • MARKETING • NEON PRODUCTION •
            </span>

        </div>

    </section>

    <!-- ================================
SERVICES
================================ -->
<section id="services" class="section-pattern py-28">

    <div class="max-w-7xl mx-auto px-6">

        <!-- Heading -->
        <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-8 mb-16">

            <div>

                <span class="uppercase tracking-[6px] text-[#83d401] text-sm font-semibold">
                    Layanan Kami
                </span>

                <h2 class="text-xl lg:text-2xl font-black mt-4 leading-tight">
                    Creative
                    <span class="outline-text block">
                        Services
                    </span>
                </h2>

            </div>

            <p class="max-w-xl text-gray-400 leading-8">
                Kami menghadirkan layanan kreatif yang membantu bisnis tampil lebih
                profesional melalui visual, branding, media digital, hingga
                pengembangan website.
            </p>

        </div>

        <!-- Grid -->
        <div class="grid md:grid-cols-2 xl:grid-cols-3 gap-8">

            <!-- CARD -->
            <div class="group overflow-hidden rounded-3xl border border-white/10 bg-[#3b3f42] hover:border-[#83d401] transition-all duration-500">

                <div class="relative overflow-hidden h-72">

                    <img
                        src="https://picsum.photos/3010/1080"
                        class="w-full h-full object-cover group-hover:scale-110 transition duration-700"
                        alt="Branding">

                    <div class="absolute inset-0 bg-gradient-to-t from-[#34383b] via-black/20 to-transparent"></div>

                </div>

                <div class="p-8">

                    <span class="text-[#83d401] tracking-[4px] uppercase text-xs">
                        01
                    </span>

                    <h3 class="text-3xl font-bold mt-3 group-hover:text-[#83d401] transition">
                        Branding Identity
                    </h3>

                    <p class="mt-5 text-gray-400 leading-8">
                        Logo, visual identity, brand guideline,
                        company profile, hingga kebutuhan branding perusahaan.
                    </p>

                    <div class="mt-8 flex justify-between items-center">

                        <span class="text-sm uppercase tracking-widest text-gray-500">
                            Explore
                        </span>

                        <div class="w-14 h-14 rounded-full border border-white/20 flex items-center justify-center group-hover:bg-[#83d401] group-hover:text-[#34383b] group-hover:border-[#83d401] transition-all duration-300">

                            →

                        </div>

                    </div>

                </div>

            </div>

            <!-- CARD -->
            <div class="group overflow-hidden rounded-3xl border border-white/10 bg-[#3b3f42] hover:border-[#83d401] transition-all duration-500">

                <div class="relative overflow-hidden h-72">

                    <img
                        src="https://picsum.photos/3010/1080"
                        class="w-full h-full object-cover group-hover:scale-110 transition duration-700"
                        alt="Photography">

                    <div class="absolute inset-0 bg-gradient-to-t from-[#34383b] via-black/20 to-transparent"></div>

                </div>

                <div class="p-8">

                    <span class="text-[#83d401] tracking-[4px] uppercase text-xs">
                        02
                    </span>

                    <h3 class="text-3xl font-bold mt-3 group-hover:text-[#83d401] transition">
                        Neon Box & Pylon Sign
                    </h3>

                    <p class="mt-5 text-gray-400 leading-8">
                        Dokumentasi event, foto produk,
                        company profile, cinematic video hingga aerial drone.
                    </p>

                    <div class="mt-8 flex justify-between items-center">

                        <span class="text-sm uppercase tracking-widest text-gray-500">
                            Explore
                        </span>

                        <div class="w-14 h-14 rounded-full border border-white/20 flex items-center justify-center group-hover:bg-[#83d401] group-hover:text-[#34383b] group-hover:border-[#83d401] transition-all">

                            →

                        </div>

                    </div>

                </div>

            </div>

            <!-- CARD -->
            <div class="group overflow-hidden rounded-3xl border border-white/10 bg-[#3b3f42] hover:border-[#83d401] transition-all duration-500">

                <div class="relative overflow-hidden h-72">

                    <img
                        src="https://picsum.photos/3010/1080"
                        class="w-full h-full object-cover group-hover:scale-110 transition duration-700"
                        alt="Social Media">

                    <div class="absolute inset-0 bg-gradient-to-t from-[#34383b] via-black/20 to-transparent"></div>

                </div>

                <div class="p-8">

                    <span class="text-[#83d401] tracking-[4px] uppercase text-xs">
                        03
                    </span>

                    <h3 class="text-3xl font-bold mt-3 group-hover:text-[#83d401] transition">
                        Social Media Management
                    </h3>

                    <p class="mt-5 text-gray-400 leading-8">
                        Content planning, desain feed,
                        copywriting, scheduling dan monthly report.
                    </p>

                    <div class="mt-8 flex justify-between items-center">

                        <span class="text-sm uppercase tracking-widest text-gray-500">
                            Explore
                        </span>

                        <div class="w-14 h-14 rounded-full border border-white/20 flex items-center justify-center group-hover:bg-[#83d401] group-hover:text-[#34383b] group-hover:border-[#83d401] transition">

                            →

                        </div>

                    </div>

                </div>

            </div>

            <!-- CARD -->
            <div class="group overflow-hidden rounded-3xl border border-white/10 bg-[#3b3f42] hover:border-[#83d401] transition-all duration-500">

                <div class="relative overflow-hidden h-72">

                    <img
                        src="https://picsum.photos/3010/1080"
                        class="w-full h-full object-cover group-hover:scale-110 transition duration-700"
                        alt="Advertising">

                    <div class="absolute inset-0 bg-gradient-to-t from-[#34383b] via-black/20 to-transparent"></div>

                </div>

                <div class="p-8">

                    <span class="text-[#83d401] tracking-[4px] uppercase text-xs">
                        04
                    </span>

                    <h3 class="text-3xl font-bold mt-3 group-hover:text-[#83d401] transition">
                        Digital Advertising
                    </h3>

                    <p class="mt-5 text-gray-400 leading-8">
                        Google Ads, Meta Ads, TikTok Ads,
                        campaign strategy dan optimasi iklan.
                    </p>

                    <div class="mt-8 flex justify-between items-center">

                        <span class="text-sm uppercase tracking-widest text-gray-500">
                            Explore
                        </span>

                        <div class="w-14 h-14 rounded-full border border-white/20 flex items-center justify-center group-hover:bg-[#83d401] group-hover:text-[#34383b] group-hover:border-[#83d401] transition">

                            →

                        </div>

                    </div>

                </div>

            </div>

            <!-- CARD -->
            <div class="group overflow-hidden rounded-3xl border border-white/10 bg-[#3b3f42] hover:border-[#83d401] transition-all duration-500">

                <div class="relative overflow-hidden h-72">

                    <img
                        src="https://picsum.photos/3010/1080"
                        class="w-full h-full object-cover group-hover:scale-110 transition duration-700"
                        alt="Event">

                    <div class="absolute inset-0 bg-gradient-to-t from-[#34383b] via-black/20 to-transparent"></div>

                </div>

                <div class="p-8">

                    <span class="text-[#83d401] tracking-[4px] uppercase text-xs">
                        05
                    </span>

                    <h3 class="text-3xl font-bold mt-3 group-hover:text-[#83d401] transition">
                        Event Production
                    </h3>

                    <p class="mt-5 text-gray-400 leading-8">
                        Event organizer, multimedia,
                        live streaming, panggung dan dokumentasi.
                    </p>

                    <div class="mt-8 flex justify-between items-center">

                        <span class="text-sm uppercase tracking-widest text-gray-500">
                            Explore
                        </span>

                        <div class="w-14 h-14 rounded-full border border-white/20 flex items-center justify-center group-hover:bg-[#83d401] group-hover:text-[#34383b] group-hover:border-[#83d401] transition">

                            →

                        </div>

                    </div>

                </div>

            </div>

            <!-- CARD -->
            <div class="group overflow-hidden rounded-3xl border border-white/10 bg-[#3b3f42] hover:border-[#83d401] transition-all duration-500">

                <div class="relative overflow-hidden h-72">

                    <img
                        src="https://picsum.photos/3010/1080"
                        class="w-full h-full object-cover group-hover:scale-110 transition duration-700"
                        alt="Website">

                    <div class="absolute inset-0 bg-gradient-to-t from-[#34383b] via-black/20 to-transparent"></div>

                </div>

                <div class="p-8">

                    <span class="text-[#83d401] tracking-[4px] uppercase text-xs">
                        06
                    </span>

                    <h3 class="text-3xl font-bold mt-3 group-hover:text-[#83d401] transition">
                        Website Development
                    </h3>

                    <p class="mt-5 text-gray-400 leading-8">
                        Landing page, company profile,
                        e-commerce dan custom web application.
                    </p>

                    <div class="mt-8 flex justify-between items-center">

                        <span class="text-sm uppercase tracking-widest text-gray-500">
                            Explore
                        </span>

                        <div class="w-14 h-14 rounded-full border border-white/20 flex items-center justify-center group-hover:bg-[#83d401] group-hover:text-[#34383b] group-hover:border-[#83d401] transition">

                            →

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- ===================================
WHY CHOOSE US
=================================== -->

<section class="py-32 bg-[#2f3336]">

    <div class="max-w-7xl mx-auto px-6">

        <div class="grid lg:grid-cols-2 gap-20 items-center">

            <!-- LEFT -->

            <div>

                <span
                    class="uppercase tracking-[6px] text-[#83d401] text-sm font-semibold">

                    Mengapa Memilih Kami

                </span>

                <h2 class="text-xl lg:text-2xl font-black mt-5 leading-tight">

                    Partner Kreatif

                    <span class="outline-text block">

                        Untuk Bisnis Anda

                    </span>

                </h2>

                <p class="mt-8 text-gray-400 leading-8 max-w-xl">

                    Kami percaya bahwa setiap brand memiliki cerita yang
                    berbeda. Dengan pengalaman, kreativitas, dan tim yang
                    profesional, kami membantu mewujudkan ide menjadi karya
                    visual yang mampu meningkatkan kepercayaan pelanggan.

                </p>


                <div class="mt-14 space-y-6">

                    <!-- ITEM -->

                    <div class="group flex items-start gap-6 border-b border-white/10 pb-6">

                        <div
                            class="w-12 h-12 rounded-full bg-[#83d401] text-[#34383b] flex items-center justify-center text-xl font-bold">

                            ✓

                        </div>

                        <div class="flex-1">

                            <div class="flex justify-between items-center">

                                <h3 class="text-2xl font-bold">

                                    Berpengalaman

                                </h3>

                                <span class="text-[#83d401]">

                                    5+ Tahun

                                </span>

                            </div>

                            <p class="mt-3 text-gray-400">

                                Menangani berbagai kebutuhan branding,
                                advertising, dokumentasi, hingga digital
                                campaign.

                            </p>

                        </div>

                    </div>

                    <!-- ITEM -->

                    <div class="group flex items-start gap-6 border-b border-white/10 pb-6">

                        <div
                            class="w-12 h-12 rounded-full bg-[#83d401] text-[#34383b] flex items-center justify-center text-xl font-bold">

                            ✓

                        </div>

                        <div class="flex-1">

                            <div class="flex justify-between items-center">

                                <h3 class="text-2xl font-bold">

                                    Tim Profesional

                                </h3>

                                <span class="text-[#83d401]">

                                    Creative Team

                                </span>

                            </div>

                            <p class="mt-3 text-gray-400">

                                Pylon Sign,
                                Neon Sign,
                                Huruf Timbul,
                                Papan Nama,
                                Logo LED

                            </p>

                        </div>

                    </div>

                    <!-- ITEM -->

                    <div class="group flex items-start gap-6 border-b border-white/10 pb-6">

                        <div
                            class="w-12 h-12 rounded-full bg-[#83d401] text-[#34383b] flex items-center justify-center text-xl font-bold">

                            ✓

                        </div>

                        <div class="flex-1">

                            <div class="flex justify-between items-center">

                                <h3 class="text-2xl font-bold">

                                    Tepat Waktu

                                </h3>

                                <span class="text-[#83d401]">

                                    On Schedule

                                </span>

                            </div>

                            <p class="mt-3 text-gray-400">

                                Timeline yang jelas dengan komunikasi
                                yang aktif pada setiap proses pengerjaan.

                            </p>

                        </div>

                    </div>

                    <!-- ITEM -->

                    <div class="group flex items-start gap-6">

                        <div
                            class="w-12 h-12 rounded-full bg-[#83d401] text-[#34383b] flex items-center justify-center text-xl font-bold">

                            ✓

                        </div>

                        <div class="flex-1">

                            <div class="flex justify-between items-center">

                                <h3 class="text-2xl font-bold">

                                    Harga Transparan

                                </h3>

                                <span class="text-[#83d401]">

                                    No Hidden Cost

                                </span>

                            </div>

                            <p class="mt-3 text-gray-400">

                                Seluruh biaya dijelaskan sejak awal sehingga
                                tidak ada biaya tambahan di luar kesepakatan.

                            </p>

                        </div>

                    </div>

                </div>

            </div>

            <!-- RIGHT -->

            <div class="relative">

                <div
                    class="absolute -top-8 -right-8 w-40 h-40 rounded-full bg-[#83d401]/20 blur-3xl">
                </div>

                <img
                    src="https://picsum.photos/3010/1080"
                    alt="Team"
                    class="rounded-[40px] object-cover w-full h-[760px] border border-white/10">

                <div
                    class="absolute bottom-8 left-8 bg-[#34383b]/90 backdrop-blur-md rounded-3xl px-8 py-6 border border-white/10">

                    <p class="text-gray-400 uppercase tracking-[4px] text-sm">

                        Client Satisfaction

                    </p>

                    <h3 class="text-5xl font-black text-[#83d401] mt-2">

                        98%

                    </h3>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- =======================================
PORTFOLIO
======================================= -->

<section id="portofolio" class="py-32 section-pattern">

    <div class="max-w-7xl mx-auto px-6">

        <!-- Heading -->

        <div class="flex flex-col lg:flex-row lg:justify-between lg:items-end gap-8 mb-20">

            <div>

                <span class="uppercase tracking-[6px] text-[#83d401] text-sm font-semibold">

                    Portfolio

                </span>

                <h2 class="text-xl lg:text-2xl font-black mt-5 leading-tight">

                    Karya Terbaru

                    <span class="outline-text block">

                        Doa Ibu Production

                    </span>

                </h2>

            </div>

            <div>

                <p class="text-gray-400 max-w-lg leading-8 mb-8">

                    Jelajahi berbagai hasil karya terbaru kami dari berbagai kategori
                    mulai dari advertising,
                    event hingga digital media.

                </p>

                <a href="/gallery"

                class="inline-flex items-center gap-3 border border-[#83d401] text-[#83d401] px-7 py-4 rounded-full hover:bg-[#83d401] hover:text-[#34383b] transition">

                    Lihat Semua

                    →

                </a>

            </div>

        </div>

        <div class="mb-24">

    <div class="flex justify-between items-center mb-8">

        <h3 class="text-3xl font-bold">

            Advertising

        </h3>

        <span class="text-gray-500">

            5 Project Terbaru

        </span>

    </div>

    <div class="swiper advertisingSwiper">

        <section class="swiper-wrapper">

            <!-- CARD -->

            <div class="swiper-slide">

                <div class="group">

                    <div class="overflow-hidden rounded-3xl">
                        <img src="https://picsum.photos/3010/1080" alt="Gambar Acak" class="w-full h-80 object-cover group-hover:scale-110 duration-700">
                    </div>

                    <div class="mt-5">

                        <p class="text-[#83d401] uppercase text-xs tracking-[5px]">

                            Advertising

                        </p>

                        <h4 class="text-xl font-bold mt-2">

                            Product Campaign

                        </h4>

                    </div>

                </div>

            </div>
        </section>

        <!-- ===================================
TESTIMONI
=================================== -->

<section  class="py-32 bg-[#2f3336]">

    <div class="max-w-5xl mx-auto px-6 text-center">

        <span class="uppercase tracking-[6px] text-[#83d401] text-sm font-semibold">

            Testimoni

        </span>

        <h2 class="text-xl lg:text-2xl font-black mt-5">

            Apa Kata

            <span class="outline-text block">

                Klien Kami

            </span>

        </h2>

        <div class="swiper testimonialSwiper mt-20">

            <div class="swiper-wrapper">

                <!-- TESTI -->

                <div class="swiper-slide">

                    <div class="max-w-4xl mx-auto">

                        <div class="text-[#83d401] text-8xl font-black leading-none">

                            “

                        </div>

                        <p class="text-2xl lg:text-4xl leading-relaxed font-light mt-6">

                            Doa Ibu Production berhasil membantu perusahaan kami
                            membuat video company profile yang profesional.
                            Proses komunikasinya sangat mudah dan hasil akhirnya
                            melebihi ekspektasi kami.

                        </p>

                        <div class="mt-10 text-[#83d401] text-2xl">

                            ★★★★★

                        </div>

                        <div class="mt-12">

                            <img
                                src="https://picsum.photos/3010/1080"
                                class="w-20 h-20 rounded-full object-cover mx-auto border-2 border-[#83d401]">

                            <h3 class="mt-5 text-2xl font-bold">

                                Budi Santoso

                            </h3>

                            <p class="text-gray-400 mt-2">

                                Marketing Manager • PT ABC Indonesia

                            </p>

                        </div>

                    </div>

                </div>

                <!-- TESTI 2 -->

                <div class="swiper-slide">

                    <div class="max-w-4xl mx-auto">

                        <div class="text-[#83d401] text-8xl font-black">

                            “

                        </div>

                        <p class="text-2xl lg:text-4xl leading-relaxed font-light mt-6">

                            Tim sangat profesional mulai dari briefing,
                            proses shooting hingga editing.
                            Hasil dokumentasi event kami luar biasa.

                        </p>

                        <div class="mt-10 text-[#83d401] text-2xl">

                            ★★★★★

                        </div>

                        <div class="mt-12">

                            <img
                                src="https://picsum.photos/3010/1080"
                                class="w-20 h-20 rounded-full object-cover mx-auto border-2 border-[#83d401]">

                            <h3 class="mt-5 text-2xl font-bold">

                                Anita Wijaya

                            </h3>

                            <p class="text-gray-400 mt-2">

                                Owner • Kopi Nusantara

                            </p>

                        </div>

                    </div>

                </div>

            </div>

            <div class="swiper-pagination mt-12 relative"></div>

        </div>

    </div>

</section>

<!-- ===================================
FAQ
=================================== -->

<section id="contact" class="py-32 bg-[#34383b]">

    <div class="max-w-5xl mx-auto px-6">

        <!-- Heading -->

        <div class="text-center mb-20">

            <span class="uppercase tracking-[6px] text-[#83d401] text-sm font-semibold">

                FAQ

            </span>

            <h2 class="text-xl lg:text-2xl font-black mt-5">

                Pertanyaan

                <span class="outline-text block">

                    Yang Sering Diajukan

                </span>

            </h2>

            <p class="text-gray-400 mt-8 max-w-2xl mx-auto leading-8">

                Berikut beberapa pertanyaan yang sering ditanyakan
                oleh klien sebelum bekerja sama dengan Doa Ibu Production.

            </p>

        </div>

        <!-- FAQ -->

        <div class="space-y-5">

            <!-- ITEM -->

            <details class="group border-b border-white/10 pb-6">

                <summary
                    class="flex justify-between items-center cursor-pointer list-none">

                    <h3 class="text-2xl font-semibold">

                        Apa saja layanan yang tersedia?

                    </h3>

                    <span
                        class="text-[#83d401] text-4xl transition group-open:rotate-45">

                        +

                    </span>

                </summary>

                <p class="mt-6 text-gray-400 leading-8 max-w-3xl">

                    Kami menyediakan layanan Branding Identity,
                    Photography, Videography,
                    Digital Advertising,
                    Social Media Management,
                    Website Development,
                    hingga Event Production.

                </p>

            </details>

            <!-- ITEM -->

            <details class="group border-b border-white/10 pb-6">

                <summary
                    class="flex justify-between items-center cursor-pointer list-none">

                    <h3 class="text-2xl font-semibold">

                        Berapa lama proses pengerjaan?

                    </h3>

                    <span
                        class="text-[#83d401] text-4xl transition group-open:rotate-45">

                        +

                    </span>

                </summary>

                <p class="mt-6 text-gray-400 leading-8 max-w-3xl">

                    Durasi pengerjaan bergantung pada jenis proyek.
                    Setelah sesi konsultasi, kami akan memberikan estimasi
                    timeline yang jelas sebelum proyek dimulai.

                </p>

            </details>

            <!-- ITEM -->

            <details class="group border-b border-white/10 pb-6">

                <summary
                    class="flex justify-between items-center cursor-pointer list-none">

                    <h3 class="text-2xl font-semibold">

                        Apakah tersedia revisi?

                    </h3>

                    <span
                        class="text-[#83d401] text-4xl transition group-open:rotate-45">

                        +

                    </span>

                </summary>

                <p class="mt-6 text-gray-400 leading-8 max-w-3xl">

                    Ya. Setiap paket memiliki jumlah revisi sesuai
                    kesepakatan agar hasil akhir sesuai dengan kebutuhan
                    dan ekspektasi klien.

                </p>

            </details>

            <!-- ITEM -->

            <details class="group border-b border-white/10 pb-6">

                <summary
                    class="flex justify-between items-center cursor-pointer list-none">

                    <h3 class="text-2xl font-semibold">

                        Apakah melayani klien di luar kota?

                    </h3>

                    <span
                        class="text-[#83d401] text-4xl transition group-open:rotate-45">

                        +

                    </span>

                </summary>

                <p class="mt-6 text-gray-400 leading-8 max-w-3xl">

                    Tentu. Kami melayani proyek dari berbagai daerah.
                    Untuk pekerjaan yang membutuhkan dokumentasi langsung,
                    jadwal dan biaya perjalanan akan disesuaikan dengan lokasi.

                </p>

            </details>

            <!-- ITEM -->

            <details class="group pb-6">

                <summary
                    class="flex justify-between items-center cursor-pointer list-none">

                    <h3 class="text-2xl font-semibold">

                        Bagaimana cara memulai kerja sama?

                    </h3>

                    <span
                        class="text-[#83d401] text-4xl transition group-open:rotate-45">

                        +

                    </span>

                </summary>

                <p class="mt-6 text-gray-400 leading-8 max-w-3xl">

                    Anda dapat menghubungi kami melalui WhatsApp,
                    formulir kontak, atau media sosial. Tim kami akan
                    menjadwalkan konsultasi untuk memahami kebutuhan
                    proyek Anda.

                </p>

            </details>

        </div>

    </div>

</section>

<!-- ===================================
FULL WIDTH CTA
=================================== -->

<section class="relative isolate overflow-hidden">

    <!-- Background Image -->

    <img
        src="bg.jpg"
        alt="CTA Background"
        class="absolute inset-0 h-full w-full ">

    <!-- Overlay -->

    <div class="absolute inset-0 bg-[#34383b]/80"></div>

    <!-- Glow -->

    <div
        class="absolute inset-0 bg-gradient-to-r
        from-[#34383b]
        via-transparent
        to-[#34383b]">
    </div>

    <div
        class="relative min-h-[650px]
        flex items-center justify-center">

        <div
            class="text-center max-w-5xl px-6">

            <span
                class="uppercase tracking-[8px]
                text-[#83d401]
                text-sm">

                LET'S START YOUR PROJECT

            </span>

            <h2
                class="text-5xl md:text-7xl xl:text-8xl
                font-black
                leading-tight
                mt-6">

                Mari Wujudkan

                <span class="outline-text block">

                    Ide Kreatif Anda

                </span>

            </h2>

            <p
                class="mt-10
                text-xl
                leading-9
                text-gray-300
                max-w-3xl
                mx-auto">

                Dari branding, advertising,
                media management hingga Project development,
                kami siap membantu bisnis Anda tampil lebih profesional.

            </p>

            <div
                class="mt-14 flex flex-wrap justify-center gap-6">

                <a href="#contact"

                    class="px-10 py-5
                    rounded-full
                    bg-[#83d401]
                    text-[#34383b]
                    font-semibold
                    hover:scale-105
                    duration-300">

                    Konsultasi Sekarang

                </a>

                <a href="/gallery"

                    class="px-10 py-5
                    rounded-full
                    border
                    border-[#83d401]
                    text-[#83d401]
                    hover:bg-[#83d401]
                    hover:text-[#34383b]
                    duration-300">

                    Lihat Portfolio

                </a>

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



    <script>


        const counters = document.querySelectorAll('.counter');

        counters.forEach(counter=>{

            const update=()=>{

                const target=+counter.dataset.target;

                const value=+counter.innerText;

                const speed=40;

                const increment=target/speed;

                if(value<target){

                    counter.innerText=Math.ceil(value+increment);

                    setTimeout(update,40);

                }else{

                    counter.innerText=target+"+";

                }

            }

            update();

        });
    </script>

</body>
</html>
