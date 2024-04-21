<div class="mb-5 space-y-5">
    <div class="relative mx-4">
        <input type="text" wire:model.live.debounce.500ms='form.search'
            class="block w-full px-4 py-3 text-sm border rounded-lg border-max-soft/20 bg-max-soft/10 peer ps-11 focus:border-max-dark focus:ring-max-dark disabled:opacity-50 disabled:pointer-events-none"
            placeholder="пошук статей" aria-label="пошук статей за запитом">
        <div
            class="absolute inset-y-0 flex items-center pointer-events-none start-0 ps-4 peer-disabled:opacity-50 peer-disabled:pointer-events-none">
            <x-lucide-search class="opacity-60 size-5 text-max-light" />
        </div>

        <div x-show="$wire.form.search.length" class="absolute inset-y-0 flex items-center end-4">
            <x-lucide-loader-circle class="hidden opacity-60 size-4 text-max-light animate-spin"
                wire:loading.remove.class='hidden' wire:targeta='form.search' />
            <button type="button" class="hfull" wire:loading.remove wire:target='form.search' @click="$wire">
                <x-lucide-circle-x class="opacity-60 size-4 text-max-light" />
            </button>
        </div>
    </div>

    @empty($posts)
        <div class="flex flex-col items-center">
            <x-lucide-search-x class="mb-2 text-max-light opacity-40 size-8" />
            <span class="text-xs text-max-light opacity-40">По вашому запиту статей не знайдено.</span>
        </div>
    @else
        <div class="w-full text-center">Знайдені статті...</div>
        <x-scrollbar class="max-h-[50vh]">
            @foreach ($posts as $post)
                <div class="grid grid-cols-3 gap-4">
                    <div class="w1/4">
                        <a href="{{ route('article.show', ['slug' => $post->slug]) }}">
                            <img src="{{ $post->getFirstMediaUrl('posts', 'preview') }}" class="object-cover rounded-lg" />
                        </a>
                    </div>
                    <div class="col-span-2">
                        <div class="text-sm uppercase text-max-light line-clamp-1">
                            <a href="{{ route('article.show', ['slug' => $post->slug]) }}">
                                {{ $post->name }}
                            </a>
                        </div>
                        <p class="text-sm leading-5 text-max-light/50 line-clamp-3">{{ $post->text }}</p>
                    </div>
                </div>
            @endforeach
        </x-scrollbar>
    @endempty
</div>
