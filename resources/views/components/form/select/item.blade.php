@props(['icon', 'label', 'description'])

<div
    {{ $attributes->class('flex items-center gap-2 px-4 py-2 text-sm transition duration-300 cursor-pointer bg-max-soft/80 text-max-light hover:bg-neutral-800/5 focus-visible:bg-neutr al-800/10 focus-visible:text-neutral-700 hover:text-max-light/80 focus-visible:outline-none') }}>

    @isset($icon)
        <div class="me-2">
            @svg('lucide-' . $icon, 'size-6 text-max-light')
        </div>
    @endisset

    <div>
        @isset($label)
            <div class="text-sm font-semibold">{{ $label }}</div>
        @endisset

        @isset($description)
            <div class="text-xs font-normal text-zinc-200">{{ $description }}</div>
        @endisset
    </div>
</div>
