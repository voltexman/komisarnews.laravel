<div>
    <!-- Floating Input -->
    <div class="flex flex-col w-full gap-y-5">
        {{-- Ціль заявки --}}
        <div x-data="{ open: false }" @click.away="open = false" @keydown.esc="open = false" class="relative">

            <input type="hidden" wire:model='$parent.order.goal' />

            {{-- Button --}}
            <button type="button" @click="open = !open"
                x-bind:class="open && 'rounded-b-none border-b0 bg-white border-b-white'"
                class="relative py-3 px-4 pe-9 flex items-center text-nowrap w-full duration-300 cursor-pointer bg-max-soft/20 border border-max-soft/30 rounded-lg text-start text-sm before:absolute before:inset-0 before:z-[1] outline-none">
                <span wire:target="$parent.order.goal"></span>
                <div class="absolute -translate-y-1/2 top-1/2 end-3">
                    <x-lucide-chevrons-up-down class="flex-shrink-0 w-3.5 h-3.5 text-max-soft" />
                </div>
            </button>

            {{-- Panel --}}
            <div x-show="open" x-transition.opacity.300ms
                class="absolute -mt-0.5 left-0 bg-white border border-t-0 border-max-soft/30 rounded-b-lg z-10 w-full p-2 shadow-lg">

                @foreach ($this->goalSelectOptions as $option)
                    <div class="flex flex-row px-3 py-2 duration-300 rounded-lg cursor-pointer hover:bg-max-soft/20">
                        <div class="flex flex-col">
                            <span @click="$wire.set('$parent.order.goal', '{{ $option['value'] }}')"
                                class="text-sm font-bold text-max-dark">
                                {{ $option['value'] }}
                            </span>
                            <span class="text-sm text-max-dark/70">{{ $option['description'] }}</span>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>

        <x-input type="text" label="Ваше ім'я" icon="user" maxlength="40"
            class="border bg-max-soft/20 border-max-soft/20" wire:model='$parent.order.name' />

        <x-input type="text" label="Місто" icon="map-pin" maxlength="30"
            class="border bg-max-soft/20 border-max-soft/20" wire:model='$parent.order.city' required />

        <x-input type="text" label="Електронна пошта" icon="mail" maxlength="40"
            class="border bg-max-soft/20 border-max-soft/20" wire:model='$parent.order.email' />

        <x-input type="text" label="Номер телефону" icon="phone" maxlength="15"
            class="border bg-max-soft/20 border-max-soft/20" wire:model='$parent.order.phone' required />
    </div>
    <!-- End Floating Input -->
</div>
