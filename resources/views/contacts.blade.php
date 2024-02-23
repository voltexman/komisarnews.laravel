@extends('layouts.base')

@section('title', 'Контакти')
@section('keywords', 'Контакти')
@section('description', 'Контакти')
@section('robots', 'all')

@vite(['resources/css/pages/contacts.css'])
@vite(['resources/js/pages/contacts.js'])

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
            class="absolute top-0 left-0 h-full w-full flex flex-col justify-center items-center backdrop-blur-sm backdrop-brightness-75 bg-max-black/40">
            <h1 class="text-max-light text-xl uppercase">Контакти</h1>
            <span class="text-md text-max-light/80 uppercase font-light">Зв`язок з нами</span>
        </div>
    </header>
@endsection

@section('content')
    <section class="bg-max-light py-14 lg:py-20">
        <div class="container">
            <div class="flex flex-col lg:flex-row">
                <div class="lg:w-2/3">
                    <p>Зв'яжіться з нами, надіславши листа.</p>
                    <p>Також, ми завжди на зв'язку в месенджерах Viber та WhatsApp.</p>
                    <p>Чекаємо на Ваші коментарі, зауваження чи побажанння.</p>

                    <div class="flex mt-10 mb-5">
                        <div class="border rounded-full border-max-soft/80 p-4">
                            <x-lucide-map-pin class="h-6 w-6 text-max-soft" />
                        </div>
                        <div class="flex flex-col ms-4">
                            <span class="font-bold">Адреса</span>
                            <span>Україна, Київ</span>
                        </div>
                    </div>
                    <div class="flex mb-5">
                        <div class="border rounded-full border-max-soft/80 p-4">
                            <x-lucide-phone class="h-6 w-6 text-max-soft" />
                        </div>
                        <div class="flex flex-col ms-4">
                            <span class="font-bold">Телефон</span>
                            <span><a href="tel:+380737857777">+380 (73) 785-77-77</a></span>
                        </div>
                    </div>
                    <div class="flex mb-5">
                        <div class="border rounded-full border-max-soft/80 p-4">
                            <x-lucide-mail class="h-6 w-6 text-max-soft" />
                        </div>
                        <div class="flex flex-col ms-4">
                            <span class="font-bold">e-Mail</span>
                            <span>123komisar@gmail.com</span>
                        </div>
                    </div>
                    <div class="flex">
                        <div class="border rounded-full border-max-soft/80 p-4">
                            <x-lucide-user class="h-6 w-6 text-max-soft" />
                        </div>
                        <div class="flex flex-col ms-4">
                            <span class="font-bold">Контактна особа</span>
                            <span>Максим Комісар</span>
                        </div>
                    </div>
                </div>

                <div class="lg:w-1/3 mt-10 lg:mt-0">
                    @livewire('feedback')
                </div>
            </div>
        </div>
    </section>
@endsection
