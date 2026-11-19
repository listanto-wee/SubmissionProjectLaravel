<?php

namespace App\Http\Controllers;

use App\Models\Matakuliah;
use Illuminate\Http\Request;

class MatakuliahController extends Controller
{
     public function index()
    {
        $matakuliah = Matakuliah::orderBy('id')->get();
        return view('matakuliah.index', compact('matakuliah'));
    }
    public function detail($id)
    {
        $matakuliah = Matakuliah::findOrFail($id);
        return view('matakuliah.detail', compact('matakuliah'));
    }
    public function create()
    {
        return view('Matakuliah.create');
    }
    public function store(Request $request)
    {
        $request->validate([
        'kode_matakuliah' => 'required|string|max:20|unique:Matakuliah,kode_matakuliah',
        'nama_matakuliah' => 'required|string|max:100',
        'sks' => 'required|integer|between:1,6',
    ]);
        Matakuliah::create([
        'kode_matakuliah' => $request->kode_matakuliah,
        'nama_matakuliah' => $request->nama_matakuliah,
        'sks' => $request->sks,
    ]);
        return redirect()->route('matakuliah.index')
        ->with('success', 'Data Matakuliah berhasil ditambahkan.');
    }
}
