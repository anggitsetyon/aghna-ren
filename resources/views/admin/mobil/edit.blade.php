@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
    <form action="{{ route('admin.mobil.edit') }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{ $mobil->id }}" class="form-control" id="id">
        <div class="mb-3">
            <label for="mobil" class="form-label">Nama Mobil</label>
            <input type="text" name="mobil" value="{{ $mobil->nama_mobil }}" class="form-control" id="mobil" style="background-color: white; border: 1px solid black; color: black;">
        </div>
        <div class="mb-3">
            <label for="merk" class="form-label">Merk Mobil</label>
            <select name="merk" class="form-control" style="background-color: white; border: 1px solid black; color: black;">
                <option selected disabled>-Pilih-</option>
                <option value="Toyota" {{ $mobil->merk_mobil == 'Toyota' ? 'selected' : '' }}>Toyota</option>
                <option value="Mitsubushi" {{ $mobil->merk_mobil == 'Mitsubushi' ? 'selected' : '' }}>Mitsubushi</option>
                <option value="Demit" {{ $mobil->merk_mobil == 'Demit' ? 'selected' : '' }}>Demit</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="harga" class="form-label">Harga Mobil</label>
            <input type="number" name="harga" value="{{ $mobil->harga_sewa }}" class="form-control" id="harga" style="background-color: white; border: 1px solid black; color: black;">
        </div>
        <div class="mb-3">
            <label for="stok" class="form-label">Stok Mobil</label>
            <input type="number" name="stok" value="{{ $mobil->stok_mobil }}" class="form-control" id="stok" style="background-color: white; border: 1px solid black; color: black;">
        </div>
        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea name="deskripsi" id="deskripsi" class="form-control" rows="3" style="background-color: white; border: 1px solid black; color: black;">{{ $mobil->deskripsi }}</textarea>
        </div>
        <div class="mb-3">
            <label for="gambar" class="form-label">Gambar Mobil</label>
            <input type="file" name="gambar" class="form-control" id="gambar" style="background-color: white; border: 1px solid black; color: black;">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button> 
    </form>
</div>
@endsection