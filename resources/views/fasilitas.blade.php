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

   <!-- ================= NAVBAR ================= -->
    @include('components.navbar')

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