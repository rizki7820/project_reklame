<x-app-layout>

<div class="max-w-3xl mx-auto py-8">

<form
action="{{ $category->exists ? route('admin.service-categories.update',$category) : route('admin.service-categories.store') }}"
method="POST"
enctype="multipart/form-data">

@csrf

@if($category->exists)
@method('PUT')
@endif

<div class="space-y-5">

<div>

<label>Nama</label>

<input
type="text"
name="name"
value="{{ old('name',$category->name) }}"
class="w-full border rounded p-3">

</div>

<div>

<label>Gambar</label>

<input
type="file"
name="image"
class="w-full">

</div>

@if($category->image)

<img
src="{{ asset('storage/'.$category->image) }}"
class="w-32 rounded">

@endif

<div>

<label>Deskripsi</label>

<textarea
name="description"
rows="5"
class="w-full border rounded p-3">{{ old('description',$category->description) }}</textarea>

</div>

<div>

<label>Urutan</label>

<input
type="number"
name="sort_order"
value="{{ old('sort_order',$category->sort_order) }}"
class="w-full border rounded p-3">

</div>

<div>

<label>

<input
type="checkbox"
name="is_active"
{{ old('is_active',$category->is_active) ? 'checked' : '' }}>

Aktif

</label>

</div>

<button
class="px-6 py-3 bg-blue-600 text-white rounded">

Simpan

</button>

</div>

</form>

</div>

</x-app-layout>
