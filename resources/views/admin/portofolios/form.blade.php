<x-app-layout>

<div class="max-w-5xl mx-auto py-8">

<form
action="{{ $portfolio->exists ? route('admin.portfolios.update',$portfolio) : route('admin.portfolios.store') }}"
method="POST"
enctype="multipart/form-data">

@csrf

@if($portfolio->exists)
@method('PUT')
@endif

<div class="grid grid-cols-1 md:grid-cols-2 gap-6">

    {{-- Thumbnail --}}
    <div class="md:col-span-2">
        <label class="block mb-2 font-semibold">
            Thumbnail
        </label>

        <input
            type="file"
            name="thumbnail"
            class="w-full border rounded p-3">

        @if($portfolio->thumbnail)
            <img
                src="{{ asset('storage/'.$portfolio->thumbnail) }}"
                class="mt-3 w-40 rounded">
        @endif
    </div>

    {{-- Judul --}}
    <div>
        <label>Judul Project</label>

        <input
            type="text"
            name="title"
            value="{{ old('title',$portfolio->title) }}"
            class="w-full border rounded p-3">
    </div>

    {{-- Tahun --}}
    <div>
        <label>Tahun</label>

        <input
            type="number"
            name="project_year"
            value="{{ old('project_year',$portfolio->project_year) }}"
            class="w-full border rounded p-3">
    </div>

    {{-- Client --}}
    <div>
        <label>Nama Client</label>

        <input
            type="text"
            name="client_name"
            value="{{ old('client_name',$portfolio->client_name) }}"
            class="w-full border rounded p-3">
    </div>

    {{-- Lokasi --}}
    <div>
        <label>Lokasi</label>

        <input
            type="text"
            name="location"
            value="{{ old('location',$portfolio->location) }}"
            class="w-full border rounded p-3">
    </div>

    {{-- Kategori --}}
    <div class="md:col-span-2">

        <label class="block mb-2">
            Kategori Layanan
        </label>

        <select
            name="categories[]"
            multiple
            class="w-full border rounded p-3 h-48">

            @foreach($categories as $category)

                <option
                    value="{{ $category->id }}"
                    @selected($portfolio->exists && $portfolio->categories->contains($category->id))
                >
                    {{ $category->name }}
                </option>

            @endforeach

        </select>

        <small class="text-gray-500">
            Tekan CTRL untuk memilih lebih dari satu.
        </small>

    </div>

    {{-- Deskripsi --}}
    <div class="md:col-span-2">

        <label>Deskripsi</label>

        <textarea
            name="description"
            rows="5"
            class="w-full border rounded p-3">{{ old('description',$portfolio->description) }}</textarea>

    </div>

    {{-- Featured --}}
    <div>

        <label>

            <input
                type="checkbox"
                name="featured"
                {{ old('featured',$portfolio->featured) ? 'checked' : '' }}>

            Featured

        </label>

    </div>

    {{-- Aktif --}}
    <div>

        <label>

            <input
                type="checkbox"
                name="is_active"
                {{ old('is_active',$portfolio->is_active) ? 'checked' : '' }}>

            Aktif

        </label>

    </div>

    {{-- Urutan --}}
    <div>

        <label>Urutan</label>

        <input
            type="number"
            name="sort_order"
            value="{{ old('sort_order',$portfolio->sort_order) }}"
            class="w-full border rounded p-3">

    </div>

</div>

<button
class="mt-8 px-8 py-3 bg-blue-600 text-white rounded">

Simpan

</button>

</form>

</div>

</x-app-layout>
