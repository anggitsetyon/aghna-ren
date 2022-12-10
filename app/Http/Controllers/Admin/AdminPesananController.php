<?php

namespace App\Http\Controllers\Admin;

use App\Models\Pesanan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminPesananController extends Controller
{
    public function index()
    {
        $pesanan = Pesanan::paginate(10);
        return view('admin.pesanan.index', compact('pesanan'));
    }
}
