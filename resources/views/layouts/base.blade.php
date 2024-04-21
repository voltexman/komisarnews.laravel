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

<body x-data="{ loading: true }">

    <div x-show="loading" @load.window="loading=false" x-transition.opacity.duration.500ms
        class="fixed w-screen h-screen top-0 left-0 bg-black z-[100] flex justify-center">
        <div class="animate-spin inline-block w-20 h-20 border-[6px] border-current border-t-transparent text-max-soft rounded-full self-center"
            role="status" aria-label="loading">
            <span class="sr-only">Loading...</span>
        </div>
    </div>

    <div x-data="scrollProgress" x-show="isVisible" x-transition.opacity.duration.500ms x-cloak
        class="fixed z-40 grid items-center w-12 h-12 rounded-full shadow-md bottom-4 right-4 bg-max-soft/50 shadow-max-dark/20"
        :style="{ background: `conic-gradient(rgb(92, 75, 56, .7) ${percent}% , rgb(145, 118, 90, .4) ${percent}%)` }">
        <a href="#" rel="nofollow">
            <span class="z-50 flex items-center justify-center w-10 h-10 mx-auto rounded-full bg-max-soft">
                <x-lucide-arrow-up class="w-4 h-4 text-center text-max-light" />
            </span>
        </a>
    </div>

    <header>
        @section('header')
            <nav x-data="navbar" x-init="scrolled" class="fixed z-50 w-screen duration-500" x-cloak
                x-bind:class="(isScrolled || isOpen) && 'bg-max-black/90 backdrop-blur-sm shadow-lg shadow-max-black/40'"
                @scroll.window="scrolled">
                <div class="px-2 mx-auto max-w-7xl sm:px-6 lg:px-8">
                    <div class="relative flex items-center justify-between h-16">

                        {{-- Logo --}}
                        <div class="flex items-center flex-shrink-0">
                            <a href="/" class="text-lg font-normal text-white uppercase">
                                Kom<span class="px-2 text-white rounded bg-max-dark">!</span>sarnews
                            </a>
                        </div>

                        {{-- Desktop Menu --}}
                        <div class="flex items-center justify-center flex-1 sm:items-stretch sm:justify-start ">
                            <div class="hidden w-full sm:ml-6 sm:block">
                                <div class="flex space-x-4">
                                    <x-menu />
                                </div>
                            </div>
                        </div>

                        {{-- Scroll to Map Button --}}
                        <div class="inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                            <div class="flex items-center order-1 ms-auto lg:ms-0">
                                <a href="#map"
                                    class="items-center hidden px-2 text-xs font-normal text-white uppercase rounded-lg bg-max-dark lg:inline-flex h-9">
                                    <x-lucide-map-pin class="w-4 h-4 me-1" />
                                    Обрати місто
                                </a>
                                <a href="#map"
                                    class="inline-flex items-center px-2 text-xs font-normal text-white uppercase rounded-lg bg-max-dark lg:hidden h-9">
                                    <x-lucide-map-pin class="w-4 h-4 me-1" />
                                    Міста
                                </a>
                            </div>
                        </div>

                        {{-- Mobile Show Menu Button --}}
                        <div class="inset-y-0 left-0 flex items-center sm:hidden">
                            <!-- Mobile menu button-->
                            <button type="button" @click="toggle"
                                class="relative inline-flex items-center justify-center p-2 text-white rounded-md"
                                aria-controls="mobile-menu" aria-expanded="false">
                                <span class="absolute -inset-0.5"></span>
                                <span class="sr-only">Open main menu</span>
                                <x-lucide-menu class="w-6 h-6" x-show="!isOpen" />
                                <x-lucide-x class="w-6 h-6" x-show="isOpen" />
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Mobile menu, show/hide based on menu state. -->
                <div x-show="isOpen" x-collapse class="sm:hidden" id="mobile-menu">
                    <div class="px-2 pt-2 pb-3 space-y-1">
                        <x-menu />
                    </div>
                </div>
            </nav>
        @show
    </header>

    <main>

        @yield('content')

        <section class="py-10 bg-max-soft scroll-mt-16" id="map">
            <div class="container">
                <h2 class="text-2xl font-semibold text-center text-white uppercase drop-shadow-lg">
                    Купівля і продаж<br class="lg:hidden"> волосся в містах
                </h2>
                <h3 class="mb-5 font-normal text-center text-white uppercase drop-shadow-lg">
                    Оберіть ваше місто <br class="lg:hidden"> або зробіть заявку
                </h3>
                <div class="flex flex-col lg:flex-row">
                    <div class="self-center w-full lg:w-3/4 lg:me-10">
                        @include('layouts.partials.map')
                    </div>

                    <div class="lg:w-1/4 lg:min-w-[480px] mt-14 lg:mt-0 mb-4 lg:mb-0">
                        <livewire:order lazy />
                    </div>
                </div>
            </div>
        </section>

    </main>

    <footer class="bg-max-black">
        <div class="container py-20">
            <div class="flex flex-col lg:flex-row lg:justify-between">
                <div class="font-semibold lg:w-1/3 text-max-light/60">
                    <p class="flex flex-row justify-center lg:justify-start">
                        <x-lucide-map-pin class="h-4 w-4 me-1 mt-0.5" />
                        Україна, Київ
                    </p>
                    <p class="flex flex-row justify-center lg:justify-start">
                        <x-lucide-user class="h-4 w-4 me-1 mt-0.5" />
                        Максим Комісар
                    </p>
                </div>
                <div class="mt-5 text-center lg:w-1/3 lg:mt-0">
                    <p class="text-2xl font-extrabold text-max-soft">+380 (73) 785-77-77</p>
                    <span class="pb-1 font-semibold border-b text-max-light/60 border-max-soft">
                        123komisar@gmail.com
                    </span>
                </div>
                <div class="flex self-center justify-end gap-3 mt-10 lg:w-1/3 text-max-soft lg:mt-0">
                    <a href="https://www.facebook.com/profile.php?id=100081276925197" aria-label="Ми в Facebook"
                        target="_blank">
                        <x-lucide-facebook class="w-6 h-6" />
                    </a>
                    <a href="https://instagram.com/sale_hair_kyiv?igshid=OGQ5ZDc2ODk2ZA==" aria-label="Ми в Instagram"
                        target="_blank">
                        <x-lucide-instagram class="w-6 h-6" />
                    </a>
                </div>
            </div>
        </div>
        <div class="text-center text-xs text-max-light/50 py-5 border-t border-max-light/[.07]">
            {{ date('Y') }} © KomisarNews. Всі права застережено.
        </div>
    </footer>

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

            Alpine.data('scrollProgress', () => ({
                circumference: 30 * 2 * Math.PI,
                percent: 0,
                isVisible: false,
                init() {
                    this.isVisible = window.pageYOffset >= 500 ? true : false;
                    window.addEventListener('scroll', () => {
                        let winScroll = document.body.scrollTop || document.documentElement
                            .scrollTop
                        let height = document.documentElement.scrollHeight - document
                            .documentElement.clientHeight
                        this.percent = Math.round((winScroll / height) * 100)

                        this.isVisible = window.pageYOffset >= 500 ? true : false;
                    });
                }
            }));
        });
    </script>
</body>

</html>
