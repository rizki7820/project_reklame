<x-app-layout>

<div class="max-w-7xl mx-auto py-8">

    <div class="flex justify-between mb-6">

        <h2 class="text-2xl font-bold">
            Kategori Layanan
        </h2>

        <a
            href="{{ route('admin.service-categories.create') }}"
            class="px-5 py-2 bg-blue-600 text-white rounded">

            Tambah

        </a>

    </div>

    <table class="w-full border">

        <thead class="bg-gray-100">

        <tr>

            <th class="p-3">Gambar</th>

            <th>Nama</th>

            <th>Status</th>

            <th>Aksi</th>

        </tr>

        </thead>

        <tbody>

        @foreach($categories as $item)

            <tr class="border-t">

                <td class="p-3">

                    @if($item->image)

                        <img
                            src="{{ asset('storage/'.$item->image) }}"
                            class="w-20 h-20 object-cover rounded">

                    @endif

                </td>

                <td>{{ $item->name }}</td>

                <td>

                    {{ $item->is_active ? 'Aktif' : 'Nonaktif' }}

                </td>

                <td>

                    <a
                        href="{{ route('admin.service-categories.edit',$item) }}"
                        class="text-blue-600">

                        Edit

                    </a>

                    |

                    <form
                        action="{{ route('admin.service-categories.destroy',$item) }}"
                        method="POST"
                        class="inline">

                        @csrf
                        @method('DELETE')

                        <button
                            onclick="return confirm('Hapus?')"
                            class="text-red-600">

                            Hapus

                        </button>

                    </form>

                </td>

            </tr>

        @endforeach

        </tbody>

    </table>

    <div class="mt-6">

        {{ $categories->links() }}

    </div>

</div>

</x-app-layout>
