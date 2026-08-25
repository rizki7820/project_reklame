<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Semua Layanan — Doa Ibu Production</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <style>
        body { background: #34383b; }
        .outline-text { color: transparent; -webkit-text-stroke: 2px #83d401; }
    </style>
</head>
<body class="text-white overflow-x-hidden">

  <!-- ================= NAVBAR ================= -->
    @include('components.navbar')

    <!-- Header Section -->
    <section class="pt-36 pb-16 border-b border-white/10 bg-[#34383b]">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <span class="uppercase tracking-[6px] text-[#83d401] text-sm font-semibold">Katalog Lengkap</span>
            <h1 class="text-5xl lg:text-7xl font-black mt-4 uppercase">
                Daftar Layanan <span class="outline-text block mt-1">Kami</span>
            </h1>
            <p class="max-w-2xl mx-auto mt-4 text-gray-300 text-base">
                Seluruh kebutuhan media promosi, signage, huruf timbul, neon box, hingga advertising.
            </p>
        </div>
    </section>

    <!-- Dynamic Grid Layanan -->
    <section class="py-20 bg-[#34383b]">
        <div class="max-w-7xl mx-auto px-6">
            @if ($services->count() > 0)
                <div class="grid md:grid-cols-2 xl:grid-cols-3 gap-8">
                    @foreach ($services as $index => $service)
                        <div class="group overflow-hidden rounded-3xl border border-white/10 bg-[#3b3f42] hover:border-[#83d401] transition-all duration-300 flex flex-col justify-between">
                            <div>
                                <div class="relative overflow-hidden h-64 bg-black/30">
                                    <img 
                                        src="{{ $service->gambar ? asset('storage/' . $service->gambar) : 'https://picsum.photos/600/400?random=' . $index }}" 
                                        alt="{{ $service->nama_layanan }}"
                                        class="w-full h-full object-cover group-hover:scale-105 transition duration-500"
                                    >
                                </div>
                                <div class="p-6">
                                    <span class="text-[#83d401] tracking-[4px] uppercase text-xs font-bold">
                                        {{ sprintf('%02d', $index + 1) }}
                                    </span>
                                    <h3 class="text-2xl font-bold mt-2 text-white group-hover:text-[#83d401] transition">
                                        {{ $service->nama_layanan }}
                                    </h3>
                                    <p class="mt-3 text-gray-400 text-sm leading-relaxed">
                                        {{ $service->deskripsi ?? 'Pengerjaan berkualitas, presisi, dan bergaransi.' }}
                                    </p>
                                </div>
                            </div>
                            <div class="px-6 pb-6 pt-2 flex items-center justify-between border-t border-white/5 mt-auto">
                                <a href="https://wa.me/6285828666615?text=Halo%2C%20saya%20tertarik%20dengan%20layanan%20{{ urlencode($service->nama_layanan) }}"
                                   target="_blank"
                                   class="text-xs uppercase font-bold tracking-widest text-[#83d401] hover:underline">
                                    Order Layanan →
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="text-center py-16 text-gray-400">
                    <p>Belum ada data layanan aktif di database.</p>
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