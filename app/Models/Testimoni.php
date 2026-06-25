<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimoni extends Model
{
    protected $table = 'testimoni';

    protected $fillable = [
        'nama', 'foto', 'isi', 'profesi', 'rating', 'status'
    ];

    protected $casts = [
        'status' => 'boolean',
    ];
}
