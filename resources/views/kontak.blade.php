<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hubungi Kami — Doa Ibu Production</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

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
            <span class="uppercase tracking-[6px] text-[#83d401] text-sm font-semibold">Get In Touch</span>
            <h1 class="text-5xl lg:text-7xl font-black mt-4 uppercase">
                Hubungi <span class="outline-text block mt-1">Kami</span>
            </h1>
            <p class="max-w-2xl mx-auto mt-6 text-gray-300 text-lg leading-relaxed">
                Siap mendiskusikan kebutuhan neon box, pylon sign, huruf timbul, atau branding bisnis Anda? Tim kami siap melayani dan memberikan solusi terbaik.
            </p>
        </div>
    </section>

    <!-- Contact Grid & Details -->
    <section class="py-24 bg-[#34383b]">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid lg:grid-cols-12 gap-12">
                <!-- Left Info Cards -->
                <div class="lg:col-span-5 space-y-6">
                    <!-- WhatsApp & Phone -->
                    <div class="p-8 rounded-3xl border border-white/10 bg-[#3b3f42] hover:border-[#83d401] transition duration-300">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 rounded-full bg-[#83d401] text-[#34383b] flex items-center justify-center text-xl font-bold">
                                📞
                            </div>
                            <div>
                                <p class="text-xs uppercase font-bold tracking-widest text-[#83d401]">Telepon / WhatsApp</p>
                                <h3 class="text-xl font-bold text-white mt-1">{{ $contact->telepon ?? '0858-2866-6615' }}</h3>
                            </div>
                        </div>
                        @if($contact->whatsapp_url)
                            <a href="{{ $contact->whatsapp_url }}" target="_blank" class="mt-6 block text-center py-3 rounded-full bg-[#83d401] text-[#34383b] text-xs uppercase font-bold tracking-widest hover:bg-white transition">
                                Chat WhatsApp Sekarang →
                            </a>
                        @endif
                    </div>

                    <!-- Email -->
                    <div class="p-8 rounded-3xl border border-white/10 bg-[#3b3f42] hover:border-[#83d401] transition duration-300">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 rounded-full bg-[#83d401] text-[#34383b] flex items-center justify-center text-xl font-bold">
                                ✉
                            </div>
                            <div>
                                <p class="text-xs uppercase font-bold tracking-widest text-[#83d401]">Email Resmi</p>
                                <h3 class="text-lg font-bold text-white mt-1">{{ $contact->email ?? 'info@doaibuproduction.com' }}</h3>
                            </div>
                        </div>
                    </div>

                    <!-- Alamat & Jam Operasional -->
                    <div class="p-8 rounded-3xl border border-white/10 bg-[#3b3f42] hover:border-[#83d401] transition duration-300 space-y-4">
                        <div>
                            <p class="text-xs uppercase font-bold tracking-widest text-[#83d401]">Workshop & Kantor</p>
                            <p class="text-gray-300 text-sm mt-1 leading-relaxed">{{ $contact->alamat ?? 'Banjarmasin, Kalimantan Selatan' }}</p>
                        </div>
                        @if($contact->jam_operasional)
                            <div class="border-t border-white/10 pt-4">
                                <p class="text-xs uppercase font-bold tracking-widest text-[#83d401]">Jam Operasional</p>
                                <p class="text-gray-300 text-sm mt-1">{{ $contact->jam_operasional }}</p>
                            </div>
                        @endif
                    </div>
                </div>

                <!-- Right Map / Direct CTA Box -->
                <div class="lg:col-span-7 flex flex-col justify-between">
                    @if($contact->maps_url)
                        <div class="w-full h-[400px] rounded-3xl overflow-hidden border border-white/10">
                            <iframe 
                                src="{{ $contact->maps_url }}" 
                                width="100%" 
                                height="100%" 
                                style="border:0;" 
                                allowfullscreen="" 
                                loading="lazy" 
                                referrerpolicy="no-referrer-when-downgrade"
                                class="grayscale hover:grayscale-0 transition duration-500"
                            ></iframe>
                        </div>
                    @else
                        <div class="w-full min-h-[350px] rounded-3xl border border-white/10 bg-[#3b3f42] flex flex-col items-center justify-center p-8 text-center">
                            <span class="text-5xl mb-4 text-[#83d401]">📍</span>
                            <h3 class="text-2xl font-bold text-white">Kunjungi Workshop Kami</h3>
                            <p class="text-gray-400 mt-2 max-w-md text-sm leading-relaxed">
                                {{ $contact->alamat ?? 'Banjarmasin, Kalimantan Selatan' }}
                            </p>
                        </div>
                    @endif

                    <!-- Instant Consultation Banner -->
                    <div class="mt-6 p-8 rounded-3xl border border-[#83d401]/30 bg-gradient-to-r from-[#3b3f42] to-[#34383b] flex flex-col sm:flex-row items-center justify-between gap-6">
                        <div>
                            <h4 class="text-xl font-bold text-white">Butuh Estimasi Harga Cepat?</h4>
                            <p class="text-gray-400 text-xs mt-1">Kirimkan ukuran, konsep desain, atau referensi signage Anda.</p>
                        </div>
                        <a href="{{ $contact->whatsapp_url ?? 'https://wa.me/6285828666615' }}" target="_blank" class="whitespace-nowrap px-6 py-3 rounded-full bg-[#83d401] text-[#34383b] font-bold text-xs uppercase tracking-wider hover:bg-white transition">
                            Konsultasi Sekarang
                        </a>
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