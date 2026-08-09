<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Portfolio extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'thumbnail',
        'client_name',
        'location',
        'project_year',
        'description',
        'featured',
        'sort_order',
        'is_active',
    ];

    protected static function booted()
    {
        static::creating(function ($portfolio) {
            if (empty($portfolio->slug)) {
                $portfolio->slug = Str::slug($portfolio->title);
            }
        });

        static::updating(function ($portfolio) {
            if (empty($portfolio->slug)) {
                $portfolio->slug = Str::slug($portfolio->title);
            }
        });
    }

    public function categories()
    {
        return $this->belongsToMany(
            ServiceCategory::class,
            'portfolio_service_category'
        );
    }

    public function images()
    {
        return $this->hasMany(PortfolioImage::class);
    }

    public function tags()
    {
        return $this->belongsToMany(
            PortfolioTag::class,
            'portfolio_tag'
        );
    }
}
