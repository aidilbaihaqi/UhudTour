<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HajiController;
use App\Http\Controllers\UmrahController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['middleware'=>'guest'], function() {
    Route::get('login', [AuthController::class, 'index'])->name('login');
    Route::post('login', [AuthController::class, 'authenticate'])->name('authenticate');

    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('paket-umrah', [HomeController::class, 'umrah'])->name('index-umrah');
    Route::get('paket-haji', [HomeController::class, 'haji'])->name('index-haji');
    
    Route::get('paket-umrah/{umrah}', [HomeController::class, 'showUmrah'])->name('show-umrah');
    Route::post('paket-umrah/{umrah}', [OrderController::class, 'storeUmrah'])->name('store-umrah');

    Route::get('paket-haji/{haji}', [HomeController::class, 'showHaji'])->name('show-haji');
    Route::post('paket-haji/{haji}', [OrderController::class, 'storeHaji'])->name('store-haji');
});

Route::group(['middleware'=>'auth'], function() {
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

    Route::resource('umrah', UmrahController::class);
    Route::resource('haji', HajiController::class);
    Route::resource('order', OrderController::class);
});

