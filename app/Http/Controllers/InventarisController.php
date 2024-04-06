<?php

namespace App\Http\Controllers;

use App\Models\Ruang;
use App\Models\Barang;
use App\Models\Inventaris;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InventarisController extends Controller
{
    public function index()
    {
        $data = Inventaris::all();
        return view('inventaris', compact('data'));
    }
    public function destroy($id)
    {
        Inventaris::find($id)->delete();
        return redirect()->route('inventaris.index')->with('success', 'Data berhasil dihapus!');
    }
    public function create()
    {
        $data1 = Barang::all();
        $data2 = Ruang::all();
        return view('Inventaris/tambahInventaris', compact('data1', 'data2'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'tglMasuk' => 'required',
            'tglKeluar' => 'required',
        ]);
        Inventaris::create($request->all());
        return redirect()->route('inventaris.index')->with('success', 'Data berhasil ditambahkan!');
    }
    public function edit($id)
    {
        $data = Inventaris::find($id);
        $data1 = Barang::all();
        $data2 = Ruang::all();
        return view('Inventaris/updateInventaris', compact('data', 'data1', 'data2'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'id' => 'required',
            'tglMasuk' => 'required',
            'tglKeluar' => 'required',
        ]);
        Inventaris::find($id)->update($request->all());
        return redirect()->route('inventaris.index')->with('success', 'Data berhasil diperbarui!');
    }
}
