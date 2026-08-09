<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Galeri
        </h2>
    </x-slot>

    <style>[x-cloak] { display: none !important; }</style>

    <div class="py-8"
         x-data="{
            open: false,
            mode: 'create',
            previewUrl: null,
            gallery: { id: null, service_id: '', project_id: '', judul: '', jenis: 'foto', video_url: '', urutan: 0, status: true, file_url: null },
            openCreate() {
                this.mode = 'create';
                this.previewUrl = null;
                this.gallery = { id: null, service_id: '', project_id: '', judul: '', jenis: 'foto', video_url: '', urutan: 0, status: true, file_url: null };
                this.open = true;
            },
            openEdit(g) {
                this.mode = 'edit';
                this.previewUrl = null;
                this.gallery = g;
                this.open = true;
            },
            handleFileChange(event) {
                const file = event.target.files[0];
                if (!file) { this.previewUrl = null; return; }
                const reader = new FileReader();
                reader.onload = (e) => { this.previewUrl = e.target.result; };
                reader.readAsDataURL(file);
            }
         }">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            @if (session('success'))
                <div class="mb-6 px-5 py-4 rounded-lg bg-green-50 border border-green-300 text-green-700">
                    {{ session('success') }}
                </div>
            @endif

            <div class="flex items-center justify-between mb-6 mt-6">
                <h1 class="text-lg font-semibold">Daftar Galeri</h1>
                <button @click="openCreate()"
                        class="px-5 py-2 rounded-lg bg-gray-800 text-white text-sm font-semibold hover:bg-gray-700">
                    + Tambah Item
                </button>
            </div>

            <div class="bg-white shadow-sm sm:rounded-lg overflow-hidden">
                <table class="w-full text-sm">
                    <thead>
                        <tr class="text-left text-gray-500 uppercase tracking-wider text-xs bg-gray-50 border-b">
                            <th class="px-6 py-3">Media</th>
                            <th class="px-6 py-3">Judul</th>
                            <th class="px-6 py-3">Jenis</th>
                            <th class="px-6 py-3">Kategori</th>
                            <th class="px-6 py-3">Status</th>
                            <th class="px-6 py-3 text-right">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y">
                        @forelse ($galleries as $g)
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4">
                                    @if ($g->jenis === 'foto' && $g->file)
                                        <img src="{{ $g->file_url }}" class="w-14 h-14 object-cover rounded-lg">
                                    @elseif ($g->jenis === 'video')
                                        <div class="w-14 h-14 rounded-lg bg-gray-100 flex items-center justify-center text-gray-400 text-xs">▶ Video</div>
                                    @else
                                        <div class="w-14 h-14 rounded-lg bg-gray-100 flex items-center justify-center text-gray-400 text-xs">N/A</div>
                                    @endif
                                </td>
                                <td class="px-6 py-4 text-gray-700">{{ $g->judul ?: '-' }}</td>
                                <td class="px-6 py-4">
                                    <span class="px-3 py-1 rounded-full text-xs {{ $g->jenis === 'video' ? 'bg-purple-50 text-purple-600' : 'bg-blue-50 text-blue-600' }}">
                                        {{ ucfirst($g->jenis) }}
                                    </span>
                                </td>
                                <td class="px-6 py-4 text-gray-500">{{ $g->service?->nama_layanan ?? '-' }}</td>
                                <td class="px-6 py-4">
                                    @if ($g->status)
                                        <span class="px-3 py-1 rounded-full bg-green-50 text-green-600 text-xs">Aktif</span>
                                    @else
                                        <span class="px-3 py-1 rounded-full bg-gray-100 text-gray-500 text-xs">Nonaktif</span>
                                    @endif
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex justify-end gap-2">
                                        <button @click="openEdit(@js($g->only(['id','service_id','project_id','judul','jenis','video_url','urutan','status','file_url'])))"
                                                class="px-3 py-2 rounded-lg border border-gray-300 text-gray-700 hover:bg-gray-100 text-xs">
                                            Edit
                                        </button>
                                        <form action="{{ route('admin.galleries.destroy', $g) }}" method="POST"
                                              onsubmit="return confirm('Yakin ingin menghapus item ini?')">
                                            @csrf @method('DELETE')
                                            <button type="submit"
                                                    class="px-3 py-2 rounded-lg border border-red-300 text-red-600 hover:bg-red-50 text-xs">
                                                Hapus
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="px-6 py-10 text-center text-gray-400">
                                    Belum ada item galeri.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        <!-- ===== MODAL ===== -->
        <div x-show="open" x-cloak
              class="fixed inset-0 z-50 flex items-center justify-center p-4"
             style="background: rgba(0,0,0,.5)">

            <div @click.outside="open = false"
                 x-show="open"
                 class="bg-white rounded-2xl shadow-2xl p-6 mx-auto my-8">

                <div class="flex items-center justify-between px-5 py-4 border-b">
                    <h3 class="font-semibold" x-text="mode === 'create' ? 'Tambah Item Galeri' : 'Edit Item Galeri'"></h3>
                    <button @click="open = false" class="text-gray-400 hover:text-gray-600 text-xl leading-none">&times;</button>
                </div>

                <form :action="mode === 'create' ? '{{ route('admin.galleries.store') }}' : '{{ url('admin/galleries') }}/' + gallery.id"
                      method="POST" enctype="multipart/form-data" class="p-5 space-y-4">
                    @csrf
                    <input type="hidden" name="_method" :value="mode === 'edit' ? 'PUT' : 'POST'">

                    <div>
                        <label class="block text-xs text-gray-600 mb-1">Jenis Media *</label>
                        <select name="jenis" x-model="gallery.jenis" class="w-full text-sm border-gray-300 rounded-lg">
                            <option value="foto">Foto</option>
                            <option value="video">Video</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-xs text-gray-600 mb-1">Judul (opsional)</label>
                        <input type="text" name="judul" x-model="gallery.judul"
                               class="w-full text-sm border-gray-300 rounded-lg">
                    </div>

                    <!-- Muncul kalau jenis = foto -->
                    <div x-show="gallery.jenis === 'foto'">
                        <label class="block text-xs text-gray-600 mb-1">File Gambar</label>
                        <template x-if="previewUrl || gallery.file_url">
                            <div class="w-full rounded-lg overflow-hidden mb-2" style="height: 160px;">
                                <img :src="previewUrl || gallery.file_url"
                                     style="width: 100%; height: 100%; object-fit: cover; display: block;">
                            </div>
                        </template>
                        <input type="file" name="file" accept="image/*"
                               class="w-full text-xs file:mr-3 file:py-2 file:px-3 file:rounded-lg file:border-0 file:bg-gray-100 file:text-gray-700 file:text-xs hover:file:bg-gray-200"
                               @change="handleFileChange($event)">
                    </div>

                    <!-- Muncul kalau jenis = video -->
                    <div x-show="gallery.jenis === 'video'">
                        <label class="block text-xs text-gray-600 mb-1">Link Video</label>
                        <input type="text" name="video_url" x-model="gallery.video_url"
                               placeholder="https://youtube.com/embed/..."
                               class="w-full text-sm border-gray-300 rounded-lg">
                    </div>

                    <div>
                        <label class="block text-xs text-gray-600 mb-1">Kategori (Layanan)</label>
                        <select name="service_id" x-model="gallery.service_id" class="w-full text-sm border-gray-300 rounded-lg">
                            <option value="">- Pilih Kategori -</option>
                            @foreach ($services as $s)
                                <option value="{{ $s->id }}">{{ $s->nama_layanan }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div>
                        <label class="block text-xs text-gray-600 mb-1">Terkait Proyek (opsional)</label>
                        <select name="project_id" x-model="gallery.project_id" class="w-full text-sm border-gray-300 rounded-lg">
                            <option value="">- Tidak ada -</option>
                            @foreach ($projects as $p)
                                <option value="{{ $p->id }}">{{ $p->judul_proyek }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div>
                        <label class="block text-xs text-gray-600 mb-1">Urutan</label>
                        <input type="number" name="urutan" min="0" x-model="gallery.urutan"
                               class="w-full text-sm border-gray-300 rounded-lg">
                    </div>

                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="status" value="1" x-model="gallery.status">
                        <label class="text-xs text-gray-600">Aktif (tampil di halaman galeri)</label>
                    </div>

                    <div class="flex gap-2 pt-2">
                        <button type="submit"
                                class="flex-1 px-4 py-2 rounded-lg bg-gray-800 text-white text-sm font-semibold hover:bg-gray-700">
                            Simpan
                        </button>
                        <button type="button" @click="open = false"
                                class="flex-1 px-4 py-2 rounded-lg border border-gray-300 text-gray-700 text-sm hover:bg-gray-100">
                            Batal
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
