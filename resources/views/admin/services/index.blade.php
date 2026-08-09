<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Layanan
        </h2>
    </x-slot>

    <style>[x-cloak] { display: none !important; }</style>

    <div class="py-8"
         x-data="{
            open: false,
            mode: 'create',
            previewUrl: null,
            service: { id: null, nama_layanan: '', video: '', deskripsi: '', urutan: 0, status: true, gambar_url: null },
            openCreate() {
                this.mode = 'create';
                this.previewUrl = null;
                this.service = { id: null, nama_layanan: '', video: '', deskripsi: '', urutan: 0, status: true, gambar_url: null };
                this.open = true;
            },
            openEdit(s) {
                this.mode = 'edit';
                this.previewUrl = null;
                this.service = s;
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
                <h1 class="text-lg font-semibold">Daftar Layanan</h1>
                <button @click="openCreate()"
                        class="px-5 py-2 rounded-lg bg-gray-800 text-white text-sm font-semibold hover:bg-gray-700">
                    + Tambah Layanan
                </button>
            </div>

            <div class="bg-white shadow-sm sm:rounded-lg overflow-hidden">
                <table class="w-full text-sm">
                    <thead>
                        <tr class="text-left text-gray-500 uppercase tracking-wider text-xs bg-gray-50 border-b">
                            <th class="px-6 py-3">Gambar</th>
                            <th class="px-6 py-3">Nama Layanan</th>
                            <th class="px-6 py-3">Video</th>
                            <th class="px-6 py-3">Urutan</th>
                            <th class="px-6 py-3">Status</th>
                            <th class="px-6 py-3 text-right">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y">
                        @forelse ($services as $s)
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4">
                                    @if ($s->gambar)
                                        <img src="{{ $s->gambar_url }}" class="w-14 h-14 object-cover rounded-lg">
                                    @else
                                        <div class="w-14 h-14 rounded-lg bg-gray-100 flex items-center justify-center text-gray-400 text-xs">N/A</div>
                                    @endif
                                </td>
                                <td class="px-6 py-4">
                                    <div class="font-medium text-gray-800">{{ $s->nama_layanan }}</div>
                                    <div class="text-gray-400 text-xs">{{ $s->slug }}</div>
                                </td>
                                <td class="px-6 py-4 text-gray-500">{{ $s->video ? '✓ ada' : '-' }}</td>
                                <td class="px-6 py-4 text-gray-500">{{ $s->urutan }}</td>
                                <td class="px-6 py-4">
                                    @if ($s->status)
                                        <span class="px-3 py-1 rounded-full bg-green-50 text-green-600 text-xs">Aktif</span>
                                    @else
                                        <span class="px-3 py-1 rounded-full bg-gray-100 text-gray-500 text-xs">Nonaktif</span>
                                    @endif
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex justify-end gap-2">
                                        <button @click="openEdit(@js($s->only(['id','nama_layanan','video','deskripsi','urutan','status','gambar_url'])))"
                                                class="px-3 py-2 rounded-lg border border-gray-300 text-gray-700 hover:bg-gray-100 text-xs">
                                            Edit
                                        </button>
                                        <form action="{{ route('admin.services.destroy', $s) }}" method="POST"
                                              onsubmit="return confirm('Yakin ingin menghapus layanan ini?')">
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
                                    Belum ada layanan.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        <!-- ===== MODAL ===== -->
        <div x-show="open" x-cloak
             class="fixed inset-0 z-25 flex items-center justify-center p-4"
             style="background: rgba(0,0,0,.5)">

            <div @click.outside="open = false"
                 x-show="open"
                 class="bg-white rounded-xl shadow-xl w-[90v] max-h-[90vh] overflow-y-auto">

                <div class="flex items-center justify-between px-6 py-4 border-b">
                    <h3 class="font-semibold text-lg" x-text="mode === 'create' ? 'Tambah Layanan' : 'Edit Layanan'"></h3>
                    <button @click="open = false" class="text-gray-400 hover:text-gray-600 text-xl leading-none">&times;</button>
                </div>

                <form :action="mode === 'create' ? '{{ route('admin.services.store') }}' : '{{ url('admin/services') }}/' + service.id"
                      method="POST" enctype="multipart/form-data" class="p-6 space-y-5">
                    @csrf
                    <input type="hidden" name="_method" :value="mode === 'edit' ? 'PUT' : 'POST'">

                    <div>
                        <label class="block text-sm text-gray-600 mb-1">Nama Layanan *</label>
                        <input type="text" name="nama_layanan" x-model="service.nama_layanan"
                               class="w-full border-gray-300 rounded-lg" required>
                    </div>

                    <div class="grid grid-cols-2 gap-6">
                       <div>
                            <label class="block text-xs text-gray-600 mb-1">Gambar</label>

                            <template x-if="previewUrl || service.gambar_url">
                                <div class="w-full rounded-lg overflow-hidden mb-2" style="height: 160px;">
                                    <img :src="previewUrl || service.gambar_url"
                                        style="width: 100%; height: 100%; object-fit: cover; display: block;">
                                </div>
                            </template>

                            <input type="file" name="gambar" accept="image/*" class="w-full text-xs" @change="handleFileChange($event)">
                        </div>

                        <div>
                            <label class="block text-sm text-gray-600 mb-1">Link Video (opsional)</label>
                            <input type="text" name="video" x-model="service.video"
                                   placeholder="https://youtube.com/embed/..."
                                   class="w-full border-gray-300 rounded-lg">
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm text-gray-600 mb-1">Deskripsi</label>
                        <textarea name="deskripsi" rows="3" x-model="service.deskripsi"
                                  class="w-full border-gray-300 rounded-lg"></textarea>
                    </div>

                    <div class="grid grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm text-gray-600 mb-1">Urutan</label>
                            <input type="number" name="urutan" min="0" x-model="service.urutan"
                                   class="w-full border-gray-300 rounded-lg">
                        </div>
                        <div class="flex items-center gap-2 pt-7">
                            <input type="checkbox" name="status" value="1" x-model="service.status">
                            <label class="text-sm text-gray-600">Aktif (tampil di halaman utama)</label>
                        </div>
                    </div>

                    <div class="flex gap-3 pt-2">
                        <button type="submit"
                                class="px-6 py-2 rounded-lg bg-gray-800 text-white font-semibold hover:bg-gray-700">
                            Simpan
                        </button>
                        <button type="button" @click="open = false"
                                class="px-6 py-2 rounded-lg border border-gray-300 text-gray-700 hover:bg-gray-100">
                            Batal
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
