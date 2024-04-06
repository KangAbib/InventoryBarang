<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jenis;

class JenisController extends Controller
{
    public function index()
    {
        $data = Jenis::all();
        return view('jenis', compact('data'));
    }
    public function destroy($id)
    {
        if (Jenis::find($id)->barang()->exists()) {
            return redirect()->route('jenis.index')->with('error', 'Data memiliki relasi dan tidak dapat dihapus.');
        }    
        Jenis::find($id)->delete();
        return redirect()->route('jenis.index')->with('success', 'Data berhasil dihapus!');
    }
    public function create()
    {
        return view('Jenis/tambahJenis');
    }
    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'namaJenis' => 'required',
        ]);
        Jenis::create($request->all());
        return redirect()->route('jenis.index')->with('success', 'Data berhasil ditambahkan!');
    }
    public function edit($id)
    {
        $data = Jenis::find($id);
        return view('Jenis/updateJenis', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'id' => 'required',
            'namaJenis' => 'required',
        ]);
        Jenis::find($id)->update($request->all());
        return redirect()->route('jenis.index')->with('success', 'Data berhasil diperbarui!');
    }
    
}
