@extends('layouts.base')

@vite(['resources/css/pages/articles.css', 'resources/js/pages/articles.js'])

@section('headerTitle', 'Статті')
@section('headerSubTitle', 'Інформативно та пізнавально')

@section('content')
    <div class="section-padding">
        <div class="container">
            @if (count($articles) >= 1)
                <div class="row">
                    <div class="col-12 articles-list">
                        @foreach ($articles as $article)
                            <article class="barber-services-2 mb-90 {{ \PostHelper::even($loop->index) ? 'left' : null }}"
                                data-aos="fade-{{ \PostHelper::even($loop->index) ? 'right' : 'left' }}" data-aos-delay="300">
                                <figure>
                                    <img src="{{ asset('img/bg-header.jpg') }}" width="744" height="466"
                                        class="img-fluid shadow-lg" alt="">
                                </figure>
                                <div class="caption shadow-md">
                                    <h2>
                                        <a href="{{ route('article.show', ['slug' => $article->slug]) }}">
                                            {{ $article->name }}
                                        </a>
                                    </h2>
                                    <p>{{ \Illuminate\Support\Str::limit(strip_tags($article->text), 150, '...') }}</p>
                                    <hr class="border-2">
                                    <div class="info-wrapper">
                                        <div class="more">
                                            <a href="" class="link-btn blck" tabindex="0">Детальніше</a>
                                        </div>
                                        <div class="bi bi-calendar">
                                            {{ \Carbon\Carbon::parse($article->created_at)->format('F d, Y') }}
                                        </div>
                                    </div>
                                </div>
                            </article>
                        @endforeach
                    </div>
                </div>
                <div class="row">
                    <div class="col text-center">
                        {{ $articles->links() }}
                        <button type="button" class="btn load-next rounded-3">Завантажити ще
                            <i class="bi bi-arrow-clockwise"></i>
                        </button>
                    </div>
                </div>
            @else
                <div class="row">
                    <div class="col text-center my-5">
                        <span class="mb-3">
                            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="100" height="100"
                                fill="none">
                                <circle cx="12" cy="12" r="7" stroke="#91765a" stroke-width="1.5" />
                                <circle cx="9" cy="10.277" r="1" fill="#91765a" />
                                <circle cx="15" cy="10.277" r="1" fill="#91765a" />
                                <path stroke="#91765a" stroke-linecap="round"
                                    d="M15 15.25l-.049-.04A4.631 4.631 0 009 15.25" stroke-width="1.3"
                                    style="animation:sad 4s infinite linear" stroke-dasharray="100" />
                            </svg>
                        </span>
                        <div class="fs-6 fw-bold text-uppercase">
                            <div>Матеріалів поки що немає...</div>
                            <div>Завітайте трохи пізніше</div>
                            <div>Ми обов'язково щось напишемо</div>
                        </div>
                    </div>
                </div>
            @endisset
    </div>
</div>
@endsection
