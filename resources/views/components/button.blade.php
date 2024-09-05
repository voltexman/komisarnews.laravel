@props(['variant' => 'dark', 'size' => 'default'])

<button
    {{ $attributes->class([
            'bg-max-soft lg:hover:bg-max-dark/80' => $variant === 'light',
            'bg-max-soft lg:hover:bg-max-soft/65' => $variant === 'soft',
            'bg-max-dark lg:hover:bg-max-dark/80' => $variant === 'dark',
            'bg-max-orange lg:hover:bg-max-orange/80' => $variant === 'orange',
            'bg-red lg:hover:bg-red/80' => $variant === 'danger',
            'px-3 py-2 rounded-md font-medium text-max-light text-sm transition duration-300 disabled:opacity-50',
        ])->merge(['type' => 'button']) }}>
    {{ $slot }}
</button>
