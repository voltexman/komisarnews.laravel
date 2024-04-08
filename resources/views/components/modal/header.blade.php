<div class="flex items-center justify-between px-4 py-3">
    <h3 class="font-semibold text-max-dark">
        {{ $slot }}
    </h3>
    <button type="button"
        class="flex items-center justify-center text-sm font-semibold text-gray-800 border border-transparent rounded-full size-7 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none"
        data-hs-overlay="#rules-check-document">
        <span class="sr-only">Close</span>
        <x-lucide-x class="w-4 h-4" />
    </button>
</div>
