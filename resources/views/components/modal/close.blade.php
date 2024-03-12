<div class="absolute top-4 right-4 group">
    <div @click="$dispatch('close-modal')"
        {{ $attributes->class('absolute top-2 right-2 group cursor-pointer text-neutral-500') }}>
        <span class="sr-only">Close modal</span>
        <x-lucide-x class="w-4 h-4" />
    </div>
</div>
