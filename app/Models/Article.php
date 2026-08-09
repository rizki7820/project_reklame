<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable([
    'service_id',
    'judul',
    'slug',
    'excerpt',
    'konten',
    'gambar',
    'urutan',
    'status',
    'published_at',
])]
class Article extends Model
{
    protected $casts = [
        'status' => 'boolean',
        'published_at' => 'datetime',
    ];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function scopeAktif($query)
    {
        return $query
            ->where('status', true)
            ->orderBy('urutan');
    }

    public function getGambarUrlAttribute(): ?string
    {
        return $this->gambar
            ? asset('storage/' . $this->gambar)
            : null;
    }
}
