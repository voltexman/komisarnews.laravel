@props([
    'width' => 'sm',
    'rounded' => 'lg',
])

@php
    $maxWidthClass = ' max-w-' . $width;

    $roundedClass = ' rounded-' . $rounded;
    $classes = ' ' . $maxWidthClass . $roundedClass;
@endphp

<template x-teleport="body">
    <div x-show="{{ $modal ?? 'modalOpen' }}"
        class="fixed top-0 left-0 z-[99] flex items-center justify-center w-screen h-screen" x-cloak>
        <div x-show="{{ $modal ?? 'modalOpen' }}" x-transition:enter="ease-out duration-300"
            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
            x-transition:leave="ease-in duration-300" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0" @click="$dispatch('close-modal')"
            class="absolute inset-0 w-full h-full bg-black backdrop-blur-sm bg-opacity-40"></div>
        <div x-show="modalOpen" x-trap.inert.noscroll="modalOpen" x-transition:enter="ease-out duration-300"
            x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
            x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="ease-in duration-300"
            x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
            x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
            class="relative w-full {{ $classes }} flex flex-col justify-between overflow-y-auto scrollbar-active">
            {{ $slot }}
        </div>
    </div>
</template>
