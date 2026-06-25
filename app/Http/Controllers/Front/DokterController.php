<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Dokter;
use App\Models\Spesialis;
use Illuminate\Http\Request;

class DokterController extends Controller
{
    public function index(Request $request)
    {
        $query = Dokter::with(['spesialis', 'jadwal']);

        if ($request->filled('search')) {
            $query->where('nama', 'like', '%' . $request->search . '%');
        }

        if ($request->filled('spesialis')) {
            $query->where('spesialis_id', $request->spesialis);
        }

        $dokter = $query->paginate(12);
        $spesialis = Spesialis::all();

        return view('dokter.index', compact('dokter', 'spesialis'));
    }

    public function detail($id)
    {
        $dokter = Dokter::with(['spesialis', 'jadwal' => function($q) {
            $q->where('status', 'aktif');
        }])->findOrFail($id);

        $dokter->jadwal = $dokter->jadwal->sortBy(function($jd) {
            $hari = ['Senin' => 1, 'Selasa' => 2, 'Rabu' => 3, 'Kamis' => 4, 'Jumat' => 5, 'Sabtu' => 6, 'Minggu' => 7];
            return $hari[$jd->hari] ?? 8;
        })->values();

        return view('dokter.detail', compact('dokter'));
    }
}
