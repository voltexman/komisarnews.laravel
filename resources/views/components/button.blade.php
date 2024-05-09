@props(['color' => 'dark'])

<button
    {{ $attributes->class([
            'bg-max-soft disabled:hover:bg-max-dark/40 disabled:bg-max-light/70 disabled:text-max-text/20 disabled:text-opacity-20' =>
                $color === 'light',
            'bg-max-soft disabled:hover:bg-max-dark/40 disabled:bg-max-dark/40 disabled:text-max-light/50 active:bg-max-text/60 lg:hover:bg-max-soft/65' =>
                $color === 'soft',
            'bg-max-dark disabled:hover:bg-max-dark/40 disabled:bg-max-dark/40 disabled:text-max-light/50 active:bg-max-text/60 lg:hover:bg-max-text/60' =>
                $color === 'dark',
            'px-3 py-2 rounded-lg shadow text-max-light text-sm transition duration-300',
        ])->merge(['type' => 'button']) }}>
    {{ $slot }}
</button>
