<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

{{-- @section('head') --}}

<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link rel="preload" as="style" onload="this.rel='stylesheet'"
        href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;500;600;700;800&display=swap">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5, shrink-to-fit=no">

    <meta name="google-site-verification" content="P_5zyoITcuRC83ELC_TcPLOmRi_NKcdcH4Sct9jORGg" />

    {{-- // TODO: Додати favicon для всіх можливих варіантів --}}
    <link rel="icon" type="image/png" href="favicon.png">

    <!-- Allow web app to be run in full-screen mode - iOS. -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <!-- Allow web app to be run in full-screen mode - Android. -->
    <meta name="mobile-web-app-capable" content="yes">
    <!-- Make the app title different than the page title - iOS. -->
    <meta name="apple-mobile-web-app-title" content="KomisarNews">
    <!-- Configure the status bar - iOS. -->
    <meta name="apple-mobile-web-app-status-bar-style" content="brown">
    <!-- Disable automatic phone number detection. -->
    <meta name="format-detection" content="telephone=no">

    <title>{{ $seo['title'] }}</title>

    {{-- @yield('styles') --}}

    @isset($seo['keywords'])
        <meta name="keywords" content="{{ $seo['keywords'] }}">
    @endisset

    @isset($seo['description'])
        <meta name="description" content="{{ $seo['description'] }}">
    @endisset

    <meta name="robots" content="{{ $seo['robots'] ? 'index, follow' : 'noindex, nofollow' }}">

    @yield('styles')
</head>
{{-- @show --}}

<body>
    <nav class="navbar fixed-top navbar-dark bg-transparent navbar-expand-lg py-3">
        <div class="container-sm">
            <a class="logo" href="/">Kom<span class="animate__animated animate__tada animate__infinite">!</span>sarNews</a>
            {{-- <a class="navbar-brand" href="#">KOMISAR</a> --}}
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar"
                aria-labelledby="offcanvasDarkNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Dark offcanvas</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                    </ul>
                    <button class="btn btn-success" type="submit">Search</button>
                </div>
            </div>
        </div>
    </nav>

    <header class="banner-image w-100 vh-100 d-flex flex-column justify-content-center align-items-center">
        <h1 data-aos="fade-down" data-aos-delay="150">Продаж та покупка<br class="d-block d-lg-none">cволосся у Києві
        </h1>
        <h2 data-aos="fade-up" data-aos-delay="150">Швидко, Дорого, Надійно</h2>

        {{-- arrow down --}}
        <div class="arrow text-center">
            <a href="#scrollToContent" class="scrollto" aria-label="Вниз">
                <i class="bi bi-arrow-down"></i>
            </a>
        </div>
    </header>

    {{-- <div class="progress-wrap cursor-pointer">
        <i class="bi bi-arrow-up"></i>
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div> --}}

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
        <i class="bi bi-arrow-up-short"></i>
    </a>

    {{-- @yield('scripts') --}}
</body>

</html>
