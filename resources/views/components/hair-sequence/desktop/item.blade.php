@props(['image', 'title', 'description'])

<div
    class="relative flex flex-col items-center overflow-hidden transition-shadow duration-300 rounded-xl shadow-lg bg-max-soft/15 hover:shadow-xl group group-hover:shadow-max-soft/80">
    <img data-src="{{ Vite::asset('resources/images/' . $image) }}" class="object-cover size-full lazyload" alt="">
    <div
        class="absolute bottom-0 transition-[height] w-full h-16 p-5 duration-300 backdrop-blur-sm bg-max-soft/60 group-hover:h-40 group-hover:bg-max-dark/60 group-hover:backdrop-blur-md">
        <h2 class="relative block mb-3 font-bold text-white uppercase -translate-x-1/2 group-hover:text-left left-1/2">
            {{ $title }}
        </h2>

        <div
            class="w-1/2 h-1 mb-3 transition duration-500 ease-out delay-300 translate-x-1/2 bg-white rounded-full opacity-0 group-hover:translate-x-0 group-hover:opacity-100">
        </div>

        <div
            class="leading-5 text-white transition duration-500 ease-out delay-300 translate-y-56 group-hover:translate-y-0">
            {{ $description }}
        </div>
    </div>
</div>
