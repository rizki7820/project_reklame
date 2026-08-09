<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

#[Fillable(['service_id', 'judul_proyek', 'slug', 'lokasi', 'segmen_klien', 'tahun', 'deskripsi', 'gambar', 'tags', 'urutan', 'status'])]
class Project extends Model
{
    protected $casts = ['status' => 'boolean'];

    protected static function booted(): void
    {
        static::creating(function (Project $project) {
            if (empty($project->slug)) {
                $project->slug = Str::slug($project->judul_proyek);
            }
        });

        static::updating(function (Project $project) {
            if ($project->isDirty('judul_proyek')) {
                $project->slug = Str::slug($project->judul_proyek);
            }
        });
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function scopeAktif($query)
    {
        return $query->where('status', true)->orderBy('urutan');
    }

    public function getGambarUrlAttribute(): ?string
    {
        return $this->gambar ? asset('storage/'.$this->gambar) : null;
    }

    // helper buat pecah tags jadi array, dipakai di view nanti
    public function getTagListAttribute(): array
    {
        return $this->tags ? array_map('trim', explode(',', $this->tags)) : [];
    }
}
