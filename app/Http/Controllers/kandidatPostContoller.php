<?php

namespace App\Http\Controllers;

use App\Models\Kandidat;
use Illuminate\Http\Request;
use Illuminate\view\view;

class kandidatPostContoller extends Controller
{

    public function index(): view
    {
        $kandidats = Kandidat::latest()->paginate(5);
        return view('kandidats.index', compact('kandidats'));
    }

    public function create(): view
    {
        return view('kandidats.create');
    }

    public function store(Request $request)
    {
        Kandidat::create([
            'nama' => $request->nama,
            'visi' => $request->visi,
            'misi' => $request->misi,
        ]);
        return redirect('kandidats')->with('message', 'kelas done Add');
    }

    public function show(string $id): View
    {
        $kandidat = Kandidat::findOrFail($id);
        return view('kandidats.show', compact('kandidat'));
    }

    public function edit(string $id): view
    {
        $kandidat = Kandidat::findOrFail($id);
        return view('kandidats.edit', compact('kandidat'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'visi' => 'required|string|max:255',
            'misi' => 'required|string|max:255',
        ]);

        $kandidat = Kandidat::findOrFail($id);

        // Lakukan pembaruan data kelas
        $kandidat->update([
            'nama' => $request->nama,
            'visi' => $request->visi,
            'misi' => $request->misi,
        ]);
        return redirect()->route('kandidats.index')->with('message', 'Data kelas berhasil diperbarui');
    }

    public function destroy(string $id)
    {
        $kandidat = Kandidat::findOrFail($id);

        if ($kandidat) {
            $kandidat->delete();
            return redirect()->route('kandidats.index')->with('message', 'Data kandidat berhasil dihapus');
        }

        return redirect()->route('kandidats.index')->with('error', 'Data kandidat tidak ditemukan');
    }
}
