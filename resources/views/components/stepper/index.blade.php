@props(['header', 'caption', 'footer'])

<div {{ $attributes }}
    class="relative flex h-[600px] flex-col justify-between gap-y-5 rounded-lg bg-max-white p-5 shadow-lg shadow-max-black/25">

    <div class="flex flex-col gap-y-2.5">
        <div class="text-center font-[Oswald] text-lg font-semibold uppercase text-max-dark">
            {{ $caption }}
        </div>
        <ul class="relative mx-auto flex w-full max-w-sm flex-row justify-between gap-x-2.5">
            {{ $header }}
        </ul>
    </div>

    <div class="mb-auto">
        {{ $slot }}
    </div>

    <div class="flex justify-between">
        {{ $footer }}
    </div>
</div>
