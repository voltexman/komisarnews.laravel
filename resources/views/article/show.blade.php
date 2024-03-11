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
            class="absolute top-0 left-0 flex flex-col items-center justify-center w-full h-full backdrop-blur-md backdrop-brightness-75 bg-max-black/40">
            <h1 class="text-xl uppercase text-max-light">{{ $post->name }}</h1>
        </div>
    </header>
@endsection

@section('content')
    <article class="overflow-hidden bg-max-light py-14 lg:py-20">
        <div class="container">
            <picture>
                <source srcset="{{ $post->getFirstMediaUrl('posts', 'header-webp') }}" type="image/webp">
                <source srcset="{{ $post->getFirstMediaUrl('posts', 'header-jpg') }}" type="image/jpeg">
                <img src="{{ $post->getFirstMediaUrl('posts', 'header-jpg') }}" width="300" height="280"
                    alt={{ env('APP_NAME') }}
                    class="w-full mb-8 border rounded-lg shadow-lg lg:w-1/3 lg:float-left lg:me-8 lg:mb-5 shadow-max-soft/50 border-max-soft/45">
            </picture>

            <p>{{ $post->text }}</p>

        </div>
    </article>
@endsection
