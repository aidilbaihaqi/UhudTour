<?php

namespace App\Http\Controllers;

use App\Models\Haji;
use App\Models\Umrah;
use Illuminate\View\View;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(): View {
        return view('index');
    }
    public function umrah(): View {
        $data = Umrah::all();
        return view('umrah', compact('data'));
    }
    public function showUmrah(string $id): View {
        $data = Umrah::findOrFail($id);
        return view('detail-umrah', compact('data'));
    }
    public function haji(): View {
        $data = Haji::all();
        return view('haji', compact('data'));
    }
    public function showHaji(string $id): View {
        $data = Haji::findOrFail($id);
        return view('detail-haji', compact('data'));
    }
}
