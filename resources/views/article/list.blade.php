@extends('layouts.base')

@section('title', 'Статті')
@section('keywords', 'Статті')
@section('description', 'Статті')
@section('robots', 'all')

@section('header')
    @parent
    <div class="relative h-[280px] w-full overflow-hidden">
        <picture>
            <source srcset="{{ asset('images/article-header.webp') }}" type="image/webp">
            <source srcset="{{ asset('images/article-header.jpg') }}" type="image/jpeg">
            <img src="{{ asset('images/article-header.jpg') }}" height="280" width="auto" alt={{ env('APP_NAME') }}
                class="object-cover object-center h-full">
        </picture>
        <div
            class="absolute top-0 left-0 flex flex-col items-center justify-center w-full h-full backdrop-blur-sm backdrop-brightness-75 bg-max-black/50">
            <h1 class="text-xl uppercase text-max-light">Статті та новини</h1>
            <span class="font-light uppercase text-md text-max-light/80">Інформативно, пізнавально</span>
        </div>
    </div>
@endsection

@section('content')
    <section class="bg-max-light py-14 lg:py-20">
        <div class="container">
            <livewire-post-list lazy />
        </div>
    </section>
@endsection
