@props(['image', 'title', 'description'])

<div
    class="relative flex flex-col items-center overflow-hidden transition-shadow duration-300 rounded-lg shadow-lg bg-max-soft/15 hover:shadow-xl group group-hover:shadow-max-soft/80">
    <img data-src="{{ asset('images/' . $image) }}" class="object-cover size-full lazyload" alt="">

    <div
        class="absolute bottom-0 w-full h-48 p-5 transition duration-300 translate-y-32 backdrop-blur-sm bg-max-soft/60 group-hover:translate-y-0 group-hover:bg-max-dark/60 group-hover:backdrop-blur-md">
        <h2 class="relative block mb-3 font-bold text-white uppercase -translate-x-1/2 group-hover:text-left left-1/2">
            {{ $title }}
        </h2>

        <div
            class="w-1/2 h-1 mb-3 transition duration-500 ease-out delay-300 translate-x-1/2 bg-white rounded-full opacity-0 group-hover:translate-x-0 group-hover:opacity-100">
        </div>

        <div
            class="font-thin leading-5 text-white transition duration-500 ease-out delay-300 translate-y-56 group-hover:translate-y-0">
            {{ $description }}</div>

    </div>
</div>
