<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\Project;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::with(['service', 'project'])->orderBy('urutan')->get();
        $services  = Service::orderBy('nama_layanan')->get();
        $projects  = Project::orderBy('judul_proyek')->get();

        return view('admin.galleries.index', compact('galleries', 'services', 'projects'));
    }

    public function store(Request $request)
    {
        $data = $this->validated($request);

        if ($request->hasFile('file')) {
            $data['file'] = $request->file('file')->store('galleries', 'public');
        }

        Gallery::create($data);

        return redirect()->route('admin.galleries.index')->with('success', 'Item galeri berhasil ditambahkan.');
    }

    public function update(Request $request, Gallery $gallery)
    {
        $data = $this->validated($request);

        if ($request->hasFile('file')) {
            if ($gallery->file) Storage::disk('public')->delete($gallery->file);
            $data['file'] = $request->file('file')->store('galleries', 'public');
        }

        $gallery->update($data);

        return redirect()->route('admin.galleries.index')->with('success', 'Item galeri berhasil diperbarui.');
    }

    public function destroy(Gallery $gallery)
    {
        if ($gallery->file) Storage::disk('public')->delete($gallery->file);
        $gallery->delete();

        return redirect()->route('admin.galleries.index')->with('success', 'Item galeri berhasil dihapus.');
    }

    private function validated(Request $request): array
    {
        $data = $request->validate([
            'service_id' => 'nullable|exists:services,id',
            'project_id' => 'nullable|exists:projects,id',
            'judul'      => 'nullable|string|max:255',
            'jenis'      => 'required|in:foto,video',
            'file'       => 'nullable|image|max:2048',
            'video_url'  => 'nullable|url',
            'urutan'     => 'nullable|integer|min:0',
            'status'     => 'nullable|boolean',
        ]);

        $data['status'] = $request->boolean('status');
        $data['urutan'] = $data['urutan'] ?? 0;

        return $data;
    }
}
