<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
  <div class="container">
    <a class="navbar-brand" href="/">Company.</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="oi oi-menu"></span> Menu
    </button>

    <div class="collapse navbar-collapse" id="ftco-nav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active"><a href="{{ url('/') }}" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="{{ url('/personas') }}" class="nav-link">Empresa</a></li>
        {{-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="portfolio.html" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Portfolio</a>
            <div class="dropdown-menu" aria-labelledby="dropdown04">
              <a class="dropdown-item" href="portfolio.html">Portfolio</a>
              <a class="dropdown-item" href="portfolio-single.html">Portfolio Single</a>
            </div>
        </li> --}}
        <li class="nav-item"><a href="{{ url('/contacto') }}" class="nav-link">Contacto</a></li>
       @guest
       <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Login</a></li>

        @else
       <li class="nav-item"><a href="#" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();" class="nav-link">Cerrar Sesión</a></li>
       @endguest
       <form id="logout-form" action="{{route('logout')}}" method="post" style="display:none;">
        @csrf
      </form>
      </ul>
    </div>
  </div>
</nav>

@if (   'title'== 'Home')
<div class="hero-wrap js-fullheight">
  <div class="overlay"></div>
  <div id="particles-js"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
      <div class="col-md-6 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
        <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Nosotros creamos <strong>hermosas</strong> websites</h1>
        <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><a href="#" class="btn btn-primary btn-outline-white px-5 py-3">Get in touch</a></p>
      </div>
    </div>
  </div>
</div>
@else
<div class="hero-wrap js-fullheight">
  <div class="overlay"></div>
  <div id="particles-js"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
      <div class="col-md-6 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
        <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="/">Home</a></span> <span>@yield('title')</span></p>
        <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">@yield('title')</h1>
      </div>
    </div>
  </div>
</div>
@endif


