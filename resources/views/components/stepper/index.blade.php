@props(['current'])

<div {{ $attributes }} data-hs-stepper='{
    "currentIndex": {{ $current }}
}' id="stepper"
    class="relative bg-max-light h-[590px] p-5 rounded-lg shadow-lg shadow-max-black/25">
    {{ $slot }}
</div>
