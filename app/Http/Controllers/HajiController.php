<?php

namespace App\Http\Controllers;

use App\Models\Haji;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class HajiController extends Controller
{
    public function index(): View {
        $data = Haji::all();
        return view('pages.haji.index', compact('data'));
    }
    public function create(): View {
        return view('pages.haji.create');
    }
    public function store(Request $request): RedirectResponse {
        Haji::create([
            'kode_paket' => $request->kode_paket,
            'nama_paket' => $request->nama_paket,
            'jenis_paket' => $request->jenis_paket,
            'hotel_mekkah' => $request->hotel_mekkah,
            'hotel_madinah' => $request->hotel_madinah,
            'arafah' => $request->arafah,
            'aziziyah' => $request->aziziyah,
            'mabit' => $request->mabit,
            'program_hari' => $request->program_hari,
            'bandara_keberangkatan' => $request->bandara_keberangkatan,
            'keberangkatan' => $request->keberangkatan,
            'tahun_keberangkatan' => $request->tahun_keberangkatan,
            'kamar' => $request->kamar,
            'harga' => $request->harga
        ]);

        return redirect()->route('haji.index')->with(['success'=>'Paket berhasil ditambahkan!']);
    }
    public function destroy(string $id): RedirectResponse {
        $data = Haji::findOrFail($id);
        $data->delete();

        return redirect()->route('haji.index')->with(['success'=>'Paket berhasil dihapus!']);
    }
    public function edit(string $id): View {
        $data = Haji::findOrFail($id);
        return view('pages.haji.edit', compact('data'));
    }
    public function update(Request $request, string $id): RedirectResponse {
        $data = Haji::findOrFail($id);

        $data->update([
            'kode_paket' => $request->kode_paket,
            'nama_paket' => $request->nama_paket,
            'jenis_paket' => $request->jenis_paket,
            'hotel_mekkah' => $request->hotel_mekkah,
            'hotel_madinah' => $request->hotel_madinah,
            'arafah' => $request->arafah,
            'aziziyah' => $request->aziziyah,
            'mabit' => $request->mabit,
            'program_hari' => $request->program_hari,
            'bandara_keberangkatan' => $request->bandara_keberangkatan,
            'keberangkatan' => $request->keberangkatan,
            'tahun_keberangkatan' => $request->tahun_keberangkatan,
            'kamar' => $request->kamar,
            'harga' => $request->harga
        ]);

        return redirect()->route('haji.index')->with(['success'=>'Paket berhasil diubah!']);
    }
}
