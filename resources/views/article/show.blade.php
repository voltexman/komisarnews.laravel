@extends('layouts.base')

@section('title', $post->title)

@if ($post->description)
    @section('description', $post->description)
@endif

@section('robots', $post->is_indexing ? 'all' : 'noindex, nofollow')

@section('header')
    @parent
    <div class="relative h-[280px] w-full overflow-hidden">
        <img src="{{ $post->getFirstMediaUrl('posts', 'header') ?: asset('images/article-header.webp') }}" width="auto"
            height="280" alt="{{ env('APP_NAME') }} - {{ $post->title }}" class="object-cover object-center w-full h-full">
        <div
            class="absolute top-0 left-0 flex flex-col items-center justify-center w-full h-full px-10 text-center lg:px-0 backdrop-blur-md backdrop-brightness-75 bg-max-black/40">
            <h1 class="text-xl uppercase text-max-light">{{ $post->name }}</h1>

            <div class="flex mt-3 space-x-3">
                @if ($post->comments->count() > 0)
                    <div class="flex space-x-1 text-sm font-semibold text-gray-100/80">
                        <span><x-lucide-message-square-text class="inline-block size-4" /></span>
                        <span class="mt-0.5">{{ $post->comments->count() }}</span>
                    </div>
                @endif

                @if ($post->likes->count() > 0)
                    <div class="flex space-x-1 text-sm font-semibold text-gray-100/80">
                        <span><x-lucide-thumbs-up class="inline-block size-4" /></span>
                        <span class="mt-0.5">{{ $post->likes->count() }}</span>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection

@section('content')
    <article class="overflow-hidden bg-max-light py-14 lg:py-20">
        <div class="container">
            <p class="w-full">
                @if ($post->getFirstMediaUrl('posts', 'preview'))
                    <img src="{{ $post->getFirstMediaUrl('posts', 'preview') }}" width="300" height="280"
                        alt="{{ env('APP_NAME') . ' - ' . $post->title }}"
                        class="block w-full border rounded-lg shadow-lg lg:mb-8 sm:w-1/3 sm:float-left sm:me-5 sm:mb-5 shadow-max-soft/50 border-max-soft/30">
                @endif
            <div>{!! $post->body !!}</div>
            </p>

            @if ($post->category === App\Enums\Post\Categories::ARTICLES)
                <div class="flex flex-row justify-between mt-5">
                    @if (!$post->tags->isEmpty())
                        <div>
                            @foreach ($post->tags as $tag)
                                <span class="text-sm font-medium uppercase me-3 text-max-dark">
                                    #{{ $tag->name }}
                                </span>
                            @endforeach
                        </div>
                    @endif

                    <div>
                        <livewire:like-button type='post' :model='$post' />
                    </div>
                </div>

                <div class="mt-5">
                    <livewire:comment.comment-list :postId='$post->id' />
                    <livewire:comment.comment-form :postId='$post->id' />
                </div>
            @endif
        </div>
    </article>
@endsection
