<div class="grid lg:grid-cols-2 gap-12 lg:gap-20">
    @foreach ($posts as $post)
        <article class="flex flex-col lg:flex-row">
            <div class="relative">

                {{-- Зображення статті Preview --}}
                <picture>
                    <source srcset="{{ $post->getFirstMediaUrl('posts', 'preview-webp') }}" type="image/webp">
                    <source srcset="{{ $post->getFirstMediaUrl('posts', 'preview-jpg') }}" type="image/jpeg">
                    <img src="{{ $post->getFirstMediaUrl('posts', 'preview-jpg') }}" width="640" height="480"
                        alt="{{ env('APP_NAME') . ' ' . $post->name }}"
                        class="rounded-t-lg lg:rounded-lg shadow-xl shadow-max-soft/30 lg:w-[640px]">
                </picture>

                <div x-data="{ maximize: false }"
                    :class="maximize ? 'lg:w-full lg:h-full' :
                        'lg:w-2/3 lg:h-[210px] lg:translate-x-10 lg:translate-y-10'"
                    class="lg:absolute rounded-b-lg lg:rounded-lg bg-white p-4 lg:right-0 lg:bottom-0 duration-500 flex flex-col">

                    {{-- Заголовок статті --}}
                    <div :class="maximize && 'mb-5'">
                        <h2 class="uppercase line-clamp-1 text-max-black">
                            <a href="{{ route('article.show', ['slug' => $post->slug]) }}"
                                class="hover:text-max-soft transition">
                                {{ $post->name }}
                            </a>
                        </h2>
                    </div>

                    {{-- Scrollbar розгорнутого тексту --}}
                    <div
                        class="mb-auto max-h-full overflow-y-auto
                            [&::-webkit-scrollbar]:w-2
                            [&::-webkit-scrollbar-track]:rounded-full
                            [&::-webkit-scrollbar-track]:bg-gray-100
                            [&::-webkit-scrollbar-thumb]:rounded-full
                            [&::-webkit-scrollbar-thumb]:bg-gray-300
                            dark:[&::-webkit-scrollbar-track]:bg-max-soft/20
                            dark:[&::-webkit-scrollbar-thumb]:bg-max-soft">
                        <p :class="!maximize && 'line-clamp-4'">
                            {{ strip_tags($post->text) }}</p>
                    </div>

                    <div class="flex justify-between mt-5 items-center">

                        {{-- Дата публікації статті --}}
                        <span class="flex text-xs">
                            <x-lucide-calendar class="h-4 w-4 me-1" />
                            {{ \Carbon\Carbon::parse($post->created_at)->format('F d, Y') }}
                        </span>

                        {{-- Кнопка розгортання тексту статті --}}
                        <span class="cursor-pointer" x-on:click="maximize=!maximize">
                            <x-lucide-picture-in-picture-2 x-show="!maximize" class="h-4 w-4 hidden lg:block" />
                            <x-lucide-picture-in-picture x-show="maximize" class="h-4 w-4 hidden lg:block" />
                        </span>

                        {{-- Кнопка переходу на сторінку статті --}}
                        <a href={{ route('article.show', ['slug' => $post->slug]) }}
                            class="uppercase text-sm hover:text-max-soft transition">
                            Детальніше
                            <x-lucide-arrow-right class="h-4 w-4 inline-block -mt-0.5 ms-0.5" />
                        </a>
                    </div>
                </div>
            </div>
        </article>
    @endforeach
</div>

@if ($this->paginator->hasMorePages())
    <div class="mt-12 lg:mt-24 flex justify-center">
        <button wire:click="loadMore"
            class="flex bg-max-soft rounded-lg shadow text-max-light p-3 hover:shadow-lg transition-all"
            wire:loading.class='bg-zinc-400' wire:loading.attr="disabled">
            Завантажити ще
            <x-lucide-refresh-cw class="h-5 w-5 ms-1.5 mt-0.5" wire:loading.class='animate-spin' />
        </button>
    </div>
@else
    <div class="mt-24 flex flex-col items-center">
        <x-lucide-frown class="h-10 w-10" />
        <p class="mt-3">Більше статей немає</p>
    </div>
@endif
