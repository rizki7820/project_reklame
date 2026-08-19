<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    // ==========================================
    // METHOD PUBLIK / FRONT-END
    // ==========================================

    /**
     * Halaman Publik Semua Proyek (/proyek)
     */
    public function publicIndex()
    {
        $projects = Project::with('service')
            ->where('status', true)
            ->orderBy('urutan')
            ->get();

        return view('project', compact('projects'));
    }

    /**
     * Halaman Detail Proyek (/proyek/{slug})
     */
    public function show(Project $project)
    {
        if (!$project->status) {
            abort(404);
        }

        return view('proyek-detail', compact('project'));
    }

    // ==========================================
    // METHOD ADMIN / BACK-END
    // ==========================================

    public function index()
    {
        $projects = Project::with('service')->orderBy('urutan')->get();
        $services = Service::orderBy('nama_layanan')->get();
        return view('admin.projects.index', compact('projects', 'services'));
    }

    public function create()
    {
        $services = Service::orderBy('nama_layanan')->get();
        return view('admin.projects.form', ['project' => new Project, 'services' => $services]);
    }

    public function store(Request $request)
    {
        $data = $this->validated($request);

        if ($request->hasFile('gambar')) {
            $data['gambar'] = $request->file('gambar')->store('projects', 'public');
        }

        Project::create($data);

        return redirect()->route('admin.projects.index')->with('success', 'Proyek berhasil ditambahkan.');
    }

    public function edit(Project $project)
    {
        $services = Service::orderBy('nama_layanan')->get();
        return view('admin.projects.form', compact('project', 'services'));
    }

    public function update(Request $request, Project $project)
    {
        $data = $this->validated($request);

        if ($request->hasFile('gambar')) {
            if ($project->gambar) {
                Storage::disk('public')->delete($project->gambar);
            }
            $data['gambar'] = $request->file('gambar')->store('projects', 'public');
        }

        $project->update($data);

        return redirect()->route('admin.projects.index')->with('success', 'Proyek berhasil diperbarui.');
    }

    public function destroy(Project $project)
    {
        if ($project->gambar) {
            Storage::disk('public')->delete($project->gambar);
        }
        $project->delete();

        return redirect()->route('admin.projects.index')->with('success', 'Proyek berhasil dihapus.');
    }

    private function validated(Request $request): array
    {
        $data = $request->validate([
            'service_id'   => 'nullable|exists:services,id',
            'judul_proyek' => 'required|string|max:255',
            'lokasi'       => 'nullable|string|max:255',
            'segmen_klien' => 'nullable|string|max:255',
            'tahun'        => 'nullable|integer|min:2000|max:' . (date('Y') + 1),
            'deskripsi'    => 'nullable|string',
            'gambar'       => 'nullable|image|max:2048',
            'tags'         => 'nullable|string|max:500',
            'urutan'       => 'nullable|integer|min:0',
            'status'       => 'nullable|boolean',
        ]);

        $data['slug']   = Str::slug($request->judul_proyek);
        $data['status'] = $request->boolean('status');
        $data['urutan'] = $data['urutan'] ?? 0;

        return $data;
    }
}