<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $table = 'banner';

    protected $fillable = [
        'judul', 'subjudul', 'gambar', 'tombol_text', 'tombol_link', 'urutan', 'status'
    ];

    protected $casts = [
        'status' => 'boolean',
    ];
}
