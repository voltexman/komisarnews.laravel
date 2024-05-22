@extends('layouts.base')

@section('title', $post->title)

@if ($post->description)
    @section('description', $post->description)
@endif

@section('robots', $post->is_indexing ? 'all' : 'noindex, nofollow')

@section('header')
    @parent
    <div class="relative h-[280px] w-full overflow-hidden">
        <img src="{{ empty($post->getFirstMediaUrl('posts', 'header')) ? asset('images/article-header.webp') : $post->getFirstMediaUrl('posts', 'header') }}"
            width="auto" height="280" alt="{{ env('APP_NAME') }} - {{ $post->title }}"
            class="object-cover object-center w-full h-full">
        <div
            class="absolute top-0 left-0 flex flex-col items-center justify-center w-full h-full backdrop-blur-md backdrop-brightness-75 bg-max-black/40">
            <h1 class="text-xl uppercase text-max-light">{{ $post->name }}</h1>

            @if ($post->comments->count() > 0)
                <span class="text-sm font-semibold text-white">
                    <x-lucide-message-square-text class="inline-block size-4" />
                    {{ $post->comments->count() }}
                </span>
            @endif

            @if ($post->likes->count() > 0)
                <span class="text-sm font-semibold text-white">
                    <x-lucide-thumbs-up class="inline-block size-4" />
                    {{ $post->likes->count() }}
                </span>
            @endif
        </div>
    </div>
@endsection

@section('content')
    <article class="overflow-hidden bg-max-light py-14 lg:py-20">
        <div class="container">
            <div class="flex flex-col lg:flex-row">
                @if ($post->getFirstMediaUrl('posts', 'preview'))
                    <img src="{{ $post->getFirstMediaUrl('posts', 'preview') }}" width="300" height="280"
                        alt={{ env('APP_NAME') }}
                        class="w-full mb-8 block border rounded-lg sm:w-1/3 sm:float-left sm:me-5 sm:mb-5 shadow-max-soft/50 shadow-lg border-max-soft/30">
                @endif
                <div>{!! $post->body !!}</div>
            </div>

            @if ($post->category === App\Models\Post::CATEGORY_ARTICLES)
                <div class="flex flex-col lg:flex-row justify-normal lg:justify-between">
                    @if (!$post->tags->isEmpty())
                        <div class="flex mt-5">
                            @foreach ($post->tags as $tag)
                                <span class="text-sm font-medium uppercase me-3 text-max-dark">
                                    #{{ $tag->name }}
                                </span>
                            @endforeach
                        </div>
                    @endif

                    <div>
                        <button class="mt-3 text-max-dark">
                            <x-lucide-thumbs-up class="inline-block -mt-1 size-5" />
                            Подобається стаття?
                        </button>
                    </div>
                </div>

                <livewire:comments :postId='$post->id' />
            @endif
        </div>
    </article>
@endsection
