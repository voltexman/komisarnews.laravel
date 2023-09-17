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
        <!-- Allow web app to be run in full-screen mode - iOS. -->
        <meta name="apple-mobile-web-app-capable" content="yes">
        <!-- Allow web app to be run in full-screen mode - Android. -->
        <meta name="mobile-web-app-capable" content="yes">
        <!-- Make the app title different than the page title - iOS. -->
        <meta name="apple-mobile-web-app-title" content="Mobile web app title">
        <!-- Configure the status bar - iOS. -->
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <!-- Disable automatic phone number detection. -->
        <meta name="format-detection" content="telephone=no">

        <title>{{ $title }}</title>

        <link rel="icon" type="image/png" href="favicon.png">

        {{-- // TODO: Додати favicon для всіх можливих варіантів --}}

        @isset($keywords)
            <meta name="keywords" content="{{ $keywords }}">
        @endisset ()

        <meta name="description" content="{{ $description }}">
        <meta name="robots" content="{{ isset($robots) ? 'index, follow' : 'noindex, nofollow' }}">

        @yield('styles')
    </head>
@show

<body>
    <div class="progress-wrap cursor-pointer">
        <i class="bi bi-arrow-up"></i>
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center justify-content-lg-between">

            <h1 class="logo me-auto me-lg-0">
                <a href="/">Kom<span class="animate__animated animate__tada animate__infinite">!</span>sarNews</a>
            </h1>

            <nav id="navbar" class="navbar order-last order-lg-0 mob-nav-toggle">
                <ul class="rounded-3">
                    <li><a class="nav-link" href="/articles">Статті</a></li>
                    <li><a class="nav-link" href="/contact">Контакти</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>

            <a href="#sectionMapOrderTitle" class="get-started-btn scrollto">Обрати місто</a>

        </div>
    </header>

    @if (Request::is('/'))
        <section id="hero" class="d-flex align-items-center justify-content-center shadow">
            <div class="container" data-aos="fade-up">

                <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
                    <div class="col-xl-6 col-lg-8">
                        <h1>Продаж та покупка<br>волосся у Києві<span>.</span></h1>
                        <h2>Швидко, Дорого, Надійно</h2>
                    </div>
                </div>

            </div>

            <!-- arrow down -->
            <div class="arrow animate__animated animate__shakeY animate__infinite text-center"
                style="animation-duration: 5s;">
                <a href="#scrollToSection" class="scrollto" aria-label="Вверх"> <i class="bi bi-arrow-down"></i> </a>
            </div>

        </section>
    @else
        <div class="banner-header bg-fixed" data-overlay-dark="5">
            <img src="{{ asset('img/bg-header.jpg') }}" alt="" title="">
            <div class="caption d-flex justify-content-center flex-column">
                <h1 class="{{ !isset($pageHeaderSubTitle) ? 'mb-0' : null }}">
                    @yield('pageHeaderTitle')
                </h1>
                @if (isset($pageHeaderSubTitle) && $pageHeaderSubTitle)
                    <div class="sub-title">@yield('pageHeaderSubTitle')</div>
                @endif
            </div>
        </div>
    @endif

    <main id="main">

        @section('content')
        @show

        <section id="sectionMapOrderTitle" class="section-padding map-order pb-0">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-head text-center">
                            <h2 class="section-title white m-0" data-aos="fade-down" data-aos-delay="300">Купівля і
                                продаж волосся в містах
                            </h2>
                            <h3 class="section-subtitle mt-2" data-aos="fade-down" data-aos-delay="500"
                                style="color: #ccc">Оберіть ваше мість або зробіть заявку
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-lg-7 mb-40 position-relative" data-aos="fade-right" data-aos-delay="300">
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
