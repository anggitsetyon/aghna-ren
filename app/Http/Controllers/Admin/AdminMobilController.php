<?php

namespace App\Http\Controllers\Admin;

use App\Models\Mobil;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminMobilController extends Controller
{
    public function index()
    {
        $mobil = Mobil::paginate(10);
        return view('admin.mobil.index', compact('mobil'));
    }

    public function tambah()
    {
        return view('admin.mobil.tambah');
    }

    public function ubah($id)
    {
        $mobil = Mobil::find($id);
        return view('admin.mobil.edit', compact('mobil'));
    }

    public function simpan(Request $request)
    {
        $mobil = new Mobil();
        $mobil->nama_mobil = $request->mobil;
        $mobil->merk_mobil = $request->merk;
        $mobil->harga_sewa = $request->harga;
        $mobil->stok_mobil = $request->stok;
        $mobil->deskripsi  = $request->deskripsi;
        if($request->hasFile('gambar')){
            $file = $request->file('gambar');
            $filename = rand() . $file->getClientOriginalName();
            $file->move(public_path() . '/mobil', $filename);
            $mobil->gambar = $filename;
        }
        $mobil->save();
        return redirect()->route('admin.mobil');
    }

    public function edit(Request $request)
    {
        $mobil = Mobil::find($request->id);
        $mobil->nama_mobil = $request->mobil;
        $mobil->merk_mobil = $request->merk;
        $mobil->harga_sewa = $request->harga;
        $mobil->stok_mobil = $request->stok;
        $mobil->deskripsi  = $request->deskripsi;
        if($request->hasFile('gambar')){
            $file = $request->file('gambar');
            $filename = rand() . $file->getClientOriginalName();
            $file->move(public_path() . '/mobil', $filename);
            $mobil->gambar = $filename;
        }
        $mobil->save();
        return redirect()->route('admin.mobil');
    }

    public function hapus($id)
    {
        $mobil = Mobil::find($id);
        $mobil->delete();
        return redirect()->route('admin.mobil');
    }
}
