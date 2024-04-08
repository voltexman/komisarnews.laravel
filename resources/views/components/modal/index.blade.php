<div
    {{ $attributes->merge(['class' => 'hs-overlay hidden size-full fixed top-0 start-0 z-[80] backdrop-blur-sm overflow-x-hidden overflow-y-auto']) }}>
    <div
        class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto h-[calc(100%-3.5rem)] flex items-center">
        <div class="flex flex-col max-h-full overflow-hidden bg-max-light shadow-sm pointer-events-auto rounded-xl h-2/3">
            {{ $slot }}
        </div>
    </div>
</div>
