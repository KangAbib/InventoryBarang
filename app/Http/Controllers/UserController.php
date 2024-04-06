<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Bagian;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index()
    {
        $data = User::all();
        return view('user', compact('data'));
    }
    public function create()
    {
        $data1 = Bagian::all();
        return view('User/tambahUser', compact('data1'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'noPegawai' => 'required',
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
        User::create($request->all());
        return redirect()->route('user.index')->with('success', 'User berhasil ditambahkan!');
    }
    public function edit($id)
    {
        $data = User::find($id);
        $data1 = Bagian::all();
        return view('User/updateUser', compact('data', 'data1'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'id' => 'required',
            'noPegawai' => 'required',
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $id,
            'password' => 'nullable|min:6',
        ]);

        $user = User::find($id);
        $user->update($request->all());

        return redirect()->route('user.index')->with('success', 'User berhasil diperbarui!');
    }
    public function destroy($id)
    {
        if (User::find($id)->ruang()->exists()) {
            return redirect()->route('user.index')->with('error', 'Data memiliki relasi dan tidak dapat dihapus.');
        }    
        User::find($id)->delete();
        return redirect()->route('user.index')->with('success', 'Data berhasil dihapus!');
    }
}