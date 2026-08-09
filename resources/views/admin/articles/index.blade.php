<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Artikel
        </h2>
    </x-slot>

    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>

    <div class="py-8"
         x-data="{
            open: false,
            mode: 'create',
            previewUrl: null,

            article: {
                id: null,
                service_id: '',
                judul: '',
                slug: '',
                excerpt: '',
                konten: '',
                published_at: '',
                urutan: 0,
                status: true,
                gambar_url: null
            },

            openCreate() {
                this.mode = 'create';
                this.previewUrl = null;

                this.article = {
                    id: null,
                    service_id: '',
                    judul: '',
                    slug: '',
                    excerpt: '',
                    konten: '',
                    published_at: '',
                    urutan: 0,
                    status: true,
                    gambar_url: null
                };

                this.open = true;
            },

            openEdit(a) {
                this.mode = 'edit';
                this.previewUrl = null;
                this.article = a;
                this.open = true;
            },

            handleFileChange(event) {
                const file = event.target.files[0];

                if (!file) {
                    this.previewUrl = null;
                    return;
                }

                const reader = new FileReader();

                reader.onload = (e) => {
                    this.previewUrl = e.target.result;
                };

                reader.readAsDataURL(file);
            },

            generateSlug() {
                if (this.mode === 'create' && this.article.judul) {
                    this.article.slug = this.article.judul
                        .toLowerCase()
                        .trim()
                        .replace(/[^\w\s-]/g, '')
                        .replace(/\s+/g, '-')
                        .replace(/-+/g, '-');
                }
            }
         }">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            @if (session('success'))
                <div class="mb-6 px-5 py-4 rounded-lg bg-green-50 border border-green-300 text-green-700">
                    {{ session('success') }}
                </div>
            @endif

            <div class="flex items-center justify-between mb-6 mt-6">
                <h1 class="text-lg font-semibold">
                    Daftar Artikel
                </h1>

                <button
                    @click="openCreate()"
                    class="px-5 py-2 rounded-lg bg-gray-800 text-white text-sm font-semibold hover:bg-gray-700">
                    + Tambah Artikel
                </button>
            </div>

            <div class="bg-white shadow-sm sm:rounded-lg overflow-hidden">

                <table class="w-full text-sm">

                    <thead>
                        <tr class="text-left text-gray-500 uppercase tracking-wider text-xs bg-gray-50 border-b">

                            <th class="px-6 py-3">
                                Gambar
                            </th>

                            <th class="px-6 py-3">
                                Judul
                            </th>

                            <th class="px-6 py-3">
                                Kategori
                            </th>

                            <th class="px-6 py-3">
                                Publikasi
                            </th>

                            <th class="px-6 py-3">
                                Status
                            </th>

                            <th class="px-6 py-3 text-right">
                                Aksi
                            </th>

                        </tr>
                    </thead>

                    <tbody class="divide-y">

                        @forelse ($articles as $article)

                            <tr class="hover:bg-gray-50">

                                <td class="px-6 py-4">

                                    @if ($article->gambar_url)

                                        <img
                                            src="{{ $article->gambar_url }}"
                                            class="w-20 h-14 object-cover rounded-lg">

                                    @else

                                        <div class="w-20 h-14 rounded-lg bg-gray-100 flex items-center justify-center text-gray-400 text-xs">
                                            N/A
                                        </div>

                                    @endif

                                </td>

                                <td class="px-6 py-4">

                                    <div class="font-medium text-gray-700">
                                        {{ $article->judul }}
                                    </div>

                                    <div class="text-xs text-gray-400 mt-1">
                                        /artikel/{{ $article->slug }}
                                    </div>

                                </td>

                                <td class="px-6 py-4 text-gray-500">
                                    {{ $article->service?->nama_layanan ?? '-' }}
                                </td>

                                <td class="px-6 py-4 text-gray-500">

                                    @if ($article->published_at)
                                        {{ $article->published_at->format('d M Y') }}
                                    @else
                                        -
                                    @endif

                                </td>

                                <td class="px-6 py-4">

                                    @if ($article->status)

                                        <span class="px-3 py-1 rounded-full bg-green-50 text-green-600 text-xs">
                                            Aktif
                                        </span>

                                    @else

                                        <span class="px-3 py-1 rounded-full bg-gray-100 text-gray-500 text-xs">
                                            Nonaktif
                                        </span>

                                    @endif

                                </td>

                                <td class="px-6 py-4">

                                    <div class="flex justify-end gap-2">

                                        <button
                                            @click="openEdit(@js($article->only([
                                                'id',
                                                'service_id',
                                                'judul',
                                                'slug',
                                                'excerpt',
                                                'konten',
                                                'published_at',
                                                'urutan',
                                                'status',
                                                'gambar_url'
                                            ])))"
                                            class="px-3 py-2 rounded-lg border border-gray-300 text-gray-700 hover:bg-gray-100 text-xs">
                                            Edit
                                        </button>

                                        <form
                                            action="{{ route('admin.articles.destroy', $article) }}"
                                            method="POST"
                                            onsubmit="return confirm('Yakin ingin menghapus artikel ini?')">

                                            @csrf
                                            @method('DELETE')

                                            <button
                                                type="submit"
                                                class="px-3 py-2 rounded-lg border border-red-300 text-red-600 hover:bg-red-50 text-xs">
                                                Hapus
                                            </button>

                                        </form>

                                    </div>

                                </td>

                            </tr>

                        @empty

                            <tr>

                                <td
                                    colspan="6"
                                    class="px-6 py-10 text-center text-gray-400">

                                    Belum ada artikel.

                                </td>

                            </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>


        {{-- ========================= MODAL ========================= --}}

        <div
            x-show="open"
            x-cloak
            class="fixed inset-0 z-50 flex items-center justify-center p-4"
            style="background: rgba(0,0,0,.5)">

            <div
                @click.outside="open = false"
                x-show="open"
                class="bg-white rounded-2xl shadow-2xl p-6 mx-auto my-8">

                {{-- Header Modal --}}

                <div class="flex items-center justify-between px-6 py-4 border-b">

                    <h3
                        class="font-semibold"
                        x-text="mode === 'create'
                            ? 'Tambah Artikel'
                            : 'Edit Artikel'">
                    </h3>

                    <button
                        @click="open = false"
                        class="text-gray-400 hover:text-gray-600 text-xl leading-none">
                        &times;
                    </button>

                </div>


                {{-- Form --}}

                <form
                    :action="mode === 'create'
                        ? '{{ route('admin.articles.store') }}'
                        : '{{ url('admin/articles') }}/' + article.id"
                    method="POST"
                    enctype="multipart/form-data"
                    class="p-6 space-y-4">

                    @csrf

                    <input
                        type="hidden"
                        name="_method"
                        :value="mode === 'edit' ? 'PUT' : 'POST'">


                    {{-- Judul --}}

                    <div>

                        <label class="block text-xs text-gray-600 mb-1">
                            Judul Artikel *
                        </label>

                        <input
                            type="text"
                            name="judul"
                            x-model="article.judul"
                            @input="generateSlug()"
                            required
                            class="w-full text-sm border-gray-300 rounded-lg">

                    </div>


                    {{-- Slug --}}

                    <div>

                        <label class="block text-xs text-gray-600 mb-1">
                            Slug
                        </label>

                        <input
                            type="text"
                            name="slug"
                            x-model="article.slug"
                            class="w-full text-sm border-gray-300 rounded-lg">

                    </div>


                    {{-- Kategori --}}

                    <div>

                        <label class="block text-xs text-gray-600 mb-1">
                            Kategori
                        </label>

                        <select
                            name="service_id"
                            x-model="article.service_id"
                            class="w-full text-sm border-gray-300 rounded-lg">

                            <option value="">
                                - Pilih Kategori -
                            </option>

                            @foreach ($services as $service)

                                <option value="{{ $service->id }}">
                                    {{ $service->nama_layanan }}
                                </option>

                            @endforeach

                        </select>

                    </div>


                    {{-- Gambar --}}

                    <div>

                        <label class="block text-xs text-gray-600 mb-1">
                            Gambar Utama
                        </label>

                        <template x-if="previewUrl || article.gambar_url">

                            <div
                                class="w-full rounded-lg overflow-hidden mb-2"
                                style="height: 180px;">

                                <img
                                    :src="previewUrl || article.gambar_url"
                                    style="width: 100%; height: 100%; object-fit: cover; display: block;">

                            </div>

                        </template>

                        <input
                            type="file"
                            name="gambar"
                            accept="image/*"
                            class="w-full text-xs file:mr-3 file:py-2 file:px-3 file:rounded-lg file:border-0 file:bg-gray-100 file:text-gray-700 file:text-xs hover:file:bg-gray-200"
                            @change="handleFileChange($event)">

                    </div>


                    {{-- Excerpt --}}

                    <div>

                        <label class="block text-xs text-gray-600 mb-1">
                            Ringkasan
                        </label>

                        <textarea
                            name="excerpt"
                            x-model="article.excerpt"
                            rows="3"
                            class="w-full text-sm border-gray-300 rounded-lg"
                            placeholder="Ringkasan singkat artikel..."></textarea>

                    </div>


                    {{-- Konten --}}

                    <div>

                        <label class="block text-xs text-gray-600 mb-1">
                            Konten Artikel
                        </label>

                        <textarea
                            name="konten"
                            x-model="article.konten"
                            rows="8"
                            class="w-full text-sm border-gray-300 rounded-lg"
                            placeholder="Isi artikel..."></textarea>

                    </div>


                    {{-- Published At --}}

                    <div>

                        <label class="block text-xs text-gray-600 mb-1">
                            Tanggal Publikasi
                        </label>

                        <input
                            type="datetime-local"
                            name="published_at"
                            x-model="article.published_at"
                            class="w-full text-sm border-gray-300 rounded-lg">

                    </div>


                    {{-- Urutan --}}

                    <div>

                        <label class="block text-xs text-gray-600 mb-1">
                            Urutan
                        </label>

                        <input
                            type="number"
                            name="urutan"
                            min="0"
                            x-model="article.urutan"
                            class="w-full text-sm border-gray-300 rounded-lg">

                    </div>


                    {{-- Status --}}

                    <div class="flex items-center gap-2">

                        <input
                            type="checkbox"
                            name="status"
                            value="1"
                            x-model="article.status">

                        <label class="text-xs text-gray-600">
                            Aktif (tampil di halaman artikel)
                        </label>

                    </div>


                    {{-- Tombol --}}

                    <div class="flex gap-2 pt-2">

                        <button
                            type="submit"
                            class="flex-1 px-4 py-2 rounded-lg bg-gray-800 text-white text-sm font-semibold hover:bg-gray-700">
                            Simpan
                        </button>

                        <button
                            type="button"
                            @click="open = false"
                            class="flex-1 px-4 py-2 rounded-lg border border-gray-300 text-gray-700 text-sm hover:bg-gray-100">
                            Batal
                        </button>

                    </div>

                </form>

            </div>

        </div>

    </div>

</x-app-layout>
