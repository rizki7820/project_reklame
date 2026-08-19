<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    // ==========================================
    // METHOD PUBLIK / FRONT-END
    // ==========================================

    /**
     * Halaman Daftar Artikel (/artikel)
     */
    public function publicIndex(Request $request)
    {
        $query = Article::with('service')
            ->where('status', true);

        // Filter berdasarkan kategori/layanan jika ada
        if ($request->filled('service')) {
            $query->whereHas('service', function ($q) use ($request) {
                $q->where('slug', $request->service);
            });
        }

        // Pencarian judul/konten jika ada
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('judul', 'like', "%{$search}%")
                  ->orWhere('excerpt', 'like', "%{$search}%");
            });
        }

        $articles = $query->orderBy('urutan')
            ->orderByDesc('published_at')
            ->paginate(9)
            ->withQueryString();

        $services = Service::where('status', true)->orderBy('nama_layanan')->get();

        return view('artikel', compact('articles', 'services'));
    }

    /**
     * Halaman Detail Artikel (/artikel/{slug})
     */
    public function show(Article $article)
    {
        if (!$article->status) {
            abort(404);
        }

        $article->load('service');

        // Mengambil artikel terkait lainnya
        $recentArticles = Article::where('status', true)
            ->where('id', '!=', $article->id)
            ->latest('published_at')
            ->take(4)
            ->get();

        return view('artikel-detail', compact('article', 'recentArticles'));
    }

    // ==========================================
    // METHOD ADMIN / BACK-END
    // ==========================================

    public function index()
    {
        $articles = Article::with('service')
            ->orderBy('urutan')
            ->orderByDesc('published_at')
            ->get();

        $services = Service::orderBy('nama_layanan')->get();

        return view('admin.articles.index', compact('articles', 'services'));
    }

    public function store(Request $request)
    {
        $data = $this->validated($request);

        if ($request->hasFile('gambar')) {
            $data['gambar'] = $request->file('gambar')->store('articles', 'public');
        }

        $data['slug'] = $this->makeUniqueSlug($data['slug'] ?? $data['judul']);

        Article::create($data);

        return redirect()->route('admin.articles.index')->with('success', 'Artikel berhasil ditambahkan.');
    }

    public function update(Request $request, Article $article)
    {
        $data = $this->validated($request);

        if ($request->hasFile('gambar')) {
            if ($article->gambar) {
                Storage::disk('public')->delete($article->gambar);
            }

            $data['gambar'] = $request->file('gambar')->store('articles', 'public');
        }

        $data['slug'] = $this->makeUniqueSlug(
            $data['slug'] ?? $data['judul'],
            $article->id
        );

        $article->update($data);

        return redirect()->route('admin.articles.index')->with('success', 'Artikel berhasil diperbarui.');
    }

    public function destroy(Article $article)
    {
        if ($article->gambar) {
            Storage::disk('public')->delete($article->gambar);
        }

        $article->delete();

        return redirect()->route('admin.articles.index')->with('success', 'Artikel berhasil dihapus.');
    }

    private function validated(Request $request): array
    {
        $data = $request->validate([
            'service_id'   => 'nullable|exists:services,id',
            'judul'        => 'required|string|max:255',
            'slug'         => 'nullable|string|max:255',
            'excerpt'      => 'nullable|string',
            'konten'       => 'nullable|string',
            'gambar'       => 'nullable|image|max:2048',
            'urutan'       => 'nullable|integer|min:0',
            'status'       => 'nullable|boolean',
            'published_at' => 'nullable|date',
        ]);

        $data['status'] = $request->boolean('status');
        $data['urutan'] = $data['urutan'] ?? 0;

        return $data;
    }

    private function makeUniqueSlug(string $value, ?int $ignoreId = null): string
    {
        $slug = Str::slug($value);
        $original = $slug;
        $counter = 1;

        while (
            Article::where('slug', $slug)
                ->when(
                    $ignoreId,
                    fn ($query) => $query->where('id', '!=', $ignoreId)
                )
                ->exists()
        ) {
            $slug = $original . '-' . $counter;
            $counter++;
        }

        return $slug;
    }
}