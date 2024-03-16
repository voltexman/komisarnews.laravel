{{-- Колір волосся --}}
<div xdata="{ open: false }" @click.away="open = false" @keydown.esc="open = false" class="relative">

    <input type="hidden" wire:model='$parent.order.color' />

    {{-- Button --}}
    <button type="button" @click="open = !open" x-bind:class="open && 'rounded-b-none border-b0 bg-white border-b-white'"
        class="relative py-3 px-4 pe-9 flex items-center text-nowrap w-full duration-300 cursor-pointer bg-max-soft/20 border border-max-soft/30 rounded-lg text-start text-sm before:absolute before:inset-0 before:z-[1] outline-none">
        <span x-text="$wire.order.color"></span>
        <div class="absolute -translate-y-1/2 top-1/2 end-3">
            <i data-lucide="chevrons-up-down" class="flex-shrink-0 w-3.5 h-3.5 text-max-soft"></i>
        </div>
    </button>

    {{-- Panel --}}
    <div x-show="open" x-transition.opacity.500ms
        class="absolute -mt-0.5 left-0 bg-white border border-t-0 border-max-soft/30 rounded-b-lg z-10 w-full p-2 shadow-lg">

        @foreach ($this->colors as $color)
            <div class="flex flex-row px-3 py-2 duration-300 rounded-lg cursor-pointer hover:bg-max-soft/20">
                {{-- <div class="self-center me-3">
                    <span style="background-color: {{ $color['label'] }}"
                        class="block w-5 h-5 border rounded-full shadow-lg border-max-dark"></span>
                </div>
                <div class="text-sm text-max-dark">{{ $color['option'] }}</div> --}}
            </div>
        @endforeach

    </div>
</div>

<div class="flex justify-between gap-x-4">

    <!-- Input Number -->
    <div class="border rounded-lg bg-max-soft/5 border-max-soft/30">
        <div class="flex items-center justify-between w-full gap-x-1">
            <div class="px-3 py-2 grow">
                <span class="block text-xs text-gray-700">
                    Вага (гр)
                </span>
                <input type="text" wire:model='$parent.order.hair_weight' placeholder="0"
                    class="w-full p-0 bg-transparent border-0 text-max-dark focus:ring-0 placeholder:text-sm placeholder:text-max-soft/50"
                    aria-label="Вага">
            </div>
        </div>
    </div>
    <!-- End Input Number -->

    <!-- Input Number -->
    <div class="border rounded-lg bg-max-soft/5 border-max-soft/30">
        <div class="flex items-center justify-between w-full gap-x-1">
            <div class="relative px-3 py-2 grow">
                <span class="block text-xs text-gray-700">
                    Довжина (мм)
                </span>
                <span class="absolute top-0 text-lg text-red-500 right-1">*</span>
                <input type="text" wire:model='$parent.order.hair_length' placeholder="0"
                    class="w-full p-0 bg-transparent border-0 text-max-dark focus:ring-0 placeholder:text-sm placeholder:text-max-soft/50"
                    aria-label="Довжина">
            </div>
        </div>
    </div>
    <!-- End Input Number -->

    <!-- Input Number -->
    <div class="border rounded-lg bg-max-soft/5 border-max-soft/30">
        <div class="flex items-center justify-between w-full gap-x-1">
            <div class="px-3 py-2 grow">
                <span class="block text-xs text-gray-700">
                    Вік
                </span>
                <input type="text" wire:model='$parent.order.age' placeholder="25"
                    class="w-full p-0 bg-transparent border-0 text-max-dark focus:ring-0 placeholder:text-sm placeholder:text-max-soft/50"
                    aria-label="Вік">
            </div>
        </div>
    </div>
</div>
