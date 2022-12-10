<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Mobil;
use App\Models\Pesanan;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $mobil = Mobil::latest()->take(4)->get();
        return view('welcome', compact('mobil'));
    }

    public function detail($id)
    {
        $mobil = Mobil::find($id);
        return view('detail', compact('mobil'));
    }

    public function sewa($id)
    {
        $mobil = Mobil::find($id);
        return view('sewa', compact('mobil'));
    }

    public function simpan(Request $request)
    {
        // return Carbon::parse($request->sewa)->format('Y-m-d');
        $pesanan = new Pesanan();
        $pesanan->id_mobil = $request->mobil;
        $pesanan->id_user = auth()->user()->id;
        $pesanan->tgl_sewa = Carbon::parse($request->sewa)->format('Y-m-d');
        $pesanan->tgl_kembali = Carbon::parse($request->kembali)->format('Y-m-d');
        $tglSewa = Carbon::parse($request->sewa);
        $tglKembali = Carbon::parse($request->kembali);
        $diff_in_days = $tglKembali->diffInDays($tglSewa);
        if($request->hasFile('ktp')){
            $file = $request->file('ktp');
            $filename = rand() . $file->getClientOriginalName();
            $file->move(public_path() . '/sewa/ktp', $filename);
            $pesanan->ktp = $filename;
        }
        if($request->hasFile('kk')){
            $file = $request->file('kk');
            $filename = rand() . $file->getClientOriginalName();
            $file->move(public_path() . '/sewa/kk', $filename);
            $pesanan->ktp = $filename;
        }
        $pesanan->save();
        // return $diff_in_days;
    }
}
