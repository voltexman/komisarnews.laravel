<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@section('head')

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

        <style>
            html,
            body {
                -webkit-overflow-scrolling: touch;
                -moz-osx-font-smoothing: grayscale;
                -webkit-font-smoothing: antialiased;
                -moz-font-smoothing: antialiased;
                font-smoothing: antialiased;
                min-height: -webkit-fill-available
            }

            * {
                margin: 0;
                padding: 0;
                -webkit-box-sizing: border-box;
                box-sizing: border-box;
                outline: none;
                list-style: none;
                word-wrap: break-word
            }

            body {
                font-family: 'Nunito', sans-serif;
                font-size: 15px;
                font-weight: 300;
                line-height: 1.75em;
                color: #625c56;
                overflow-x: hidden !important;
                background: #f5eee7
            }

            section {
                padding: 60px 0;
                overflow: hidden
            }

            p {
                font-family: 'Nunito', sans-serif;
                font-size: 16px;
                font-weight: 600;
                line-height: 1.75em;
                color: #625c56;
                margin-bottom: 15px
            }

            h1,
            h2 {
                font-family: 'Nunito', sans-serif;
                font-weight: 800;
                line-height: 1.25em;
                margin: 0 0 20px 0;
                color: #14100c
            }

            h1 {
                font-size: 60px
            }

            h2 {
                font-size: 48px
            }

            img {
                width: 100%;
                height: auto
            }

            img {
                color: #f4f4f4
            }

            span,
            a {
                display: inline-block;
                text-decoration: none;
                color: inherit
            }

            button {
                text-shadow: none;
                -webkit-box-shadow: none;
                box-shadow: none;
                line-height: 1.75em;
                background: transparent;
                border: 0px solid transparent
            }

            ::-webkit-input-placeholder {
                color: #14100c;
                font-size: 15px;
                font-weight: 300
            }

            :-moz-placeholder {
                color: #14100c
            }

            ::-moz-placeholder {
                color: #14100c;
                opacity: 1
            }

            :-ms-input-placeholder {
                color: #14100c
            }

            .progress-wrap {
                background: rgba(100, 100, 100, .15);
                position: fixed;
                bottom: 20px;
                right: 20px;
                height: 50px;
                width: 50px;
                display: block;
                border-radius: 50px;
                z-index: 100;
                opacity: 0;
                visibility: hidden;
                -webkit-transform: translateY(20px);
                -ms-transform: translateY(20px);
                transform: translateY(20px)
            }

            .progress-wrap i {
                position: absolute;
                content: '\F148';
                text-align: center;
                line-height: 50px;
                font-size: 15px;
                color: #91765a;
                left: 0;
                top: 0;
                font-weight: 800;
                height: 50px;
                width: 50px;
                display: block;
                z-index: 1
            }

            .progress-wrap svg path {
                fill: none
            }

            .progress-wrap svg.progress-circle path {
                stroke-width: 4;
                -webkit-box-sizing: border-box;
                box-sizing: border-box
            }

            .progress-wrap {
                -webkit-box-shadow: inset 0 0 0 0px rgba(217, 214, 209, 0.5);
                box-shadow: inset 0 0 0 0px rgba(217, 214, 209, 0.5)
            }

            .progress-wrap::after {
                color: #91765a
            }

            .progress-wrap svg.progress-circle path {
                stroke: #91765a
            }

            #header {
                z-index: 997;
                padding: 15px 0
            }

            #header .logo {
                font-size: 20px;
                margin: 0;
                padding: 0;
                line-height: 1;
                font-weight: 600;
                letter-spacing: 2px;
                text-transform: uppercase
            }

            #header .logo a {
                color: #fff
            }

            #header .logo a span {
                font-weight: 800
            }

            .get-started-btn {
                color: #fff;
                padding: 8px;
                font-weight: 500;
                white-space: nowrap;
                font-size: 12px;
                border-radius: var(--bs-border-radius-lg) !important;
                display: inline-block;
                text-transform: uppercase;
                background-color: #685340
            }

            @media (max-width:992px) {
                .get-started-btn {
                    font-weight: 600
                }
            }

            .navbar {
                padding: 0
            }

            .navbar ul {
                margin: 0;
                padding: 0;
                display: flex;
                list-style: none;
                align-items: center
            }

            .navbar li {
                position: relative;
                width: 100%
            }

            .navbar a {
                display: flex;
                align-items: center;
                justify-content: space-between;
                padding: 10px 0 10px 30px;
                font-size: 15px;
                font-weight: 600;
                color: #fff;
                white-space: nowrap
            }

            .navbar .active {
                color: #91765a
            }

            .mobile-nav-toggle {
                color: #fff;
                font-size: 28px;
                display: none;
                line-height: 0
            }

            @media (max-width:991px) {
                .mobile-nav-toggle {
                    display: block
                }

                .navbar ul {
                    display: none
                }
            }

            @media (min-width:1200px) {
                .container {
                    max-width: 1140px !important
                }
            }

            @media screen and (max-width:991px) {
                .navbar .nav-link {
                    margin: 0px auto !important;
                    width: 100%
                }
            }

            .get-started-btn {
                color: #fff;
                padding: 8px;
                font-weight: 500;
                white-space: nowrap;
                font-size: 12px;
                border-radius: var(--bs-border-radius-lg) !important;
                display: inline-block;
                text-transform: uppercase;
                background-color: #685340
            }

            @media (max-width:992px) {
                .get-started-btn {
                    padding: 8px;
                    font-weight: 600;
                    margin-right: 15px
                }
            }

            .back-to-top {
                position: fixed;
                visibility: hidden;
                opacity: 0;
                right: 15px;
                bottom: 15px;
                z-index: 996;
                background: #91765a;
                width: 40px;
                height: 40px;
                border-radius: 4px
            }

            .back-to-top i {
                font-size: 28px;
                color: #151515;
                line-height: 0
            }

            .form1 label {
                display: none
            }

            #preloader {
                position: fixed;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                z-index: 9999;
                overflow: hidden;
                background: #151515
            }

            #preloader:before {
                content: "";
                position: fixed;
                top: calc(50% - 0px);
                left: calc(50% - 30px);
                border: 6px solid #91765a;
                border-top-color: #151515;
                border-bottom-color: #151515;
                border-radius: 50%;
                width: 60px;
                height: 60px;
                animation: animate-preloader 1s linear infinite
            }

            @keyframes animate-preloader {
                0% {
                    transform: rotate(0deg)
                }

                100% {
                    transform: rotate(360deg)
                }
            }

            ul {
                list-style: none;
                padding: 0
            }

            .modal-content {
                border: none;
                border-radius: 0;
                background-color: #f5eee7
            }

            .modal-title {
                text-transform: uppercase;
                font-weight: 600;
                color: #f5eee7
            }

            .modal-header {
                background-color: #91765a;
                border-radius: 0
            }

            .modal-footer {
                border-top: 0;
                background-color: rgba(145, 118, 90, .2)
            }

            .modal-body p {
                line-height: 25px
            }

            .rules-danger {
                background-color: rgb(255, 216, 216)
            }

            .rules-danger p {
                padding: 5px;
                color: #5e5e5e;
                line-height: 16px !important;
                font-size: 12px;
                font-weight: 700
            }

            h2 {
                text-transform: uppercase
            }

            h2 {
                font-weight: 600;
                font-size: 26px;
                color: #14100c
            }

            .logo-symbol {
                background-color: #685340;
                color: #f5eee7;
                padding: 5px 8px;
                border-radius: 5px
            }
        </style>

        @yield('styles')

        @isset($seo['keywords'])
            <meta name="keywords" content="{{ $seo['keywords'] }}">
        @endisset

        @isset($seo['description'])
            <meta name="description" content="{{ $seo['description'] }}">
        @endisset

        <meta name="robots" content="{{ $seo['robots'] ? 'index, follow' : 'noindex, nofollow' }}">

    </head>
@show

<body>
    <div class="progress-wrap cursor-pointer">
        <i class="bi bi-arrow-up"></i>
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center justify-content-lg-between">

            <h1 class="logo me-auto me-lg-0" data-aos="fade-right" data-aos-delay="400">
                <a href="/">Kom<span class="logo-symbol">
                        <span class="animate__animated animate__tada animate__infinite">!</span></span>sarNews
                </a>
            </h1>

            <nav id="navbar" class="navbar order-last order-lg-0 mob-nav-toggle" data-aos="fade-top"
                data-aos-delay="900">
                {!! Menu::main() !!}
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>

            <a href="#scrollToMapAndOrder" class="get-started-btn scrollto" data-aos="fade-left"
                data-aos-delay="400">Обрати місто</a>

        </div>
    </header>

    @if (Request::is('/'))
        <section id="hero" class="d-flex align-items-center justify-content-center shadow">
            <div class="container">

                <div class="justify-content-center">
                    <h1 data-aos="fade-down" data-aos-delay="150">Продаж та покупка<br>волосся у Києві<span>.</span>
                    </h1>
                    <h2 data-aos="fade-up" data-aos-delay="150">Швидко, Дорого, Надійно</h2>
                </div>

            </div>

            {{-- arrow down --}}
            <div class="arrow text-center">
                <a href="#scrollToContent" class="scrollto" aria-label="Вниз">
                    <i class="bi bi-arrow-down"></i>
                </a>
            </div>

        </section>
    @else
        <div class="banner-header">
            <picture>
                <img src="{{ asset('img/bg-header.webp') }}" width="auto" height="280" type="image/webp">
                <img src="{{ asset('img/bg-header.jpg') }}" width="auto" height="280" alt="" title="">
            </picture>
            <div class="caption d-flex justify-content-center flex-column">
                <h1 class="{{ !isset($headerSubTitle) ? 'mb-0' : 'mb-3' }}">
                    @yield('headerTitle')
                </h1>
                @hasSection('headerSubTitle')
                    <div class="sub-title">
                        @yield('headerSubTitle')
                    </div>
                @endif
            </div>
        </div>
    @endif

    <main id="main">

        @yield('content')

        <section id="scrollToMapAndOrder" class="map-order py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center">
                            <h2 class="text-light mb-0" data-aos="fade-down" data-aos-delay="300">
                                Купівля і продаж волосся в містах
                            </h2>
                            <h3 class="mt-2" data-aos="fade-down" data-aos-delay="500" style="color: #cfcfcf">Оберіть
                                ваше мість або зробіть заявку
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-lg-7" data-aos="fade-right" data-aos-delay="300">
                        @include('layouts.partials.map')
                    </div>

                    <div class="col-12 col-lg-5" data-aos="fade-left" data-aos-delay="300">
                        @include('layouts.partials.order')
                    </div>
                </div>
            </div>
        </section>

    </main>

    <footer class="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-sm-5 col-lg-4">
                        <div
                            class="footer-column footer-contact d-flex justify-content-center justify-content-lg-start flex-column">
                            <div class="footer-contact-text text-center text-lg-start">
                                <p><i class="bi bi-geo-alt-fill me-1"></i>Україна, Київ</p>
                                <p><i class="bi bi-person-fill me-1"></i>Максим Комісар</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-5 col-lg-4">
                        <div class="footer-contact-info text-center d-flex justify-content-center flex-column">
                            <p class="footer-contact-phone">+380 (73) 785-77-77</p>
                            <p class="footer-contact-mail mx-auto">123komisar@gmail.com</p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="footer-about-social-list d-flex justify-content-center justify-content-lg-end">
                            <a href="https://www.facebook.com/profile.php?id=100081276925197"
                                aria-label="Ми в Facebook" target="_blank"><i class="bi bi-facebook fs-5"></i></a>
                            <a href="https://instagram.com/sale_hair_kyiv?igshid=OGQ5ZDc2ODk2ZA=="
                                aria-label="Ми в Instagram" target="_blank"><i class="bi bi-instagram fs-5"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="footer-bottom-inner">
                            <p class="footer-bottom-copy-right">2023 © KomisarNews. Всі права застережено.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Modal Delete Image Confirm -->
    <div class="modal modal-sm fade" id="deleteImageConfirm" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-3">
                <div class="modal-header">
                    <div class="modal-title fs-5">
                        <span class="me-2"><i class="bi bi-question-circle me-2"></i>Видалення
                    </div>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="confirm-img"></div>
                    <p class="text-center text-muted info">Фото не видалиться з вашої галереї.<br>За потреби, ви
                        зможете
                        додати його.</p>
                    <button type="button" class="btn bg-danger color-white float-end confirm-delete">
                        <i class="bi bi-trash me-1"></i>Видалити
                    </button>
                    <button type="button" class="btn me-2 float-end" data-bs-dismiss="modal">
                        <i class="bi bi-x me-1"></i>Відмінити
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal rules -->
    <div class="modal modal-lg fade" id="modalOrder" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content rounded-3">
                <div class="modal-header">
                    <div class="modal-title fs-5">
                        <span class="me-2"><i class="bi bi-info-circle me-2"></i>Правила
                    </div>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="h-auto" style="height: 100px;">Заповніть всі необхіні поля та надішліть нам замовлення.

                        Бажано вказати колір, вагу і довжину Вашого волосся.

                        Електронна пошта та номер телефону нам необхідний для зворотнього зв`язку з Вами та для того щоб
                        повідомити Вас про купівлю волосся і його вартість. Спочатку Ви отримаєте сповіщення про те, що
                        наш фахівець ознайомлюється з замовленням, після чого Вам надійде другий лист з інформацією про
                        вартість та іншими деталями.
                        Зазвичай це займає не більше декількох годин після відправлення замовлення.

                        В полі "Ваше повідомлення" Ви можете вказати будь-яку іншу, на Вашу думку, важливу інформацію
                        стосовно волосся. Наприклад, структуру волосся, стан зрізу: свіжа рівна стрижка або просто
                        укладене волосся або шиньйон. Вкажіть якомога більше інформації, важливі всі деталі.</p>
                </div>
                <div class="modal-footer rules-danger">
                    <p class=" position-relative">
                        <i class="bi bi-exclamation-triangle-fill float-end fs-5 text-danger opacity-50"></i>
                        МИ НЕ НАДАЄМО ВАШІ КОНТАКТНІ ДАНІ ІНШИМ ОСОБАМ ТА НЕ РОЗСИЛАЄМО СПАМ!<br>
                        НЕ НАМАГАЙТЕСЯ ОБДУРИТИ ОЦІНЮВАЧА, ВИКОРИСТОВУЮЧИ ПРИЙОМИ, ЩОБ ПОЛІПШИТИ ЯКІСТЬ ВОЛОССЯ, АБО
                        РОЗТЯГУВАТИ ПАСМО ЩОБ ВІЗУАЛЬНО ЗБІЛЬШИТИ ДОВЖИНУ. НАШ ФАХІВЕЦЬ ОБОВ'ЯЗКОВО РОЗПІЗНАЄ ОБМАН.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
        <i class="bi bi-arrow-up-short"></i>
    </a>

    @yield('scripts')
</body>

</html>
