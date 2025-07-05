@extends('layouts.base')

@section('title', $meta->title)
@section('description', $meta->description)
@section('robots', $meta->robots)

@section('header')
    @parent
    <x-header :image="asset('images/article-header.webp')">
        <x-slot:title>Статті та новини</x-slot>
        <x-slot:caption>Інформативно, пізнавально</x-slot>
    </x-header>
@endsection

@section('content')
    <x-section>
        <livewire:post-list lazy />
    </x-section>
@endsection
