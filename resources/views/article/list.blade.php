@extends('layouts.main')
@vite(['resources/css/pages/articles.css', 'resources/js/pages/articles.js'])

@section('pageHeaderTitle', 'Статті')
@section('pageHeaderSubTitle', 'Інформативно та пізнавально')

@section('content')
    <section class="section-padding">
        <div class="container">
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
                                <h2><a href="">{{ $article->name }}</a></h2>
                                <p>{{ \Illuminate\Support\Str::limit(strip_tags($article->text), 150, '...') }}</p>
                                <hr class="border-2">
                                <div class="info-wrapper">
                                    <div class="more">
                                        <a href="" class="link-btn blck" tabindex="0">Детальніше</a>
                                    </div>
                                    <div class="bi bi-calendar">date</div>
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
        </div>
    </section>
@endsection
