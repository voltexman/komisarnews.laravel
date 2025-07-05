@props(['icon', 'title', 'description', 'number'])

<div class="absolute left-0 start-0 top-0 size-full rounded-lg bg-max-light">
    <div class="flex h-full flex-col items-stretch justify-center text-max-soft" role="status">
        <div class="self-center text-center">
            <img src="{{ $icon }}" class="mx-auto mb-5 size-32">
            <div class="">{{ $title }}</div>
            <div class="">{{ $description }}</div>
            <div class="mt-5 text-xl font-bold drop-shadow-lg">#{{ $number }}</div>
            <x-button type="button" color='light' class="mt-5" wire:click='$refresh' wire:target.except='save'
                wire:loading.attr='disabled'>Нова заявка
                <x-lucide-rotate-ccw class="ms-1 inline-block size-4" wire:loading.remove />
                <x-lucide-refresh-cw class="ms-1 inline-block size-4 animate-spin" wire:loading />
            </x-button>
        </div>
    </div>
</div>
