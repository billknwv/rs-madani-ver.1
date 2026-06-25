<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Dokter;
use App\Models\Spesialis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DokterController extends Controller
{
    public function index()
    {
        $dokter = Dokter::with('spesialis')->latest()->paginate(10);
        return view('admin.dokter.index', compact('dokter'));
    }

    public function create()
    {
        $spesialis = Spesialis::all();
        return view('admin.dokter.create', compact('spesialis'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'spesialis_id' => 'required|exists:spesialis,id',
            'about' => 'nullable|string',
            'email' => 'nullable|email',
            'telepon' => 'nullable|string|max:20',
            'str' => 'nullable|string',
            'pendidikan' => 'nullable|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $data = $request->except('foto');

        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')->store('dokter', 'public');
        }

        Dokter::create($data);

        return redirect()->route('admin.dokter.index')->with('success', 'Dokter berhasil ditambahkan.');
    }

    public function edit(Dokter $dokter)
    {
        $spesialis = Spesialis::all();
        return view('admin.dokter.edit', compact('dokter', 'spesialis'));
    }

    public function update(Request $request, Dokter $dokter)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'spesialis_id' => 'required|exists:spesialis,id',
            'about' => 'nullable|string',
            'email' => 'nullable|email',
            'telepon' => 'nullable|string|max:20',
            'str' => 'nullable|string',
            'pendidikan' => 'nullable|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $data = $request->except('foto');

        if ($request->hasFile('foto')) {
            if ($dokter->foto) {
                Storage::disk('public')->delete($dokter->foto);
            }
            $data['foto'] = $request->file('foto')->store('dokter', 'public');
        }

        $dokter->update($data);

        return redirect()->route('admin.dokter.index')->with('success', 'Dokter berhasil diperbarui.');
    }

    public function destroy(Dokter $dokter)
    {
        if ($dokter->foto) {
            Storage::disk('public')->delete($dokter->foto);
        }
        $dokter->delete();

        return redirect()->route('admin.dokter.index')->with('success', 'Dokter berhasil dihapus.');
    }
}
