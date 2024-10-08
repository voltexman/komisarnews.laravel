<!DOCTYPE html>
<html class="scroll-smooth" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
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
            <nav x-data="navbar" x-init="scrolled"
                class="container fixed z-50 w-full duration-500 lg:-translate-x-1/2 lg:left-1/2 lg:rounded-xl lg:top-3"
                x-bind:class="(isScrolled || navIsOpen || searchIsOpen) &&
                'bg-max-black/90 backdrop-blur-sm shadow-lg shadow-max-black/40'"
                @scroll.window="scrolled" x-cloak>
                <div class="relative flex items-center justify-between h-16">

                    {{-- Logo --}}
                    <div class="flex items-center flex-shrink-0">
                        <a href="{{ route('main') }}" class="text-lg font-normal uppercase text-max-light">
                            Kom!sar<span class="px-1 text-white rounded bg-max-orange">news</span>
                        </a>
                    </div>

                    {{-- Desktop Menu --}}
                    <div class="flex items-center justify-center flex-1 sm:items-stretch sm:justify-start">
                        <div class="hidden w-full sm:ml-6 lg:block">
                            <div class="flex space-x-4">
                                <x-menu>
                                    <x-menu.item :link="route('main')" :active="request()->routeIs('main')">
                                        Головна
                                    </x-menu.item>
                                    <x-menu.item :link="route('articles.list')" :active="request()->routeIs('articles.list')">
                                        Статті
                                    </x-menu.item>
                                    <x-menu.item :link="route('contacts.show')" :active="request()->routeIs('contacts.show')">
                                        Контакти
                                    </x-menu.item>
                                </x-menu>
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center p-2">
                        <button type="button" class="text-white h-9" @click="searchToggle" aria-label="Пошук статей">
                            <x-lucide-search class="size-5" x-show="!searchIsOpen" />
                            <x-lucide-x class="size-5" x-show="searchIsOpen" />
                        </button>
                    </div>

                    {{-- Scroll to Map Button --}}
                    <div class="inset-y-0 right-0 flex items-center mx-2 sm:static sm:inset-auto">
                        <div class="flex items-center order-1 ms-auto lg:ms-0">
                            <a href="#map" aria-label="Обрати місто">
                                <x-button class="flex items-center uppercase" variant='orange'>
                                    <x-lucide-map-pin class="flex-none size-4 me-1" />
                                    <span class="hidden lg:block">Обрати місто</span>
                                    <span class="block lg:hidden">Міста</span>
                                </x-button>
                            </a>
                        </div>
                    </div>

                    {{-- Mobile Show Menu Button --}}
                    <div class="inset-y-0 right-0 flex items-center lg:hidden">
                        <!-- Mobile menu button-->
                        <button type="button" @click="navToggle"
                            class="relative inline-flex items-center justify-center p-2 rounded-md -me-2 text-max-light"
                            aria-controls="mobile-menu" aria-expanded="false">
                            <span class="absolute -inset-0.5"></span>
                            <span class="sr-only">Open main menu</span>
                            <x-lucide-menu class="size-6" x-show="!navIsOpen" />
                            <x-lucide-x class="size-6" x-show="navIsOpen" />
                        </button>
                    </div>
                </div>

                <!-- Mobile menu, show/hide based on menu state. -->
                <div x-show="navIsOpen" x-collapse class="lg:hidden" id="mobile-menu">
                    <div class="px-2 pt-2 pb-3 space-y-1">
                        <x-menu>
                            <x-menu.item :link="route('main')" :active="request()->routeIs('main')">Головна</x-menu.item>
                            <x-menu.item :link="route('articles.list')" :active="request()->routeIs('articles.list')">Статті</x-menu.item>
                            <x-menu.item :link="route('contacts.show')" :active="request()->routeIs('contacts.show')">Контакти</x-menu.item>
                        </x-menu>
                    </div>
                </div>
                <div x-show="searchIsOpen" x-collapse>
                    <div class="px-2 pt-2 pb-3 space-y-1">
                        <livewire:search-posts />
                    </div>
                </div>
            </nav>
        @show
    </header>

    <main>

        @yield('content')

        <x-section class="py-10 bg-max-dark scroll-mt-16" id="map">
            <x-slot:title class="text-max-light">
                Купівля і продаж<br class="lg:hidden"> волосся в містах
            </x-slot>
            <x-slot:caption class="text-max-light">
                Оберіть ваше місто<br class="lg:hidden"> або <span class="text-max-orange">зробіть заявку</span>
            </x-slot>

            <div class="flex flex-col lg:flex-row">
                <div class="self-center w-full lg:w-3/4 lg:me-10">
                    @include('layouts.partials.map')
                </div>

                <div class="lg:w-1/4 lg:min-w-[480px] mt-14 lg:mt-0 mb-4 lg:mb-0 sm:px-28 lg:px-0">
                    <livewire:order />
                </div>
            </div>
        </x-section>

    </main>

    <x-section class="px-0 border-b-8 py-14 bg-max-black border-max-light/10 sm:px-28 lg:px-0">
        <div class="flex flex-col lg:flex-row lg:gap-y-0 gap-y-10 lg:gap-8 lg:justify-between">
            <div class="order-2 w-full lg:order-1 lg:w-2/3">
                <livewire:subscribe />
            </div>
            <div class="order-1 w-full lg:order-2 lg:w-1/3">
                <livewire:callback />
            </div>
        </div>
    </x-section>

    <footer class="bg-max-black">
        <div class="container py-20">
            <div class="flex flex-col lg:flex-row lg:justify-between">
                <div class="font-semibold lg:w-1/3 text-max-light/60">
                    <div class="flex flex-row justify-center lg:justify-start">
                        <x-lucide-map-pin class="size-4 me-1 mt-0.5" />
                        <span>Україна, Київ</span>
                    </div>
                    <div class="flex flex-row justify-center lg:justify-start">
                        <x-lucide-user class="size-4 me-1 mt-0.5" />
                        <span>Максим Комісар</span>
                    </div>
                </div>
                <div class="mt-5 text-center lg:w-1/3 lg:mt-0">
                    <div class="text-2xl font-extrabold text-max-text">+380 (73) 785-77-77</div>
                    <div class="font-semibold text-max-light/60">123komisar@gmail.com</div>
                </div>
                <div class="flex self-center justify-end gap-3 mt-10 lg:w-1/3 text-max-soft lg:mt-0">
                    <a href="https://www.facebook.com/profile.php?id=100081276925197" aria-label="Ми в Facebook"
                        target="_blank">
                        <x-lucide-facebook class="size-6" />
                    </a>
                    <a href="https://instagram.com/sale_hair_kyiv?igshid=OGQ5ZDc2ODk2ZA==" aria-label="Ми в Instagram"
                        target="_blank">
                        <x-lucide-instagram class="size-6" />
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
                navIsOpen: false,
                searchIsOpen: false,
                isScrolled: false,
                navToggle() {
                    this.navIsOpen = !this.navIsOpen;
                    this.searchIsOpen = false;
                },
                searchToggle() {
                    this.searchIsOpen = !this.searchIsOpen;
                    this.navIsOpen = false;
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
