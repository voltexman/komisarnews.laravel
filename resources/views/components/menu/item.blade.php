@props(['link', 'active'])

@php
    $activeClass =
        $link === env('APP_URL') . '/articles' && request()->routeIs('article.show')
            ? 'text-max-soft'
            : 'text-max-light';
@endphp

{{-- @dump($link) --}}

@if (!$active)
    <li @class([
        $activeClass,
        'mx-10 mb-3 text-sm transition lg:m-0 hover:text-max-soft',
    ])>
        <a class="flex items-center w-full p-3 font-semibold border rounded-lg ps-6 lg:p-0 lg:bg-transparent lg:border-0 gap-x-2 border-max-soft/20 bg-max-soft/10"
            href="{{ $link }}">
            {{ $slot }}
        </a>
    </li>
@endif