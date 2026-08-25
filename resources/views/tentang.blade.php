<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami — Doa Ibu Production</title>

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
            <span class="uppercase tracking-[6px] text-[#83d401] text-sm font-semibold">Profil Perusahaan</span>
            <h1 class="text-5xl lg:text-7xl font-black mt-4 uppercase">
                Tentang <span class="outline-text block mt-1">Kami</span>
            </h1>
            <p class="max-w-2xl mx-auto mt-6 text-gray-300 text-lg leading-relaxed">
                Mengenal lebih dekat Doa Ibu Production sebagai mitra visual, media promosi, dan creative advertising terpercaya di Kalimantan Selatan.
            </p>
        </div>
    </section>

    <!-- ================= CONTENT ================= -->
    <section class="py-24 bg-[#34383b]">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div>
                    <span class="text-[#83d401] font-bold text-xs uppercase tracking-[4px]">Dedikasi & Kualitas</span>
                    <h2 class="text-3xl lg:text-4xl font-black mt-3 leading-tight">Membantu Brand Anda Bersinar Lebih Terang</h2>
                    <p class="text-gray-300 text-base leading-relaxed mt-6">
                        Doa Ibu Production berawal dari komitmen untuk menghadirkan signage dan media periklanan yang tidak hanya kokoh secara konstruksi, tetapi juga memiliki estetika visual yang kuat untuk menarik perhatian konsumen.
                    </p>
                    <p class="text-gray-400 text-sm leading-relaxed mt-4">
                        Dengan pengalaman lebih dari 5 tahun, kami telah melayani ratusan klien mulai dari UMKM, kedai kopi, instansi perbankan, perkantoran, hingga corporate project di berbagai kota.
                    </p>

                    <div class="grid grid-cols-2 gap-6 mt-10">
                        <div class="p-6 rounded-2xl bg-[#3b3f42] border border-white/10">
                            <h3 class="text-4xl font-black text-[#83d401]">150+</h3>
                            <p class="text-xs uppercase tracking-widest text-gray-400 mt-2">Proyek Terselesaikan</p>
                        </div>
                        <div class="p-6 rounded-2xl bg-[#3b3f42] border border-white/10">
                            <h3 class="text-4xl font-black text-[#83d401]">98%</h3>
                            <p class="text-xs uppercase tracking-widest text-gray-400 mt-2">Kepuasan Klien</p>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 gap-6">
                    <div class="p-8 rounded-3xl bg-[#3b3f42] border border-white/10">
                        <h3 class="text-xl font-bold text-[#83d401]">Visi</h3>
                        <p class="text-gray-300 text-sm mt-3 leading-relaxed">Menjadi production house periklanan dan signage terdepan yang dikenal atas inovasi desain, ketepatan waktu, serta kualitas konstruksi yang berdaya tahan tinggi.</p>
                    </div>
                    <div class="p-8 rounded-3xl bg-[#3b3f42] border border-white/10">
                        <h3 class="text-xl font-bold text-[#83d401]">Misi</h3>
                        <ul class="text-gray-300 text-sm mt-3 space-y-2 leading-relaxed list-disc list-inside">
                            <li>Menghadirkan produk reklame dan media promosi dengan material grade terbaik.</li>
                            <li>Memberikan pelayanan profesional yang transparan tanpa biaya tersembunyi.</li>
                            <li>Menyediakan garansi purna jual untuk kenyamanan dan kepercayaan pelanggan.</li>
                        </ul>
                    </div>
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