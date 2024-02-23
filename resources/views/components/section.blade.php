@props(['title', 'caption'])

<section {{ $attributes }}>

    @isset($title)
        <h2
            {{ $title->attributes->merge([
                'class' => 'text-2xl drop-shadow-lg text-center font-semibold uppercase',
            ]) }}>
            {{ $title }}
        </h2>
    @endisset

    @isset($caption)
        <h3
            {{ $caption->attributes->merge([
                'class' => 'font-bold drop-shadow-lg uppercase drop-shadow-lg text-sm text-center mt-2 mb-8',
            ]) }}>
            {{ $caption }}
        </h3>
    @endisset

    <div class="container">
        {{ $slot }}
    </div>

</section>
