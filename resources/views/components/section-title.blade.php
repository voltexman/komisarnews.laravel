<div>
    <h2
        {{ $attributes->merge([
            'class' => 'text-2xl drop-shadow-lg text-center font-semibold uppercase',
        ]) }}>
        {{ $slot }}
    </h2>
</div>
