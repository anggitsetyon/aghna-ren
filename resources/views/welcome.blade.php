@extends('layouts.main')

@section('content')
<div class="hero-wrap ftco-degree-bg" style="background-image: url('{{ asset('images/bg_1.jpg') }}');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text justify-content-start align-items-center justify-content-center">
          <div class="col-lg-8 ftco-animate">
          	<div class="text w-100 text-center mb-md-5 pb-md-5">
	            <h1 class="mb-4">Cepat &amp; Mudah Dalam Menyewa Mobil</h1>
	            <a href="https://vimeo.com/45830194" class="icon-wrap popup-vimeo d-flex align-items-center mt-4 justify-content-center">
	            	
	            </a>
            </div>
          </div>
        </div>
      </div>
    </div>


    <section class="ftco-section ftco-no-pt bg-light">
    	<div class="container">
    		<div class="row justify-content-center">
          <div class="col-md-12 heading-section text-center ftco-animate mb-5">
          	<span class="subheading">Kami Menawarkan</span>
            <h2 class="mb-2">Kendaraan Terbaru</h2>
          </div>
        </div>
    		<div class="row">
    			<div class="col-md-12">
    				<div class="carousel-car owl-carousel">
						@if (isset($mobil))
							@foreach($mobil as $item)
							<div class="item">
								<div class="car-wrap rounded ftco-animate">
									<div class="img rounded d-flex align-items-end" style="background-image: url('{{ asset('mobil/'.$item->gambar) }}');">
									</div>
									<div class="text">
										<h2 class="mb-0"><a href="#">{{ $item->nama_mobil }}</a></h2>
										<div class="d-flex mb-3">
											<span class="cat">{{ $item->merk_mobil }}</span>
											<p class="price ml-auto">Rp{{ number_format($item->harga_sewa, 0, 0, '.') }}</p>
										</div>
										<p class="d-flex mb-0 d-block"><a href="{{ route('sewa', ['id' => $item->id]) }}" class="btn btn-primary py-2 mr-1">Sewa Sekarang</a> <a href="{{ route('detail', ['id' => $item->id]) }}" class="btn btn-secondary py-2 ml-1">Detail</a></p>
									</div>
								</div>
							</div>
							@endforeach
						@endif
    				</div>
    			</div>
    		</div>
    	</div>
    </section>    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

@endsection