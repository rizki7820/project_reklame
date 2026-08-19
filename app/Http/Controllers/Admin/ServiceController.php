<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ServiceController extends Controller
{
    // ==========================================
    // METHOD PUBLIK / FRONT-END
    // ==========================================

    /**
     * Halaman Landing Page Utama (/)
     */
    public function landing()
    {
        $services = Service::where('status', true)
            ->orderBy('urutan')
            ->get();

        return view('index', compact('services'));
    }

    /**
     * Halaman Katalog Semua Layanan (/services)
     */
    public function publicIndex()
    {
        $services = Service::where('status', true)
            ->orderBy('urutan')
            ->get();

        return view('layanan', compact('services'));
    }

    /**
     * Halaman Detail Layanan (/services/{slug})
     */
    public function show(Service $service)
    {
        if (!$service->status) {
            abort(404);
        }

        return view('services.show', compact('service'));
    }

    // ==========================================
    // METHOD ADMIN / BACK-END
    // ==========================================

    public function index()
    {
        $services = Service::orderBy('urutan')->get();
        return view('admin.services.index', compact('services'));
    }

    public function create()
    {
        return view('admin.services.form', ['service' => new Service]);
    }

    public function store(Request $request)
    {
        $data = $this->validated($request);

        if ($request->hasFile('gambar')) {
            $data['gambar'] = $request->file('gambar')->store('services', 'public');
        }

        Service::create($data);

        return redirect()->route('admin.services.index')->with('success', 'Layanan berhasil ditambahkan.');
    }

    public function edit(Service $service)
    {
        return view('admin.services.form', compact('service'));
    }

    public function update(Request $request, Service $service)
    {
        $data = $this->validated($request);

        if ($request->hasFile('gambar')) {
            if ($service->gambar) {
                Storage::disk('public')->delete($service->gambar);
            }
            $data['gambar'] = $request->file('gambar')->store('services', 'public');
        }

        $service->update($data);

        return redirect()->route('admin.services.index')->with('success', 'Layanan berhasil diperbarui.');
    }

    public function destroy(Service $service)
    {
        if ($service->gambar) {
            Storage::disk('public')->delete($service->gambar);
        }
        $service->delete();

        return redirect()->route('admin.services.index')->with('success', 'Layanan berhasil dihapus.');
    }

    private function validated(Request $request): array
    {
        $data = $request->validate([
            'nama_layanan' => 'required|string|max:255',
            'video'        => 'nullable|url',
            'gambar'       => 'nullable|image|max:2048',
            'deskripsi'    => 'nullable|string',
            'urutan'       => 'nullable|integer|min:0',
            'status'       => 'nullable|boolean',
        ]);

        $data['slug']   = Str::slug($request->nama_layanan);
        $data['status'] = $request->boolean('status');
        $data['urutan'] = $data['urutan'] ?? 0;

        return $data;
    }
}