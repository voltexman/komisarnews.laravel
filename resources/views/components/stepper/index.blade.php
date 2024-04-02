@props(['current'])

<div data-hs-stepper='{
    "currentIndex": {{ $current }}
}'
    class="relative bg-max-light h-[575px] p-5 rounded-lg shadow-lg shadow-max-black/25" wire:ignore>
    {{ $slot }}
</div>
