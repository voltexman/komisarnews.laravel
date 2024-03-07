@props(['label' => '', 'index'])

<div x-data="{ id: $id('accordion') }" class="cursor-pointer group">
    <button @click="setActiveAccordion(id)" :class="isActive(id) ? 'bg-max-dark/30' : 'bg-max-text/5'"
        class="flex items-center justify-between w-full p-4 font-semibold text-left uppercase duration-500 select-none text-max-dark">

        <div class="flex w-6 h-6 border rounded-full border-max-dark bg-max-light/80 me-3">
            <span x-text="{{ $index }}" class="self-center w-full text-center"></span>
        </div>

        <span class="me-auto" :class="isActive(id) ? '' : ''">{{ $label }}</span>

        <div class="duration-200 ease-out" :class="{ 'rotate-180': isActive(id) }">
            <x-heroicon-o-chevron-down class="w-4 h-4 " />
        </div>
    </button>

    <div x-show="isActive(id)" x-collapse x-cloak>
        <div class="py-5 px-6 text-[16px] leading-5 text-center text-max-dark bg-max-dark/15">
            {{ $slot }}
        </div>
    </div>

</div>
