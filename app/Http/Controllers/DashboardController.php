<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Jenis;
use App\Models\Ruang;
use App\Models\Barang;
use App\Models\Inventaris;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $jumlahJenis = Jenis::count();
        $jumlahRuang = Ruang::count();
        $jumlahBarang = Barang::count();
        $jumlahUser = User::count();
        $jumlahInventaris = Inventaris::count();

        return view('dashboard', compact('jumlahJenis', 'jumlahRuang', 'jumlahBarang', 'jumlahUser', 'jumlahInventaris'));
    }
}
