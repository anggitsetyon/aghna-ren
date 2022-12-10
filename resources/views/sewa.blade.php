@extends('layouts.main')

@section('content')
    
<section class="ftco-section ftco-car-details bg-secondary">
    <div class="container">
        <form action="{{ route('sewa.simpan') }}" method="post">
            @csrf
            <input type="hidden" name="mobil" value="{{ $mobil->id }}">
            <div class="mb-3">
                <label for="mobil" class="form-label">Nama Mobil</label>
                <input type="text" class="form-control" value="{{ $mobil->nama_mobil }}" id="mobil" style="background-color: white; border: 1px solid black; color: black;" readonly>
            </div>
            <div class="mb-3">
                <label for="penyewa" class="form-label">Nama Penyewa</label>
                <input type="text" name="penyewa" value="{{ ucfirst(auth()->user()->name) }}" class="form-control" id="penyewa" style="background-color: white; border: 1px solid black; color: black;" readonly>
            </div>
            <div class="mb-3">
                <label for="harga" class="form-label">Harga Sewa</label>
                <input type="text" class="form-control" value="{{ $mobil->harga_sewa }} / Hari" id="harga" style="background-color: white; border: 1px solid black; color: black;" readonly>
            </div>
            <div class="mb-3">
                <label for="sewa" class="form-label">Tanggal Sewa</label>
                <input type="text" name="sewa" class="form-control"  id="book_pick_date" id="sewa" style="background-color: white; border: 1px solid black; color: black;" placeholder="mm/dd/yyyy">
            </div>
            <div class="mb-3">
                <label for="kembali" class="form-label">Tanggal Kembali</label>
                <input type="text" name="kembali" class="form-control"  id="book_pick_date" id="kembali" style="background-color: white; border: 1px solid black; color: black;" placeholder="mm/dd/yyyy">
            </div>
            <div class="mb-3">
                <label for="sopir" class="form-label">Tambahan</label>
                <select name="sopir" class="form-control" style="background-color: white; border: 1px solid black; color: black;">
                    <option selected>Tanpa Sopir</option>
                    <option>Paket Sopir (+Rp50.000)</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="ktp" class="form-label">KTP</label>
                <input type="file" name="ktp" class="form-control" id="ktp" style="background-color: white; border: 1px solid black; color: black;" accept="image/*">
            </div>
            <div class="mb-3">
                <label for="kk" class="form-label">KK</label>
                <input type="file" name="kk" class="form-control" id="kk" style="background-color: white; border: 1px solid black; color: black;" accept="image/*">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button> 
        </form>
    </div>
</section>

@endsection
