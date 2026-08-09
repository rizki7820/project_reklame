<x-app-layout>

<div class="max-w-4xl mx-auto py-8">

<form
action="{{ $testimonial->exists ? route('admin.testimonials.update',$testimonial) : route('admin.testimonials.store') }}"
method="POST"
enctype="multipart/form-data">

@csrf

@if($testimonial->exists)
@method('PUT')
@endif

<div class="grid grid-cols-1 md:grid-cols-2 gap-6">

    {{-- Foto --}}
    <div class="md:col-span-2">

        <label>Foto Client</label>

        <input
            type="file"
            name="photo"
            class="w-full border rounded p-3">

        @if($testimonial->photo)

            <img
                src="{{ asset('storage/'.$testimonial->photo) }}"
                class="mt-3 w-32 rounded">

        @endif

    </div>

    {{-- Nama --}}
    <div>

        <label>Nama</label>

        <input
            type="text"
            name="name"
            value="{{ old('name',$testimonial->name) }}"
            class="w-full border rounded p-3">

    </div>

    {{-- Perusahaan --}}
    <div>

        <label>Perusahaan</label>

        <input
            type="text"
            name="company"
            value="{{ old('company',$testimonial->company) }}"
            class="w-full border rounded p-3">

    </div>

    {{-- Jabatan --}}
    <div>

        <label>Jabatan</label>

        <input
            type="text"
            name="position"
            value="{{ old('position',$testimonial->position) }}"
            class="w-full border rounded p-3">

    </div>

    {{-- Rating --}}
    <div>

        <label>Rating</label>

        <select
            name="rating"
            class="w-full border rounded p-3">

            @for($i=1;$i<=5;$i++)

                <option
                    value="{{ $i }}"
                    @selected(old('rating',$testimonial->rating)==$i)>

                    {{ $i }} Bintang

                </option>

            @endfor

        </select>

    </div>

    {{-- Testimoni --}}
    <div class="md:col-span-2">

        <label>Testimoni</label>

        <textarea
            name="message"
            rows="5"
            class="w-full border rounded p-3">{{ old('message',$testimonial->message) }}</textarea>

    </div>

    {{-- Status --}}
    <div>

        <label>

            <input
                type="checkbox"
                name="is_active"
                {{ old('is_active',$testimonial->is_active) ? 'checked' : '' }}>

            Aktif

        </label>

    </div>

</div>

<button
class="mt-8 px-8 py-3 bg-blue-600 text-white rounded">

Simpan

</button>

</form>

</div>

</x-app-layout>
