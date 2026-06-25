<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $table = 'artikel';

    protected $fillable = [
        'judul', 'slug', 'konten', 'ringkasan', 'thumbnail',
        'kategori', 'penulis', 'tanggal_publish', 'status'
    ];

    protected $casts = [
        'tanggal_publish' => 'date',
        'status' => 'boolean',
    ];
}
