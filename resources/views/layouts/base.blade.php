<!DOCTYPE html>
<html class="scroll-smooth" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

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

    <title>@yield('title')</title>

    @hasSection('keywords')
        <meta name="keywords" content="@yield('keywords')">
    @endif

    @hasSection('description')
        <meta name="description" content="@yield('description')">
    @endif

    <meta name="robots" content="@yield('robots')">

    {{-- @livewireStyles --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body x-data="{ loading: true }">

    <div @load.window="loading=false" x-show="loading" x-transition.opacity.duration.500ms
        class="fixed w-screen h-screen top-0 left-0 bg-black z-[90] flex justify-center">
        <div class="animate-spin inline-block w-20 h-20 border-[6px] border-current border-t-transparent text-max-soft rounded-full self-center"
            role="status" aria-label="loading">
            <span class="sr-only">Loading...</span>
        </div>
    </div>

    {{-- <div x-show="scrolled" x-init="getScrolled();
    getPosition()" class="fixed z-50 bottom-4 right-4 size-12"
        @scroll.window="getScrolled(); getPosition()" x-transition.duration.500ms>
        <svg class="size-full" width="36" height="36" viewBox="0 0 36 36" xmlns="http://www.w3.org/2000/svg">
            <!-- Background Circle -->
            <circle cx="18" cy="18" r="16" fill="none" class="stroke-current text-max-soft"
                stroke-width="1.7"></circle>
            <!-- Progress Circle inside a group with rotation -->
            <g class="origin-center -rotate-90 transform">
                <circle cx="18" cy="18" r="16" fill="none" class="stroke-current text-gray-300"
                    stroke-width="1.7" stroke-dasharray="100" :stroke-dashoffset="position"></circle>
            </g>
        </svg>
        <div class="absolute top-1/2 start-1/2 transform -translate-y-1/2 -translate-x-1/2">
            <a href="#" rel="nofollow"><x-lucide-arrow-up class="h-4 w-4 text-max-soft" /></a>
        </div>
    </div> --}}

    @section('header')
        <div x-data="navbar" x-init="scrolled" x-bind:class="(isScrolled || isOpen) && 'bg-max-black/90 shadow-lg'"
            @scroll.window="scrolled" class="z-50 fixed w-screen h-16 duration-300">
            <div class="container flex justify-between h-full self-center">

                <div class="flex items-center">
                    <a href="/" class="text-white uppercase text-lg font-normal">
                        Kom<span class="bg-max-dark text-white rounded px-2">!</span>sarnews
                    </a>
                </div>

                <div class="hidden lg:flex">
                    <x-menu />
                </div>

                <button @click="toggle" type="button" class="lg:hidden ms-3 outline-none order-2">
                    <x-lucide-menu class="h-6 w-6 text-white" x-show="!isOpen" />
                    <x-lucide-x class="h-6 w-6 text-white" x-show="isOpen" />
                </button>

                <!-- mobile navbar -->
                <div class="lg:hidden" x-cloak>
                    <div x-show="isOpen" class="absolute top-16 left-0 w-screen p-4 bg-max-black/90 rounded-b-lg shadow-xl"
                        x-transition.transform @click.away="isOpen = false">
                        <x-menu />
                    </div>
                </div>
                <!-- end mobile navbar -->

                <div class="flex items-center ms-auto lg:ms-0 order-1">
                    <a href="#map"
                        class="bg-max-dark hidden lg:inline-flex rounded-lg text-white uppercase px-2 font-normal text-xs h-9 items-center">
                        <x-lucide-map-pin class="h-4 w-4 me-1" />
                        Обрати місто
                    </a>
                    <a href="#map"
                        class="bg-max-dark lg:hidden rounded-lg text-white uppercase px-2 font-normal text-xs inline-flex h-9 items-center">
                        <x-lucide-map-pin class="h-4 w-4 me-1" />
                        Міста
                    </a>
                </div>
            </div>
        </div>
    @show

    <main>

        @yield('content')

        <section class="bg-max-soft py-10" id="map">
            <div class="container">
                <h2 class="text-2xl drop-shadow-lg text-center font-semibold text-max-light uppercase">
                    Купівля і продаж<br class="lg:hidden"> волосся в містах
                </h2>
                <h3 class="font-normal drop-shadow-lg text-center uppercase mb-5 text-white">
                    Оберіть ваше місто <br class="lg:hidden"> або зробіть заявку
                </h3>
                <div class="flex flex-col lg:flex-row">
                    <div class="w-full lg:w-3/4 lg:me-10 self-center">
                        @include('layouts.partials.map')
                    </div>

                    <div class="lg:w-1/4 lg:min-w-[480px] mt-14 lg:mt-0 mb-4 lg:mb-0">
                        @livewire('order')
                    </div>
                </div>
            </div>
        </section>

    </main>

    <footer class="bg-max-black">
        <div class="container py-20">
            <div class="flex flex-col lg:flex-row lg:justify-between">
                <div class="lg:w-1/3 text-max-light/60 font-semibold">
                    <p class="flex flex-row justify-center lg:justify-start">
                        <x-lucide-map-pin class="h-4 w-4 me-1 mt-0.5" />
                        Україна, Київ
                    </p>
                    <p class="flex flex-row justify-center lg:justify-start">
                        <x-lucide-user class="h-4 w-4 me-1 mt-0.5" />
                        Максим Комісар
                    </p>
                </div>
                <div class="lg:w-1/3 text-center mt-5 lg:mt-0">
                    <p class="text-2xl font-extrabold text-max-soft">+380 (73) 785-77-77</p>
                    <span class="font-semibold text-max-light/60 border-b pb-1 border-max-soft">
                        123komisar@gmail.com
                    </span>
                </div>
                <div class="lg:w-1/3 flex gap-3 justify-end self-center text-max-soft mt-10 lg:mt-0">
                    <a href="https://www.facebook.com/profile.php?id=100081276925197" aria-label="Ми в Facebook"
                        target="_blank"><x-lucide-facebook class="h-6 w-6" /></a>
                    <a href="https://instagram.com/sale_hair_kyiv?igshid=OGQ5ZDc2ODk2ZA==" aria-label="Ми в Instagram"
                        target="_blank"><x-lucide-instagram class="h-6 w-6" /></a>
                </div>
            </div>
        </div>
        <div class="text-center text-xs text-max-light/50 py-5 border-t border-max-light/[.07]">
            {{ date('Y') }} © KomisarNews. Всі права застережено.
        </div>
    </footer>

    <!-- Modal -->
    <div id="hs-modal-upgrade-to-pro"
        class="hs-overlay hidden w-full h-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto">
        <div
            class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto">
            <div class="bg-white border border-gray-200 rounded-xl shadow-sm pointer-events-auto overflow-hidden">
                <div class="p-4 sm:p-7">
                    <div class="text-center relative">
                        <div class="text-lg font-semibold text-gray-700">Умови погодження</div>
                        <button type="button"
                            class="flex absolute top-0 right-0 justify-center items-center w-7 h-7 text-sm font-semibold rounded-lg border border-transparent text-gray-800"
                            data-hs-overlay="#hs-bg-gray-on-hover-cards">
                            <span class="sr-only">Close</span>
                            <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d=" M18 6 6 18" />
                                <path d="m6 6 12 12" />
                            </svg>
                        </button>
                    </div>

                    <p class="mt-5 divide-y divide-gray-200">
                        Заповніть всі необхіні поля та надішліть нам
                        замовлення.

                        Бажано вказати колір, вагу і довжину Вашого волосся.

                        Електронна пошта та номер телефону нам необхідний для зворотнього зв`язку з Вами та для того
                        щоб
                        повідомити Вас про купівлю волосся і його вартість. Спочатку Ви отримаєте сповіщення про те,
                        що
                        наш фахівець ознайомлюється з замовленням, після чого Вам надійде другий лист з інформацією
                        про
                        вартість та іншими деталями.
                        Зазвичай це займає не більше декількох годин після відправлення замовлення.

                        В полі "Ваше повідомлення" Ви можете вказати будь-яку іншу, на Вашу думку, важливу
                        інформацію
                        стосовно волосся. Наприклад, структуру волосся, стан зрізу: свіжа рівна стрижка або просто
                        укладене волосся або шиньйон. Вкажіть якомога більше інформації, важливі всі деталі.
                    </p>
                </div>

                <!-- Footer -->
                <div class="text-xs leading-4 bg-red-100 p-3">
                    <b>МИ НЕ НАДАЄМО ВАШІ КОНТАКТНІ ДАНІ ІНШИМ ОСОБАМ ТА НЕ РОЗСИЛАЄМО СПАМ!</b>
                    НЕ НАМАГАЙТЕСЯ ОБДУРИТИ ОЦІНЮВАЧА, ВИКОРИСТОВУЮЧИ ПРИЙОМИ, ЩОБ ПОЛІПШИТИ ЯКІСТЬ ВОЛОССЯ, АБО
                    РОЗТЯГУВАТИ ПАСМО ЩОБ ВІЗУАЛЬНО ЗБІЛЬШИТИ ДОВЖИНУ. НАШ ФАХІВЕЦЬ ОБОВ'ЯЗКОВО РОЗПІЗНАЄ ОБМАН.
                </div>
                <!-- End Footer -->
            </div>
        </div>
    </div>
    <!-- End Modal -->

    {{-- @livewireScriptConfig --}}

</body>

<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('navbar', () => ({
            isOpen: false,
            isScrolled: false,
            toggle() {
                this.isOpen = !this.isOpen;
            },
            scrolled() {
                this.isScrolled = window.pageYOffset >= 200 ? true : false;
            }
        }));
    });

    Alpine.data('scroll', () => {
        return {
            scrolled: false,
            position: 0,
            loading: true,
            getPosition() {
                var scrollPosition = window.pageYOffset;
                var windowHeight = window.innerHeight;
                var documentHeight = document.body.clientHeight;

                this.position = -(scrollPosition / (documentHeight - windowHeight)) * 100;
            }
        }
    });
</script>

</html>
