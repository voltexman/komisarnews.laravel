@props(['index', 'icon', 'title', 'description', 'active'])

<div @class(['hs-accordion', 'active' => isset($active)]) id="hs-basic-heading-{{ $index }}">
    <button
        class="inline-flex items-center w-full p-3 text-sm font-semibold uppercase hs-accordion-toggle hs-accordion-active:bg-max-soft/35 hs-accordion-active:text-max-black text-max-black/80 gap-x-3 text-start disabled:opacity-50 disabled:pointer-events-none"
        aria-controls="hs-basic-collapse-{{ $index }}">
        <div class="flex items-center justify-center border rounded-full bg-max-light border-max-dark/50 size-6">
            <span class="text-xs">
                {{ $index }}
            </span>
        </div>

        @isset($title)
            {{ $title }}
        @endisset

        <x-lucide-chevron-down class="hs-accordion-active:rotate-180 size-4 ms-auto" />
    </button>
    <div id="hs-basic-collapse-{{ $index }}" @class([
        'hs-accordion-content w-full overflow-hidden transition-[height] duration-300 bg-max-soft/20',
        'hidden' => !isset($active),
    ])
        aria-labelledby="hs-basic-heading-{{ $index }}">

        @isset($description)
            <div class="px-10 py-6 leading-4 text-center sm:px-20 text-max-black/80">
                <img data-src="{{ asset("images/icons/{$icon}.svg") }}" class="mx-auto mb-5 size-20 lazyload" alt="">
                {{ $description }}
            </div>
        @endisset
    </div>
</div>
