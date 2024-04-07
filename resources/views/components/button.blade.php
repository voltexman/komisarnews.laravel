@props(['label', 'color', 'icon'])

<button type="button"
    {{ $attributes->class([
        'bg-max-soft/85' => $color == 'light',
        'bg-max-text/40' => $color == 'dark',
        'rounded-lg py-2.5 px-4 text-max-light text-sm cursor-pointer',
    ]) }}>
    {{ isset($label) ? $lebel : $slot }}
</button>
