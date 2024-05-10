@props(['step', 'icon', 'label'])

<li data-hs-stepper-nav-item='{
    "index": {{ $step }}
}'>
    <div
        class="relative min-w-[28px] min-h-[28px] flex flex-col items-center md:w-full md:inline-flex md:flex-wrap md:flex-row text-xs align-middl">
        <span class="flex items-center justify-center flex-shrink-0 w-8 h-8 mx-auto font-medium rounded-full">

            @svg('lucide-' . $icon, 'size-6 text-max-dark/70 hs-stepper-active:block hs-stepper-active:animate-bounce hs-stepper-success:hidden')
            <x-lucide-check class="hidden size-6 text-max-soft hs-stepper-success:block" />

        </span>
    </div>
    <div class="grow md:grow-0">
        <span class="block text-xs font-semibold text-max-dark lg:text-sm hs-stepper-success:text-max-soft">
            {{ $label }}
        </span>
    </div>
</li>
