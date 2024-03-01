<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{
    public function index(): View {
        $data = Order::all();
        return view('pages.order.index', compact('data'));
    }
    public function destroy(string $id): RedirectResponse {
        $data = Order::findOrFail($id);
        $data->delete();

        return redirect()->route('order.index')->with(['success'=>'Data berhasil dihapus']);
    }
    public function storeUmrah(Request $request): RedirectResponse {
        Order::create([
            'umrah_id' => $request->umrah_id,
            'nama' => $request->nama,
            'umur' => $request->umur,
            'alamat' => $request->alamat,
            'telp' => $request->telp,
            'jamaah' => $request->jamaah,
            'total' => $request->total
        ]);

        return back()->with(['success'=>'Terimakasih telah membeli paket ini']);
        
    }
    public function storeHaji(Request $request): RedirectResponse {
        Order::create([
            'haji_id' => $request->haji_id,
            'nama' => $request->nama,
            'umur' => $request->umur,
            'alamat' => $request->alamat,
            'telp' => $request->telp,
            'jamaah' => $request->jamaah,
            'total' => $request->total
        ]);

        return back()->with(['success'=>'Terimakasih telah membeli paket ini']);
        
    }
}
