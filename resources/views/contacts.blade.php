@extends('layouts.base')

@section('title', 'Контакти')
@section('keywords', 'Контакти')
@section('description', 'Контакти')
@section('robots', 'all')

@section('header')
    @parent
    <header class="relative h-[280px] w-full overflow-hidden">
        <picture>
            <source srcset="{{ asset('images/contact-header.webp') }}" type="image/webp">
            <source srcset="{{ asset('images/contact-header.jpg') }}" type="image/jpeg">
            <img src="{{ asset('images/contact-header.jpg') }}" height="280" alt={{ env('APP_NAME') }}
                class="object-cover object-center h-full">
        </picture>
        <div
            class="absolute top-0 left-0 flex flex-col items-center justify-center w-full h-full backdrop-blur-sm backdrop-brightness-75 bg-max-black/40">
            <h1 class="text-xl uppercase text-max-light">Контакти</h1>
            <span class="font-light uppercase text-md text-max-light/80">Зв`язок з нами</span>
        </div>
    </header>
@endsection

@section('content')
    <section class="bg-max-light py-14 lg:py-20">
        <div class="container">
            <div class="flex flex-col lg:flex-row">
                <div class="lg:w-2/3">
                    <p class="m-0">Зв'яжіться з нами, надіславши листа.</p>
                    <p class="m-0">Також, ми завжди на зв'язку в месенджерах Viber та WhatsApp.</p>
                    <p class="m-0">Чекаємо на Ваші коментарі, зауваження чи побажанння.</p>

                    <div class="flex mt-10 mb-5">
                        <div class="p-4 border rounded-full border-max-soft/80">
                            <x-heroicon-o-map-pin class="w-6 h-6 text-max-soft" />
                        </div>
                        <div class="flex flex-col self-center ms-4">
                            <span class="font-bold">Адреса</span>
                            <span>Україна, Київ</span>
                        </div>
                    </div>
                    <div class="flex mb-5">
                        <div class="p-4 border rounded-full border-max-soft/80">
                            <x-heroicon-o-phone class="w-6 h-6 text-max-soft" />
                        </div>
                        <div class="flex flex-col self-center ms-4">
                            <span class="font-bold">Телефон</span>
                            <span><a href="tel:+380737857777">+380 (73) 785-77-77</a></span>
                        </div>
                    </div>
                    <div class="flex mb-5">
                        <div class="p-4 border rounded-full border-max-soft/80">
                            <x-heroicon-o-envelope class="w-6 h-6 text-max-soft" />
                        </div>
                        <div class="flex flex-col self-center ms-4">
                            <span class="font-bold">e-Mail</span>
                            <span>123komisar@gmail.com</span>
                        </div>
                    </div>
                    <div class="flex">
                        <div class="p-4 border rounded-full border-max-soft/80">
                            <x-heroicon-o-user class="w-6 h-6 text-max-soft" />
                        </div>
                        <div class="flex flex-col self-center ms-4">
                            <span class="font-bold">Контактна особа</span>
                            <span>Максим Комісар</span>
                        </div>
                    </div>
                </div>

                <div class="mt-10 lg:w-1/3 lg:mt-0">
                    @livewire('feedback')
                </div>
            </div>
        </div>
    </section>
@endsection
