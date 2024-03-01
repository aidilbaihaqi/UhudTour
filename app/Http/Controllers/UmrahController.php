<?php

namespace App\Http\Controllers;

use App\Models\Umrah;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Http\Request;

class UmrahController extends Controller
{
    public function index(): View {
        $data = Umrah::all();
        return view('pages.umrah.index', compact('data'));
    }
    public function create(): View {
        return view('pages.umrah.create');
    }
    public function store(Request $request): RedirectResponse {
        Umrah::create([
            'kode_paket' => $request->kode_paket,
            'nama_paket' => $request->nama_paket,
            'jenis_paket' => $request->jenis_paket,
            'hotel_mekkah' => $request->hotel_mekkah,
            'hotel_madinah' => $request->hotel_madinah,
            'program_hari' => $request->program_hari,
            'bandara_keberangkatan' => $request->bandara_keberangkatan,
            'keberangkatan' => $request->keberangkatan,
            'kamar' => $request->kamar,
            'harga' => $request->harga
        ]);

        return redirect()->route('umrah.index')->with(['success'=>'Paket berhasil ditambahkan!']);
    }
    public function destroy(string $id): RedirectResponse {
        $data = Umrah::findOrFail($id);
        $data->delete();

        return redirect()->route('umrah.index')->with(['success'=>'Paket berhasil dihapus!']);
    }
    public function edit(string $id): View {
        $data = Umrah::findOrFail($id);
        return view('pages.umrah.edit', compact('data'));
    }
    public function update(Request $request, string $id): RedirectResponse {
        $data = Umrah::findOrFail($id);

        $data->update([
            'kode_paket' => $request->kode_paket,
            'nama_paket' => $request->nama_paket,
            'jenis_paket' => $request->jenis_paket,
            'hotel_mekkah' => $request->hotel_mekkah,
            'hotel_madinah' => $request->hotel_madinah,
            'program_hari' => $request->program_hari,
            'bandara_keberangkatan' => $request->bandara_keberangkatan,
            'keberangkatan' => $request->keberangkatan,
            'kamar' => $request->kamar,
            'harga' => $request->harga
        ]);

        return redirect()->route('umrah.index')->with(['success'=>'Paket berhasil diubah!']);
    }
}
