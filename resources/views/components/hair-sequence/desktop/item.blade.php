@props(['icon', 'title', 'description'])

<div class="flex flex-col items-center px-8 py-10 transition-shadow bg-white rounded-lg shadow-md hover:shadow-xl">
    <img data-src="{{ asset("images/icons/{$icon}.svg") }}" class="w-20 h-20 lazyload" alt="">

    <h2 class="mt-8 mb-2 font-bold text-center uppercase">title</h2>

    <div class="">description</div>
</div>
