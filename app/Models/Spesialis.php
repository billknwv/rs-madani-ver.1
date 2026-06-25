<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Spesialis extends Model
{
    protected $table = 'spesialis';

    protected $fillable = [
        'nama', 'deskripsi', 'icon'
    ];

    public function dokter()
    {
        return $this->hasMany(Dokter::class);
    }
}
