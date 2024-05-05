@props(['current'])

<div {{$attributes}} data-hs-stepper='{
    "currentIndex": {{ $current }}
}'
     class="relative bg-max-light h-[585px] p-5 rounded-lg shadow-lg shadow-max-black/25">
    {{ $slot }}
</div>
