<nav
    x-data="{ mobileOpen: false, dropdownOpen: false }"
    class="fixed top-0 left-0 w-full z-50 transition-all duration-300 backdrop-blur-md bg-[#34383b]/85 border-b border-white/10"
    id="navbar"
>
    <!-- ================= TOP BAR CONTAINER ================= -->
    <div class="max-w-screen-2xl mx-auto px-6 py-4 flex items-center justify-between">

        <!-- Logo -->
        <a href="{{ route('landing') }}" class="flex items-center gap-3 text-2xl font-black tracking-wider">
            <img
                src="/logo_dip.png"
                alt="Doa Ibu Production"
                class="h-14 w-auto lg:h-16 object-contain flex-shrink-0"
            >

            <div class="relative w-fit">
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

        <!-- Desktop Navigation Links -->
        <div class="hidden lg:flex items-center gap-8 text-xs font-bold uppercase tracking-widest text-gray-300">
            <a 
                href="{{ route('landing') }}" 
                class="transition-colors {{ Request::is('/') ? 'text-[#83d401]' : 'hover:text-[#83d401]' }}"
            >
                Beranda
            </a>

            <a 
                href="{{ route('services.public') }}" 
                class="transition-colors {{ Request::is('services*') || Request::is('layanan*') ? 'text-[#83d401]' : 'hover:text-[#83d401]' }}"
            >
                Layanan
            </a>

            <a 
                href="{{ route('projects.public') }}" 
                class="transition-colors {{ Request::is('proyek*') ? 'text-[#83d401]' : 'hover:text-[#83d401]' }}"
            >
                Proyek
            </a>

            <a 
                href="{{ route('galleries.public') }}" 
                class="transition-colors {{ Request::is('galeri*') || Request::is('gallery*') ? 'text-[#83d401]' : 'hover:text-[#83d401]' }}"
            >
                Galeri
            </a>

            <a 
                href="{{ route('articles.public') }}" 
                class="transition-colors {{ Request::is('artikel*') ? 'text-[#83d401]' : 'hover:text-[#83d401]' }}"
            >
                Artikel
            </a>

            <!-- Dropdown Perusahaan (Desktop) -->
            <div class="group relative">
                <button class="flex items-center gap-1.5 uppercase font-bold text-xs tracking-widest transition-colors {{ Request::is('tentang-kami*') || Request::is('fasilitas*') || Request::is('faq*') ? 'text-[#83d401]' : 'text-gray-300 hover:text-[#83d401]' }} py-2">
                    Perusahaan
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5 transition-transform duration-300 group-hover:rotate-180" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>

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

            <a 
                href="{{ route('contact.public') }}" 
                class="transition-colors {{ Request::is('kontak*') ? 'text-[#83d401]' : 'hover:text-[#83d401]' }}"
            >
                Kontak
            </a>
        </div>

        <!-- Action & Hamburger Button -->
        <div class="flex items-center gap-3">
            <a
                href="https://wa.me/6285828666615?text=Halo%20Doa%20Ibu%20Production%2C%20saya%20tertarik%20untuk%20konsultasi%20pembuatan%20media%20promosi."
                target="_blank"
                class="hidden sm:inline-block border border-[#83d401] text-[#83d401] px-5 py-2.5 rounded-full text-xs font-bold uppercase tracking-widest hover:bg-[#83d401] hover:text-[#34383b] transition duration-300"
            >
                Hubungi Kami
            </a>

            <!-- Tombol Hamburger -->
            <button 
                @click="mobileOpen = true"
                type="button" 
                class="lg:hidden p-2 rounded-xl bg-white/5 border border-white/10 text-gray-200 hover:text-[#83d401] focus:outline-none"
                aria-label="Toggle Menu"
            >
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>

    </div>

    <!-- ================= MOBILE DRAWER / SIDEBAR ================= -->
    <!-- Backdrop Overlay -->
    <div 
        x-show="mobileOpen" 
        x-transition:enter="transition-opacity ease-out duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition-opacity ease-in duration-200"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        @click="mobileOpen = false"
        class="fixed inset-0 min-h-screen bg-black/75 backdrop-blur-sm z-[999] lg:hidden"
        style="display: none;"
    ></div>

    <!-- Sidebar Content Box -->
    <div 
        x-show="mobileOpen"
        x-transition:enter="transition ease-out duration-300 transform"
        x-transition:enter-start="translate-x-full"
        x-transition:enter-end="translate-x-0"
        x-transition:leave="transition ease-in duration-200 transform"
        x-transition:leave-start="translate-x-0"
        x-transition:leave-end="translate-x-full"
        class="fixed top-0 right-0 h-screen w-4/5 max-w-sm bg-[#34383b] border-l border-white/10 z-[1000] p-6 flex flex-col justify-between overflow-y-auto lg:hidden shadow-2xl"
        style="display: none;"
    >
        <div class="w-full flex flex-col flex-1">
            <!-- Sidebar Header -->
            <div class="flex items-center justify-between pb-5 border-b border-white/10">
                <span class="text-xs uppercase tracking-widest text-[#83d401] font-bold">Navigasi</span>
                <button 
                    @click="mobileOpen = false"
                    class="p-2 rounded-lg bg-white/5 text-gray-400 hover:text-white focus:outline-none"
                >
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <!-- Sidebar Link Items -->
            <div class="flex flex-col gap-1.5 mt-6 text-sm font-semibold uppercase tracking-wider overflow-y-auto">
                <a 
                    href="{{ route('landing') }}" 
                    class="px-4 py-3 rounded-xl transition block {{ Request::is('/') ? 'bg-[#83d401] text-[#34383b] font-bold' : 'text-gray-300 hover:bg-white/5 hover:text-white' }}"
                >
                    Beranda
                </a>

                <a 
                    href="{{ route('services.public') }}" 
                    class="px-4 py-3 rounded-xl transition block {{ Request::is('services*') || Request::is('layanan*') ? 'bg-[#83d401] text-[#34383b] font-bold' : 'text-gray-300 hover:bg-white/5 hover:text-white' }}"
                >
                    Layanan
                </a>

                <a 
                    href="{{ route('projects.public') }}" 
                    class="px-4 py-3 rounded-xl transition block {{ Request::is('proyek*') ? 'bg-[#83d401] text-[#34383b] font-bold' : 'text-gray-300 hover:bg-white/5 hover:text-white' }}"
                >
                    Proyek
                </a>

                <a 
                    href="{{ route('galleries.public') }}" 
                    class="px-4 py-3 rounded-xl transition block {{ Request::is('galeri*') || Request::is('gallery*') ? 'bg-[#83d401] text-[#34383b] font-bold' : 'text-gray-300 hover:bg-white/5 hover:text-white' }}"
                >
                    Galeri
                </a>

                <a 
                    href="{{ route('articles.public') }}" 
                    class="px-4 py-3 rounded-xl transition block {{ Request::is('artikel*') ? 'bg-[#83d401] text-[#34383b] font-bold' : 'text-gray-300 hover:bg-white/5 hover:text-white' }}"
                >
                    Artikel
                </a>

                <!-- Dropdown Accordion Perusahaan -->
                <div class="w-full">
                    <button 
                        @click="dropdownOpen = !dropdownOpen" 
                        type="button"
                        class="w-full flex items-center justify-between px-4 py-3 rounded-xl text-left transition {{ Request::is('tentang-kami*') || Request::is('fasilitas*') || Request::is('faq*') ? 'bg-white/10 text-[#83d401]' : 'text-gray-300 hover:bg-white/5 hover:text-white' }}"
                    >
                        <span>Perusahaan</span>
                        <svg class="w-4 h-4 transition-transform duration-200" :class="{ 'rotate-180': dropdownOpen }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>

                    <div 
                        x-show="dropdownOpen" 
                        x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 -translate-y-2"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        class="pl-4 pr-1 py-2 flex flex-col gap-1 text-xs"
                        style="display: none;"
                    >
                        <a 
                            href="{{ route('about.public') }}" 
                            class="px-3 py-2.5 rounded-lg block transition {{ Request::is('tentang-kami*') ? 'text-[#83d401] font-bold bg-white/5' : 'text-gray-400 hover:text-white' }}"
                        >
                            • Tentang Kami
                        </a>
                        <a 
                            href="{{ route('facilities.public') }}" 
                            class="px-3 py-2.5 rounded-lg block transition {{ Request::is('fasilitas*') ? 'text-[#83d401] font-bold bg-white/5' : 'text-gray-400 hover:text-white' }}"
                        >
                            • Fasilitas
                        </a>
                        <a 
                            href="{{ route('faq.public') }}" 
                            class="px-3 py-2.5 rounded-lg block transition {{ Request::is('faq*') ? 'text-[#83d401] font-bold bg-white/5' : 'text-gray-400 hover:text-white' }}"
                        >
                            • FAQ
                        </a>
                    </div>
                </div>

                <a 
                    href="{{ route('contact.public') }}" 
                    class="px-4 py-3 rounded-xl transition block {{ Request::is('kontak*') ? 'bg-[#83d401] text-[#34383b] font-bold' : 'text-gray-300 hover:bg-white/5 hover:text-white' }}"
                >
                    Kontak
                </a>
            </div>
        </div>

        <!-- Sidebar Bottom WA CTA -->
        <div class="pt-6 mt-6 border-t border-white/10 flex-shrink-0">
            <a
                href="https://wa.me/6285828666615?text=Halo%20Doa%20Ibu%20Production%2C%20saya%20tertarik%20untuk%20konsultasi%20pembuatan%20media%20promosi."
                target="_blank"
                class="w-full block text-center bg-[#83d401] text-[#34383b] px-5 py-3 rounded-xl text-xs font-bold uppercase tracking-widest hover:bg-white transition duration-300 shadow-lg"
            >
                Hubungi Kami via WA
            </a>
        </div>
    </div>
</nav>