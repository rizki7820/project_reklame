<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

#[Fillable(['nama_layanan', 'slug', 'gambar', 'video', 'deskripsi', 'urutan', 'status'])]
class Service extends Model
{
    protected $casts = ['status' => 'boolean'];

    protected static function booted(): void
    {
        static::creating(function (Service $service) {
            if (empty($service->slug)) {
                $service->slug = Str::slug($service->nama_layanan);
            }
        });

        static::updating(function (Service $service) {
            if (empty($service->slug) && $service->isDirty('nama_layanan')) {
                $service->slug = Str::slug($service->nama_layanan);
            }
        });
    }

    public function scopeAktif($query)
    {
        return $query->where('status', true)->orderBy('urutan');
    }

    public function getGambarUrlAttribute(): ?string
    {
        return $this->gambar ? asset('storage/'.$this->gambar) : null;
    }

    public function projects()
{
    return $this->hasMany(Project::class);
}
}
