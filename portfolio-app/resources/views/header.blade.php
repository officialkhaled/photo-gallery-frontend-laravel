<!-- ======= Header ======= -->

<header id="header" class="header d-flex align-items-center fixed-top">
  <div class="container-fluid d-flex align-items-center justify-content-between">

    <a href="{{ route('home') }}" class="logo d-flex align-items-center  me-auto me-lg-0">
      <img src="{{ asset('assets/img/logo.png') }}" alt="">
      <i class="bi bi-camera"></i>
      <h1>Photo Gallery</h1>
    </a>

    <nav id="navbar" class="navbar">
      <ul>
        <li><a href="{{ url('/') }}" class="{{ request()->url() === url('/') ? 'active' : '' }}">Home</a></li>
        <li><a href="{{ route('about') }}" class="{{ request()->url() === url('/about') ? 'active' : '' }}">About</a></li>
        <li class="dropdown"><a href="#"><span>Gallery</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
          <ul>
            <li><a href="#">Nature</a></li>
            <li><a href="#">People</a></li>
            <li><a href="#">Architecture</a></li>
          </ul>
        </li>
        {{-- <li><a href="#">Services</a></li> --}}
        <li><a href="{{ route('contact') }}" class="{{ request()->url() === url('/contact') ? 'active' : '' }}">Contact</a></li>
      </ul>
    </nav><!-- .navbar -->

    <div class="header-social-links">
      {{-- <a href="#" class="twitter"><i class="bi bi-twitter"></i></a> --}}
      <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
      <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
      <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
    </div>
    <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
    <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

  </div>
</header><!-- End Header -->