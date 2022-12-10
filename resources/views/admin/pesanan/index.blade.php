@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
  <div class="d-flex justify-content-between mb-3">
    <div>
      <h3>Daftar Pesanan</h3>
    </div>
  </div>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama Pemesan</th>
        <th scope="col">No Hp</th>
        <th scope="col">Alamat</th>
        <th scope="col">Nama Mobil</th>
        <th scope="col">Tanggal Sewa</th>
        <th scope="col">Status</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      @if (isset($mobil))
      @php
          $no = 1;
      @endphp
      @foreach ($mobil as $item)
      <tr>
        <th scope="row">{{ $no++; }}</th>
        <td>{{ $item->nama_mobil }}</td>
        <td>{{ $item->merk_mobil }}</td>
        <td>{{ $item->harga_sewa }}</td>
        <td>{{ $item->stok_mobil }}</td>
        <td>{{ substr($item->deskripsi, 0, 20) }}...</td>
        <td>
          <img src="{{ asset('mobil/'.$item->gambar) }}" alt="" style="width: 100px; height: 80px; border-radius: 0px;">
        </td>
        <td>
          <a href="{{ route('admin.mobil.ubah', ['id' => $item->id]) }}" class="btn btn-primary">Edit</a>
          <a href="{{ route('admin.mobil.hapus', ['id' => $item->id]) }}" class="btn btn-danger">Hapus</a>
        </td>
      </tr>
      @endforeach
      @endif
    </tbody>
  </table>
</div>
@endsection