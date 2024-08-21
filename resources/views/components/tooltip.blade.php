@props(['color' => 'black', 'position' => 'top', 'arrow' => true])

<div class="relative">
    <button type="button"
        class="cursor-pointer peer focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2"
        aria-describedby="tooltip">
        <x-lucide-circle-help class="size-4 text-max-light/80 hover:text-max-light" />
    </button>
    <div id="tooltip"
        class="pointer-events-none absolute bottom-full mb-2 left-1/2 -translate-x-1/2 z-10 flex w-64 flex-col gap-1 rounded bg-max-black p-2.5 opacity-0 duration-500 transition-all ease-out peer-hover:opacity-100 peer-focus:opacity-100"
        role="tooltip">
        <p class="m-0 text-xs text-max-light">{{ $slot }}.</p>
    </div>
</div>
