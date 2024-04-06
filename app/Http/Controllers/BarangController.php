<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\Jenis;
use App\Models\Kondisi;

class BarangController extends Controller
{
    public function index()
    {
        $data = Barang::all();
        return view('barang', compact('data'));
    }
    public function destroy($id)
    {
        if (Barang::find($id)->inventaris()->exists()) {
            return redirect()->route('barang.index')->with('error', 'Data memiliki relasi dan tidak dapat dihapus.');
        }    
        Barang::find($id)->delete();
        return redirect()->route('barang.index')->with('success', 'Data berhasil dihapus!');
    }
    public function create()
    {
        $data1 = Jenis::all();
        $data2 = Kondisi::all();
        return view('Barang/tambahBarang', compact('data1', 'data2'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'namaBarang' => 'required',
            'tglMasuk' => 'required',
            'tglKeluar' => 'required'
        ]);
        Barang::create($request->all());
        return redirect()->route('barang.index')->with('success', 'Data berhasil ditambahkan!');
    }
    public function edit($id)
    {
        $data = Barang::find($id);
        $data1 = Jenis::all();
        $data2 = Kondisi::all();
        return view('Barang/updateBarang', compact('data', 'data1', 'data2'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'id' => 'required',
            'namaBarang' => 'required',
            'tglMasuk' => 'required',
            'tglKeluar' => 'required'
        ]);
        Barang::find($id)->update($request->all());
        return redirect()->route('barang.index')->with('success', 'Data berhasil diperbarui!');
    }
}
