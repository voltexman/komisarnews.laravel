@props(['color' => 'dark'])

<button
    {{ $attributes->class([
            'bg-max-soft lg:hover:bg-max-dark/80' => $color === 'light',
            'bg-max-soft lg:hover:bg-max-soft/65' => $color === 'soft',
            'bg-max-dark lg:hover:bg-max-dark/80' => $color === 'dark',
            'px-3 py-2 rounded-md font-medium text-max-light text-sm transition duration-300 disabled:opacity-50',
        ])->merge(['type' => 'button']) }}>
    {{ $slot }}
</button>
