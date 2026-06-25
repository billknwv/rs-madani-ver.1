<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Artikel;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function index(Request $request)
    {
        $query = Artikel::where('status', true);

        if ($request->filled('search')) {
            $query->where(function($q) use ($request) {
                $q->where('judul', 'like', '%' . $request->search . '%')
                  ->orWhere('konten', 'like', '%' . $request->search . '%');
            });
        }

        if ($request->filled('kategori')) {
            $query->where('kategori', $request->kategori);
        }

        $artikel = $query->latest('tanggal_publish')->paginate(9);
        $kategori = Artikel::where('status', true)->select('kategori')->distinct()->pluck('kategori');

        return view('artikel.index', compact('artikel', 'kategori'));
    }

    public function detail($slug)
    {
        $artikel = Artikel::where('slug', $slug)->where('status', true)->firstOrFail();
        $artikelTerbaru = Artikel::where('status', true)
            ->where('id', '!=', $artikel->id)
            ->latest('tanggal_publish')
            ->take(4)
            ->get();

        return view('artikel.detail', compact('artikel', 'artikelTerbaru'));
    }
}
