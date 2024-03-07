<div
    {{ $attributes->class('fixed inset-0 z-[90] flex items-center justify-center overflow-auto bg-black bg-opacity-50 backdrop-blur-sm') }}>
        
    <div {{ $attributes }}
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 scale-90"
        x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-300"
        x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-90"
        class="absolute w-full lg:max-w-xl max-h-[80%] lg:h-[500px] flex flex-col flex-shrink shadow-lg shadow-max-light/15 bg-white rounded-lg top-1/2 -translate-y-1/2 left-1/2 -translate-x-1/2 overflow-hidden transition ease-out duration-300">

        {{-- Header --}}
        <div class="p-4 bg-max-soft/15">
            <div class="font-semibold uppercase text-max-dark drop-shadow-lg shadow-max-dark">
                @svg('heroicon-o-' . $header->attributes['icon'], 'inline-flex h-7 w-7', ['style' => 'color: #555'])
                {{ $header }}
            </div>
        </div>

        {{-- Modal Body --}}
        <div class="h-full p-4 overflow-hidden">
            <div
                class="max-h-full leading-5 text-sm overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-track]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-max-soft/20 dark:[&::-webkit-scrollbar-thumb]:bg-max-soft">

                {{ $slot }}

            </div>
        </div>

        {{-- Footer --}}
        <div {{ $footer->attributes->class('p-2 mt-auto') }}>
            {{ $footer }}
        </div>
    </div>
</div>
