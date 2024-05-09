<div class="mx-auto mb-5 space-y-5 lg:w-1/2">
    <div class="relative mx-4">
        <input type="text" wire:model.live.debounce.500ms='search'
            class="block w-full px-4 py-3 text-sm border rounded-lg border-max-soft/40 bg-max-dark/40 peer ps-11 focus:border-max-dark focus:ring-max-dark placeholder:text-max-light/40"
            placeholder="пошук статей" aria-label="пошук статей за запитом">
        <div class="absolute inset-y-0 flex items-center pointer-events-none start-0 ps-4">
            <x-lucide-search class="opacity-60 size-5 text-max-light" />
        </div>

        <span class="absolute text-xs font-light text-max-light/50">
            <x-lucide-info class="inline-block size-3 me-0.5" />
            почніть вводити запит для пошуку
        </span>

        <div x-show="$wire.search.length" class="absolute inset-y-0 flex items-center end-4">
            <x-lucide-loader-circle class="hidden opacity-60 size-4 text-max-light animate-spin"
                wire:loading.remove.class='hidden' wire:targeta='search' />
            <button type="button" wire:loading.remove wire:target='search' @click="$wire.search = ''">
                <x-lucide-circle-x class="opacity-60 size-4 text-max-light" />
            </button>
        </div>
    </div>

    <div x-show='$wire.search.length' class="pt-5">
        @if ($posts !== null && count($posts) > 0)
            <div class="w-full mb-3 text-center">Знайдені статті...</div>
            <x-scrollbar class="max-h-[50vh]">
                @foreach ($posts as $post)
                    <div class="grid grid-cols-3 gap-4" :key='{{ $post->id }}'>
                        <div>
                            <a href="{{ route('article.show', ['slug' => $post->slug]) }}">
                                <img src="{{ $post->getFirstMediaUrl('posts', 'preview') }}"
                                    class="object-cover rounded-lg" />
                            </a>
                        </div>
                        <div class="col-span-2">
                            <div class="text-sm uppercase text-max-light line-clamp-1 lg:line-clamp-5">
                                <a href="{{ route('article.show', ['slug' => $post->slug]) }}">
                                    {{ $post->name }}
                                </a>
                            </div>
                            <p class="text-sm leading-5 text-max-light/50 line-clamp-3">{{ $post->text }}</p>
                        </div>
                    </div>
                @endforeach
            </x-scrollbar>
        @else
            <div class="flex flex-col items-center">
                <x-lucide-search-x class="mb-2 text-max-light opacity-40 size-8" />
                <span class="text-xs text-max-light opacity-40">По вашому запиту статей не знайдено.</span>
            </div>
        @endif
    </div>
</div>
