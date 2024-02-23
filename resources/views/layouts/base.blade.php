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

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>

    <div class="fixed z-50 bottom-4 right-4 size-12" x-data="{ scrolled: false, scrollPos: 0 }" x-show="scrolled"
        x-transition.duration.500ms
        @scroll.window="scrolled = (window.pageYOffset >= 400) ? true : false;scrollPos = (window.pageYOffset / (document.body.scrollHeight - window.innerHeight)) * 100"
        x-init="scrolled = (window.pageYOffset >= 400) ? true : false;
        scrollPos = (window.pageYOffset / (document.body.scrollHeight - window.innerHeight)) * 100">
        <svg class="size-full" width="36" height="36" viewBox="0 0 36 36" xmlns="http://www.w3.org/2000/svg">
            <!-- Background Circle -->
            <circle cx="18" cy="18" r="16" fill="none" class="stroke-current text-max-soft"
                stroke-width="1.7"></circle>
            <!-- Progress Circle inside a group with rotation -->
            <g class="origin-center -rotate-90 transform">
                <circle cx="18" cy="18" r="16" fill="none" class="stroke-current text-gray-300"
                    stroke-width="1.7" stroke-dasharray="100" :stroke-dashoffset="-scrollPos"></circle>
            </g>
        </svg>
        <div class="absolute top-1/2 start-1/2 transform -translate-y-1/2 -translate-x-1/2">
            <a href="#"><x-lucide-arrow-up class="h-4 w-4 text-max-soft" /></a>
        </div>
    </div>

    <div x-data="{ loading: true }" @load.window="loading=false" x-show="loading" x-transition.opacity.duration.750ms
        class="fixed w-full h-screen top-0 left-0 bg-black z-[100] flex justify-center">
        <div class="animate-spin inline-block w-20 h-20 border-[6px] border-current border-t-transparent text-max-soft rounded-full self-center"
            role="status" aria-label="loading">
            <span class="sr-only">Loading...</span>
        </div>
    </div>

    @section('header')
        <div x-data="{ background: false }" :class="background && 'bg-black/90 shadow-2xl'"
            @scroll.window="background = (window.pageYOffset >= 150) ? true: false"
            class="fixed flex flex-wrap h-16 sm:justify-start sm:flex-nowrap z-50 w-full text-sm py-3 sm:py-0 transition-all duration-500 navbar">
            <nav class="relative justify-between max-w-[85rem] w-full mx-auto px-4 sm:flex sm:items-center sm:px-6 lg:px-8"
                aria-label="Global">
                <div class="flex items-center justify-between">
                    <a href="/" class="text-white uppercase text-lg font-normal">
                        Kom<span class="bg-max-dark text-white rounded px-2">!</span>sarnews
                    </a>
                    <div class="sm:hidden flex">
                        <div class="flex items-center gap-x-2 sm:ms-auto">
                            <a href="#mapup"
                                class="bg-max-dark rounded-lg me-4 text-white uppercase px-2 font-normal text-xs inline-flex h-9 items-center">
                                <x-lucide-map-pin class="h-4 w-4 me-1" />
                                Міста
                            </a>
                        </div>

                        <button type="button" class="text-white hover:text-gray-600" data-hs-overlay="#docs-sidebar"
                            aria-controls="docs-sidebar" aria-label="Toggle navigation">
                            <span class="sr-only">Toggle Navigation</span>
                            <x-lucide-menu class="h-5 w-5" />
                        </button>

                        <div id="docs-sidebar"
                            class="hs-overlay hs-overlay-open:translate-x-0 -translate-x-full transition-all duration-300 transform hidden fixed top-0 start-0 bottom-0 z-50 w-64 bg-max-black border-2 border-e border-black pt-7 pb-10 overflow-y-auto lg:block lg:translate-x-0 lg:end-auto lg:bottom-0 [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300">
                            <div class="px-6">
                                <a class="flex-none text-xl text-gray-300 font-normal uppercase" href="#"
                                    aria-label="Logo">
                                    KomisarNews
                                </a>
                            </div>
                            <nav class="hs-accordion-group p-5 w-full flex flex-col flex-wrap"
                                data-hs-accordion-always-open>
                                <x-menu />
                            </nav>
                        </div>
                    </div>
                </div>
                <a href="#map"
                    class="bg-max-dark rounded-lg hidden lg:flex text-white uppercase px-2 font-normal text-xs h-10 items-center">
                    <x-lucide-map-pin class="h-4 w-4 me-1" />
                    Обрати місто
                </a>
            </nav>
        </div>
    @show

    <main>

        @yield('content')

        <section class="bg-max-soft py-10" id="map">
            <div class="container">
                <h2 class="text-2xl drop-shadow-lg text-center font-semibold text-max-light uppercase">
                    Купівля і продаж<br class="lg:hidden"> волосся в містах
                </h2>
                <h3 class="font-bold drop-shadow-lg text-center uppercase mb-5 text-[#cfcfcf]">
                    Оберіть ваше мість <br class="lg:hidden"> або зробіть заявку
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
                        <x-lucide-map-pin class="h-4 w-4 me-1 mt-0.5" />Україна,Київ
                    </p>
                    <p class="flex flex-row justify-center lg:justify-start">
                        <x-lucide-user class="h-4 w-4 me-1 mt-0.5" />
                        Максим Комісар
                    </p>
                </div>
                <div class="lg:w-1/3 text-center mt-5 lg:mt-0">
                    <p class="text-2xl font-extrabold text-max-soft">+380 (73) 785-77-77</p>
                    <span
                        class="font-semibold text-max-light/60 border-b pb-1 border-max-soft">123komisar@gmail.com</span>
                </div>
                <div class="lg:w-1/3 flex gap-3 justify-end self-center text-max-soft mt-10 lg:mt-0">
                    <a href="https://www.facebook.com/profile.php?id=100081276925197" aria-label="Ми в Facebook"
                        target="_blank"><x-lucide-facebook class="h-6 w-6" /></a>
                    <a href="https://instagram.com/sale_hair_kyiv?igshid=OGQ5ZDc2ODk2ZA==" aria-label="Ми в Instagram"
                        target="_blank"><x-lucide-instagram class="h-6 w-6" /></a>
                </div>
            </div>
        </div>
        <div class="text-center text-xs text-max-light/50 py-5 border-t border-max-light/[.07]">{{ date('Y') }} ©
            KomisarNews. Всі права застережено.</div>
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

</body>

</html>
