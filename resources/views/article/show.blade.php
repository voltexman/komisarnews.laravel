@extends('layouts.base')

@section('title', $post->title)
@section('keywords', $post->keywordsn)
@section('description', $post->description)
@section('robots', $post->robots ? 'index, follow' : 'noindex, nofollow')

@vite(['resources/css/pages/articles.css'])
@vite(['resources/js/pages/articles.js'])

@section('header')
    @parent
    <header class="relative h-[280px] w-full overflow-hidden">
        <picture>
            <source srcset="{{ $post->getFirstMediaUrl('posts', 'header-webp') }}" type="image/webp">
            <source srcset="{{ $post->getFirstMediaUrl('posts', 'header-jpg') }}" type="image/jpeg">
            <img src="{{ $post->getFirstMediaUrl('posts', 'header-jpg') }}" width="auto" height="280"
                alt={{ env('APP_NAME') }} class="object-cover object-center w-full h-full">
        </picture>
        <div
            class="absolute top-0 left-0 h-full w-full flex flex-col justify-center items-center backdrop-blur-md backdrop-brightness-75 bg-max-black/40">
            <h1 class="text-max-light text-xl uppercase">{{ $post->name }}</h1>
        </div>
    </header>
@endsection

@section('content')
    <article class="bg-max-light py-14 lg:py-20 overflow-hidden">
        <div class="container">
            <picture>
                <source srcset="{{ $post->getFirstMediaUrl('posts', 'header-webp') }}" type="image/webp">
                <source srcset="{{ $post->getFirstMediaUrl('posts', 'header-jpg') }}" type="image/jpeg">
                <img src="{{ $post->getFirstMediaUrl('posts', 'header-jpg') }}" width="300" height="280"
                    alt={{ env('APP_NAME') }}
                    class="w-full lg:w-1/3 lg:float-left lg:me-8 lg:mb-5 mb-8 shadow-lg rounded-lg shadow-max-soft/50 border border-max-soft/45">
            </picture>

            <p>{{ $post->text }}</p>

            <x-social-links />
        </div>
    </article>
@endsection
