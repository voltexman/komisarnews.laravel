@props(['index', 'image', 'title', 'description', 'active'])

<div class="relative overflow-hidden rounded-lg bg-max-text rounded-br-2xl rounded-tl-2xl">
    <button id="controlsAccordionItem-{{ $index }}" type="button"
        class="flex items-center justify-between w-full gap-4 p-4 text-left text-white uppercase bg-max-soft underline-offset-2"
        aria-controls="accordionItem-{{ $index }}" @click="selected = {{ $index }}"
        :class="selected === {{ $index }} ? 'font-bold' : 'font-medium'"
        :aria-expanded="selected === {{ $index }} ? 'true' : 'false'">
        <div class="flex items-center justify-center rounded-full bg-max-dark/50 size-7">
            <span class="text-sm font-bold text-gray-300">
                {{ $index }}
            </span>
        </div>
        <div class="me-auto">{{ $title }}</div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-width="2" stroke="currentColor"
            class="transition size-5 shrink-0" aria-hidden="true"
            :class="selected === {{ $index }} ? 'rotate-180' : ''">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
        </svg>
    </button>

    <div x-cloak x-show="selected === {{ $index }}" id="accordionItem-{{ $index }}" role="region"
        aria-labelledby="controlsAccordionItem-{{ $index }}" x-collapse>
        <img data-src="{{ asset('images/' . $image) }}" class="object-cover size-full lazyload" alt="">

        <div class="absolute bottom-0 p-4 font-medium rounded-tl-2xl backdrop-blur-sm bg-max-dark/60">
            <div class="text-sm text-white">
                {{ $description }}
            </div>
        </div>
    </div>
</div>
