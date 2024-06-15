<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;

class PasienController extends Controller
{
    public function index ()
    {
        $pasien = Pasien::all();
        return view('pasien.pages.index', compact('pasien'));
    }

    public function create()
    {
        return view('pasien.pages.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode' => 'required|string',
            'nama' => 'required|string',
            'tmp_lahir' => 'required|string',
            'tgl_lahir' => 'required|date',
            'gender' => 'required|string',
            'email' => 'required|string',
            'alamat' => 'required|string',
        ]);

        Pasien::create([
            'kode' => $request->kode,
            'nama' => $request->nama,
            'tmp_lahir' => $request->tmp_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'gender' => $request->gender,
            'email' => $request->email,
            'alamat' => $request->alamat,
        ]);

        return redirect()->route('pasien.index')->with('success', 'Pasien created successfully.');
    }

    public function show(Pasien $pasien)
    {
        return view('pasien.pages.view', compact('pasien'));
    }

    public function edit(Pasien $pasien)
    {
        return view('pasien.pages.edit', compact('pasien'));
    }

    public function update(Request $request, Pasien $pasien)
    {
        $pasien->update($request->all());
        return redirect()->route('pasien.index')->with('success', 'Pasien updated successfully');
    }

    public function destroy($id)
    {
        $pasien = Pasien::findOrFail($id);
        $pasien->delete();

        return redirect()->route('pasien.index')->with('success', 'Pasien deleted successfully.');
    }
}
