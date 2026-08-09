
<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Kontak
        </h2>
    </x-slot>

    <div class="py-12">

        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">

            @if (session('success'))
                <div class="mb-6 px-5 py-4 rounded-lg bg-green-50 border border-green-300 text-green-700">
                    {{ session('success') }}
                </div>
            @endif

            <div class="bg-white shadow-sm sm:rounded-lg">

                <div class="px-6 py-5 border-b">
                    <h1 class="text-lg font-semibold text-gray-800">
                        Informasi Kontak
                    </h1>

                    <p class="text-sm text-gray-500 mt-1">
                        Kelola informasi kontak yang ditampilkan pada halaman website.
                    </p>
                </div>

                @if ($contact)

                    <form
                        action="{{ route('admin.contacts.update', $contact) }}"
                        method="POST"
                        class="p-6 space-y-5">

                        @csrf
                        @method('PUT')

                        {{-- Nama --}}

                        <div>
                            <label class="block text-xs text-gray-600 mb-1">
                                Nama Perusahaan
                            </label>

                            <input
                                type="text"
                                name="nama"
                                value="{{ old('nama', $contact->nama) }}"
                                class="w-full text-sm border-gray-300 rounded-lg">

                            @error('nama')
                                <p class="text-xs text-red-500 mt-1">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        {{-- Telepon --}}

                        <div>
                            <label class="block text-xs text-gray-600 mb-1">
                                Telepon / WhatsApp
                            </label>

                            <input
                                type="text"
                                name="telepon"
                                value="{{ old('telepon', $contact->telepon) }}"
                                class="w-full text-sm border-gray-300 rounded-lg">

                            @error('telepon')
                                <p class="text-xs text-red-500 mt-1">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        {{-- WhatsApp URL --}}

                        <div>
                            <label class="block text-xs text-gray-600 mb-1">
                                WhatsApp URL
                            </label>

                            <input
                                type="url"
                                name="whatsapp_url"
                                value="{{ old('whatsapp_url', $contact->whatsapp_url) }}"
                                placeholder="https://wa.me/..."
                                class="w-full text-sm border-gray-300 rounded-lg">

                            @error('whatsapp_url')
                                <p class="text-xs text-red-500 mt-1">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        {{-- Email --}}

                        <div>
                            <label class="block text-xs text-gray-600 mb-1">
                                Email
                            </label>

                            <input
                                type="email"
                                name="email"
                                value="{{ old('email', $contact->email) }}"
                                class="w-full text-sm border-gray-300 rounded-lg">

                            @error('email')
                                <p class="text-xs text-red-500 mt-1">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        {{-- Instagram --}}

                        <div>
                            <label class="block text-xs text-gray-600 mb-1">
                                Instagram
                            </label>

                            <input
                                type="url"
                                name="instagram"
                                value="{{ old('instagram', $contact->instagram) }}"
                                placeholder="https://instagram.com/..."
                                class="w-full text-sm border-gray-300 rounded-lg">

                            @error('instagram')
                                <p class="text-xs text-red-500 mt-1">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        {{-- Alamat --}}

                        <div>
                            <label class="block text-xs text-gray-600 mb-1">
                                Alamat
                            </label>

                            <textarea
                                name="alamat"
                                rows="3"
                                class="w-full text-sm border-gray-300 rounded-lg">{{ old('alamat', $contact->alamat) }}</textarea>

                            @error('alamat')
                                <p class="text-xs text-red-500 mt-1">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        {{-- Jam Operasional --}}

                        <div>
                            <label class="block text-xs text-gray-600 mb-1">
                                Jam Operasional
                            </label>

                            <input
                                type="text"
                                name="jam_operasional"
                                value="{{ old('jam_operasional', $contact->jam_operasional) }}"
                                placeholder="Senin – Sabtu, 08.00 – 20.00 WIB"
                                class="w-full text-sm border-gray-300 rounded-lg">

                            @error('jam_operasional')
                                <p class="text-xs text-red-500 mt-1">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        {{-- Google Maps --}}

                        <div>
                            <label class="block text-xs text-gray-600 mb-1">
                                Google Maps URL
                            </label>

                            <input
                                type="url"
                                name="maps_url"
                                value="{{ old('maps_url', $contact->maps_url) }}"
                                placeholder="https://maps.google.com/..."
                                class="w-full text-sm border-gray-300 rounded-lg">

                            @error('maps_url')
                                <p class="text-xs text-red-500 mt-1">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        {{-- Status --}}

                        <div class="flex items-center gap-2">

                            <input
                                type="checkbox"
                                name="status"
                                value="1"
                                {{ old('status', $contact->status) ? 'checked' : '' }}>

                            <label class="text-xs text-gray-600">
                                Aktif
                            </label>

                        </div>

                        {{-- Button --}}

                        <div class="flex justify-end pt-2">

                            <button
                                type="submit"
                                class="px-6 py-2 rounded-lg bg-gray-800 text-white text-sm font-semibold hover:bg-gray-700">
                                Simpan Perubahan
                            </button>

                        </div>

                    </form>

                @else

                    <div class="p-6">

                        <div class="px-5 py-4 rounded-lg bg-yellow-50 border border-yellow-300 text-yellow-700">
                            Data kontak belum tersedia.
                        </div>

                    </div>

                @endif

            </div>

        </div>

    </div>

</x-app-layout>
