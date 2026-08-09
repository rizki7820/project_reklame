<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable([
    'nama',
    'telepon',
    'email',
    'instagram',
    'alamat',
    'jam_operasional',
    'maps_url',
    'whatsapp_url',
    'status',
])]
class Contact extends Model
{
    protected $casts = [
        'status' => 'boolean',
    ];
}
