<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertanyaan Sering Diajukan (FAQ) — Doa Ibu Production</title>

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
            <span class="uppercase tracking-[6px] text-[#83d401] text-sm font-semibold">Pusat Bantuan & Informasi</span>
            <h1 class="text-5xl lg:text-7xl font-black mt-4 uppercase">
                Pertanyaan <span class="outline-text block mt-1">Populer</span>
            </h1>
            <p class="max-w-2xl mx-auto mt-6 text-gray-300 text-lg leading-relaxed">
                Temukan jawaban cepat seputar proses pemesanan, durasi produksi, garansi lampu, hingga survei lokasi pemasangan.
            </p>
        </div>
    </section>

    <!-- ================= FAQ ACCORDION ================= -->
    <section class="py-24 bg-[#34383b]">
        <div class="max-w-4xl mx-auto px-6 space-y-5">
            <!-- FAQ 1 -->
            <details class="group p-6 rounded-2xl bg-[#3b3f42] border border-white/10 hover:border-[#83d401] transition-all">
                <summary class="flex justify-between items-center cursor-pointer list-none text-xl font-bold text-white">
                    Bagaimana alur pemesanan di Doa Ibu Production?
                    <span class="text-[#83d401] text-3xl transition-transform duration-300 group-open:rotate-45">+</span>
                </summary>
                <p class="mt-4 text-gray-300 text-sm leading-relaxed border-t border-white/10 pt-4">
                    Alur pemesanan sangat mudah: (1) Konsultasikan kebutuhan via WhatsApp/formulir, (2) Pengiriman file desain & estimasi ukuran, (3) Pembuatan draft penawaran harga resmi (RAB), (4) Proses produksi setelah DP, dan (5) Pengiriman/pemasangan di lokasi.
                </p>
            </details>

            <!-- FAQ 2 -->
            <details class="group p-6 rounded-2xl bg-[#3b3f42] border border-white/10 hover:border-[#83d401] transition-all">
                <summary class="flex justify-between items-center cursor-pointer list-none text-xl font-bold text-white">
                    Berapa lama waktu pembuatan neon box atau huruf timbul?
                    <span class="text-[#83d401] text-3xl transition-transform duration-300 group-open:rotate-45">+</span>
                </summary>
                <p class="mt-4 text-gray-300 text-sm leading-relaxed border-t border-white/10 pt-4">
                    Rata-rata pengerjaan neon box standar membutuhkan waktu 3–5 hari kerja. Untuk huruf timbul stainless atau pylon sign besar biasanya memerlukan 7–14 hari kerja tergantung tingkat kerumitan dan dimensi.
                </p>
            </details>

            <!-- FAQ 3 -->
            <details class="group p-6 rounded-2xl bg-[#3b3f42] border border-white/10 hover:border-[#83d401] transition-all">
                <summary class="flex justify-between items-center cursor-pointer list-none text-xl font-bold text-white">
                    Apakah melayani survei pengukuran ke lokasi?
                    <span class="text-[#83d401] text-3xl transition-transform duration-300 group-open:rotate-45">+</span>
                </summary>
                <p class="mt-4 text-gray-300 text-sm leading-relaxed border-t border-white/10 pt-4">
                    Ya, tim teknis kami dapat melakukan survei lapangan dan pengukuran langsung di lokasi pemasangan untuk memastikan ukuran dan titik instalasi presisi.
                </p>
            </details>

            <!-- FAQ 4 -->
            <details class="group p-6 rounded-2xl bg-[#3b3f42] border border-white/10 hover:border-[#83d401] transition-all">
                <summary class="flex justify-between items-center cursor-pointer list-none text-xl font-bold text-white">
                    Apakah produk reklame bergaransi?
                    <span class="text-[#83d401] text-3xl transition-transform duration-300 group-open:rotate-45">+</span>
                </summary>
                <p class="mt-4 text-gray-300 text-sm leading-relaxed border-t border-white/10 pt-4">
                    Tentu. Seluruh instalasi kelistrikan (lampu modul LED dan trafo power supply) kami sertakan garansi resmi hingga 6–12 bulan sesuai paket yang disepakati.
                </p>
            </details>

            <!-- FAQ 5 -->
            <details class="group p-6 rounded-2xl bg-[#3b3f42] border border-white/10 hover:border-[#83d401] transition-all">
                <summary class="flex justify-between items-center cursor-pointer list-none text-xl font-bold text-white">
                    Bagaimana jika saya belum memiliki desain siap cetak?
                    <span class="text-[#83d401] text-3xl transition-transform duration-300 group-open:rotate-45">+</span>
                </summary>
                <p class="mt-4 text-gray-300 text-sm leading-relaxed border-t border-white/10 pt-4">
                    Tim desainer in-house kami siap membantu membuatkan layout 2D hingga preview 3D mockup sebelum masuk ke tahap produksi.
                </p>
            </details>
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