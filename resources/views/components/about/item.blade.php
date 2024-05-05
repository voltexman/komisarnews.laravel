@props(['icon', 'title', 'description'])

<div class="flex">
    <div class="size-16 me-3">
        <img src="{{ asset("images/icons/{$icon}.svg") }}" width="100" height="100" alt="">
    </div>
    <div class="flex flex-col">
        @isset($title)
            <div class="font-semibold uppercase">{{ $title }}</div>
        @endisset

        @isset($description)
            <div class="">{{ $description }}</div>
        @endisset
    </div>
</div>
