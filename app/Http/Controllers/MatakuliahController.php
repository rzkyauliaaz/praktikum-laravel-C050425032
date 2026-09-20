<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matakuliah;


class MatakuliahController extends Controller
{
    public function index()
    {
        $matakuliah = Matakuliah::with('dosen')->get();

        return view('matakuliah.index', compact('matakuliah'));
    }

   public function create()
{
    $dosens = \App\Models\User::all();

    return view('matakuliah.create', compact('dosens'));
}

public function store(Request $request)
{
    Matakuliah::create([
        'kode_mk' => $request->kode_mk,
        'nama_mk' => $request->nama_mk,
        'sks' => $request->sks,
        'semester' => $request->semester,
        'dosen_id' => $request->dosen_id,
    ]);

    return redirect()->route('matakuliah.index');
}
}
