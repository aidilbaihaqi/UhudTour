<?php

namespace App\Http\Controllers;

use App\Models\Haji;
use App\Models\Order;
use App\Models\Umrah;
use Illuminate\View\View;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(): View {
        $umrah = Umrah::all()->count();
        $haji = Haji::all()->count();
        $order = Order::all()->count();

        return view('pages.dashboard', [
            'umrah' => $umrah,
            'haji' => $haji,
            'order' => $order
        ]);
    }
}
