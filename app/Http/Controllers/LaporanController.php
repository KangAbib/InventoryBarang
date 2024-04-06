<?php

namespace App\Http\Controllers;

use App\Models\Inventaris;
use App\Models\Barang;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LaporanController extends Controller
{
    public function index()
    {
        $data = Inventaris::all();
        return view('laporan', compact('data'));
    }
    public function baik()
    {
        $data = Inventaris::join('barangs', 'inventaris.barang_id', '=', 'barangs.id')
                        ->where('barangs.kondisi_id', 1)
                        ->get();
        return view('laporan', compact('data'));
    }
    public function rusak()
    {
        $data = Inventaris::join('barangs', 'inventaris.barang_id', '=', 'barangs.id')
                        ->where('barangs.kondisi_id', 2)
                        ->get();
        return view('laporan', compact('data'));
    }
    public function tersedia()
    {
        $data = Inventaris::join('barangs', 'inventaris.barang_id', '=', 'barangs.id')
                        ->where('barangs.kondisi_id', 3)
                        ->get();
        return view('laporan', compact('data'));
    }
    public function habis()
    {
        $data = Inventaris::join('barangs', 'inventaris.barang_id', '=', 'barangs.id')
                        ->where('barangs.kondisi_id', 4)
                        ->get();
        return view('laporan', compact('data'));
    }
}
