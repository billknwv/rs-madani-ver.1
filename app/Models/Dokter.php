<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    protected $table = 'dokter';

    protected $fillable = [
        'nama', 'foto', 'spesialis_id', 'about', 'email', 'telepon', 'str', 'pendidikan'
    ];

    public function spesialis()
    {
        return $this->belongsTo(Spesialis::class);
    }

    public function jadwal()
    {
        return $this->hasMany(JadwalDokter::class);
    }

    public function janjiTemu()
    {
        return $this->hasMany(JanjiTemu::class);
    }

    public function getJadwalTersediaAttribute()
    {
        return $this->jadwal()->where('status', 'aktif')->get();
    }
}
