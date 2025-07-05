@props(['icon', 'title', 'description', 'number'])

<div class="absolute inset-0 size-full rounded-lg bg-max-light">
    <div class="flex h-full flex-col items-center justify-center">
        <x-lucide-check-circle-2 class="mx-auto mb-5 size-32 stroke-max-dark/95" stroke-width="1" />
        <div class="font-semibold text-max-dark">{{ $title }}</div>
        <div class="text-max-dark">{{ $description }}</div>
        <div class="mt-5 text-xl font-bold drop-shadow-lg">ID: #{{ $number }}</div>
        <x-button type="button" color='light' class="mt-5" wire:click='$refresh' wire:target.except='save'
            wire:loading.attr='disabled'>Нова заявка
            <x-lucide-rotate-ccw class="ms-1 inline-block size-4" wire:loading.remove />
            <x-lucide-refresh-cw class="ms-1 inline-block size-4 animate-spin" wire:loading />
        </x-button>
    </div>
</div>
