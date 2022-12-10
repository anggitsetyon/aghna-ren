@extends('layouts.main')

@section('content')

    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('{{ asset('images/bg_3.jpg') }}');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
                <div class="col-md-9 ftco-animate pb-5">
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Car details <i class="ion-ios-arrow-forward"></i></span></p>
                <h1 class="mb-3 bread">Car Details</h1>
                </div>
            </div>
        </div>
    </section>
      

    <section class="ftco-section ftco-car-details">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="car-details">
                        <div class="img rounded" style="background-image: url('{{ asset('mobil/'.$mobil->gambar) }}');"></div>
                        <div class="text text-center">
                            <span class="subheading">{{ $mobil->merk_mobil }}</span>
                            <h2>{{ $mobil->nama_mobil }}</h2>
                            <h5>(Rp{{ number_format($mobil->harga_sewa, 0, 0, '.') }} / Hari)</h5>
                            <p>{{ $mobil->deskripsi }}</p>
                        </div>
                        <div class="text text-center">
                            <a href="{{ route('sewa', ['id' => $mobil->id]) }}" class="btn btn-primary">Sewa Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection