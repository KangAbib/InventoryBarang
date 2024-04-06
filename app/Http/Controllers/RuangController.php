<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Ruang;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RuangController extends Controller
{
    public function index()
    {
        $data = Ruang::all();
        return view('ruang', compact('data'));
    }
    public function create()
    {
        $data1 = User::where('bagian_id', 3)->get();
        return view('Ruang/tambahRuang', compact('data1'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'namaRuang' => 'required',
        ]);
        Ruang::create($request->all());
        return redirect()->route('ruang.index')->with('success', 'Data berhasil ditambahkan!');
    }
    public function edit($id)
    {
        $data1 = User::where('bagian_id', 3)->get();
        $data = Ruang::find($id);
        return view('Ruang/updateRuang', compact('data', 'data1'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'id' => 'required',
            'namaRuang' => 'required',
        ]);
        Ruang::find($id)->update($request->all());
        return redirect()->route('ruang.index')->with('success', 'Data berhasil diperbarui!');
    }
    public function destroy($id)
    {
        if (Ruang::find($id)->inventaris()->exists()) {
            return redirect()->route('ruang.index')->with('error', 'Data memiliki relasi dan tidak dapat dihapus.');
        }    
        Ruang::find($id)->delete();
        return redirect()->route('ruang.index')->with('success', 'Data berhasil dihapus!');
    }
}
