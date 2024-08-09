@props(['title', 'caption'])

<section {{ $attributes->class('section') }}>

    @isset($title)
        <h2 {{ $title->attributes->class('section-title') }}>
            {{ $title }}
        </h2>
    @endisset

    @isset($caption)
        <h3 {{ $caption->attributes->class('section-caption') }}>
            {{ $caption }}
        </h3>
    @endisset

    <div class="container">
        {{ $slot }}
    </div>

</section>
