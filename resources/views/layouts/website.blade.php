<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/png" href="{{ asset('img/favicon-32x32.png') }}"/>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('a1.company.name', 'Demo') }}</title>

    <!-- styles -->
    <!-- bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('website/css/bootstrap.css') }}" >
    <!-- bootstrap icons CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('website/css/bootstrap-icons/bootstrap-icons.css') }}" >
    <!-- main CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('website/css/main.css') }}" >
    <!-- headers CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('website/css/headers.css') }}" >
    <!-- carousel CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('website/css/carousel.css') }}" >
    <!-- hero CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('website/css/hero.css') }}" >
    <!-- about CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('website/css/about.css') }}" >
    <!-- product CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('website/css/product.css') }}" >
    <!-- branch CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('website/css/branch.css') }}" >
    <!-- event CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('website/css/event.css') }}" >
    <!-- contact CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('website/css/contact.css') }}" >
    <!-- shop CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('website/css/shop.css') }}" >
    @yield('style')

</head>
<body>

<!-- Header Area Starts -->
<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ route('website.index') }}">
      <img class="logo-navbar" src="{{ asset('website/img/logo.png') }}" alt="malindo">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mb-2 mb-lg-0 w-100 d-flex justify-content-end">
        <li class="nav-item me-3">
          <a href="{{ route('website.index') }}" class="nav-link {{ $active['home'] }}">
            <img class="icon-navbar-home" src="{{ asset('website/img/icons/home.png') }}" alt="{{ __('navmenu.home') }}">
          </a>
        </li>
        
        <li class="nav-item"><a href="{{ route('website.about') }}" class="nav-link {{ $active['about'] }}">{{ __('navmenu.about') }}</a></li>
        <li class="nav-item"><a href="{{ route('website.product') }}" class="nav-link {{ $active['product'] }}">{{ __('navmenu.product') }}</a></li>
        <li class="nav-item"><a href="{{ route('website.branch') }}" class="nav-link {{ $active['branch'] }}">{{ __('navmenu.branch') }}</a></li>
        <li class="nav-item"><a href="{{ route('website.event') }}" class="nav-link {{ $active['event'] }}">{{ __('navmenu.event') }}</a></li>
        <li class="nav-item"><a href="{{ route('website.contact') }}" class="nav-link {{ $active['contact'] }}">{{ __('navmenu.contact') }}</a></li>

        <li class="nav-item">
          <a href="{{ route('website.shop') }}" class="nav-link {{ $active['shop'] }}">
            <img class="icon-navbar-shop" src="{{ asset('website/img/icons/cart.png') }}" alt="{{ __('navmenu.shop') }}">
          </a>
        </li>

        <li class="nav-item">
            <a href="{{ route('change.lang', ['lang' => \Session::get('lang')]) }}" class="nav-link">
              <img class="icon-navbar-lang" src="{{ asset('website/img/icons/lang.png') }}" alt="{{ __('navmenu.branch') }}">
            </a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Header Area End -->

<!-- Main Section Start -->
<main>
@yield('content')
</main>
<!-- Main Section End -->

<!-- Footer Section Start -->
<footer>

</footer>
<!-- Footer Section End -->



<!-- js -->
<!-- Bootstrap JS -->
<script src="{{ asset('website/js/bootstrap.bundle.js') }}"></script>
<!-- Main JS -->
<script src="{{ asset('website/js/main.js') }}"></script>
@yield('js')

</body>
</html>
