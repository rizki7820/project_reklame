<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['service_id', 'project_id', 'judul', 'jenis', 'file', 'video_url', 'urutan', 'status'])]
class Gallery extends Model
{
    protected $casts = ['status' => 'boolean'];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function scopeAktif($query)
    {
        return $query->where('status', true)->orderBy('urutan');
    }

    public function getFileUrlAttribute(): ?string
    {
        return $this->file ? asset('storage/'.$this->file) : null;
    }
}
