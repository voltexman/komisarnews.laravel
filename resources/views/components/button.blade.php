@props(['dark'])

@php
    $class = isset($dark)
        ? 'bg-max-dark disabled:hover:bg-max-dark/40 disabled:bg-max-dark/40 disabled:text-max-light/50'
        : 'bg-max-soft disabled:hover:bg-max-dark/40 disabled:bg-max-dark/40 disabled:text-max-text/60';
@endphp

<button
    {{ $attributes->class([
            $class,
            'px-3 py-2 rounded-lg shadow text-max-light active:bg-max-dark lg:hover:bg-max-dark lg:hover:shadow-lg transitiond duration-300',
        ])->merge(['type' => 'button']) }}>
    {{ $slot }}
</button>
