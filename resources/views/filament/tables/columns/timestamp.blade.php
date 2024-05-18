<div class="flex items-stretch h-full">
    <div class="self-center">
        <div class="text-xs text-zinc-200">
            <x-lucide-calendar class="inline-block -mt-1 size-3" />
            {{ \Carbon\Carbon::parse($getRecord()->created_at)->format('d.m.y') }}
        </div>
        <div class="text-xs text-zinc-400">
            <x-lucide-clock class="inline-block -mt-1 size-3" />
            {{ \Carbon\Carbon::parse($getRecord()->created_at)->format('H:m') }}
        </div>
    </div>
</div>
