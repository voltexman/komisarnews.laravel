@props(['label' => '', 'index', 'active' => false])

<div @class(['hs-accordion', 'active' => $active]) id="hs-basic-heading-{{ $index }}">
    <button
        class="inline-flex items-center w-full p-3 text-sm font-semibold uppercase hs-accordion-toggle hs-accordion-active:bg-max-soft/35 hs-accordion-active:text-max-dark text-max-dark gap-x-3 text-start disabled:opacity-50 disabled:pointer-events-none"
        aria-controls="hs-basic-collapse-{{ $index }}">
        <div class="flex items-center justify-center border rounded-full bg-max-light border-max-dark/50 size-6">
            <span class="text-xs">
                {{ $index + 1 }}
            </span>
        </div>
        {{ $label }}
        <x-lucide-chevron-down class="hs-accordion-active:rotate-180 size-4 ms-auto" />
    </button>
    <div id="hs-basic-collapse-{{ $index }}" @class([
        'hs-accordion-content hs-accordion-active:hidden w-full overflow-hidden transition-[height] duration-300 bg-max-soft/15',
        'hidden' => !$active,
    ])
        aria-labelledby="hs-basic-heading-{{ $index }}">
        <p class="p-6 m-0 leading-4">
            {{ $slot }}
        </p>
    </div>
</div>
