@extends('layouts.base')
@vite(['resources/css/pages/articles.css', 'resources/js/pages/articles.js'])

@section('pageHeaderTitle', $article->name)
@section('content')
    <section class="article-content section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p><?= $article->text ?></p>
                </div>
            </div>
        </div>
    </section>
@endsection
