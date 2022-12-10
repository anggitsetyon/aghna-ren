	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="{{ route('home') }}">Aghna<span>Transport</span></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="{{ route('home') }}" class="nav-link">Beranda</a></li>
	          <li class="nav-item"><a href="about.html" class="nav-link">Katalog</a></li>
	          <li class="nav-item"><a href="services.html" class="nav-link">Alamat</a></li>
	          <li class="nav-item"><a href="pricing.html" class="nav-link">Kontak</a></li>
			  @auth
				<form action="{{ route('logout') }}" method="post" id="form-logout">
				@csrf
				</form>
			  <li class="nav-item"><a onclick="document.querySelector('#form-logout').submit();" class="nav-link">Keluar</a></li>
			  @endauth
			  @guest
			  <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Masuk</a></li>
			  <li class="nav-item"><a href="{{ route('register') }}" class="nav-link">Daftar</a></li>
			  @endguest
	        </ul>
	      </div>
	    </div>
	</nav>
    <!-- END nav -->