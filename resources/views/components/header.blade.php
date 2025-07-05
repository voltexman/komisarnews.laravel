@props(['image', 'title', 'caption'])

<header class="relative h-[300px] w-full overflow-hidden">
    <img src="{{ $image }}" height="280" alt={{ env('APP_NAME') }} class="h-full object-cover object-center">
    <div
        class="absolute inset-0 flex size-full flex-col items-center justify-center bg-max-black/40 backdrop-blur-sm backdrop-brightness-75">
        <h1 class="font-[Oswald] text-3xl uppercase text-max-light">{{ $title }}</h1>
        <div class="text-sm font-light uppercase text-max-light/90 mt-2.5">{{ $caption }}</div>
    </div>
</header>
