<div class="grid gap-12 lg:grid-cols-2 lg:gap-20">
    @foreach ($posts as $post)
        <article class="flex flex-col lg:flex-row">
            <div class="relative">

                {{-- Зображення статті Preview --}}
                <img src="{{ $post->getFirstMediaUrl('posts', 'preview') }}" width="640" height="480"
                    alt="{{ env('APP_NAME') . ' ' . $post->name }}"
                    class="rounded-t-lg object-contain lg:rounded-lg shadow-xl shadow-max-soft/30 lg:w-[640px] w-full">

                <div x-data="{ maximize: false }"
                    :class="maximize ? 'lg:w-full lg:h-full' :
                        'lg:w-2/3 lg:h-[210px] lg:translate-x-10 lg:translate-y-10'"
                    class="flex flex-col p-4 duration-500 bg-white rounded-b-lg lg:absolute lg:rounded-lg lg:right-0 lg:bottom-0">

                    {{-- Заголовок статті --}}
                    <div :class="maximize && 'mb-5'">
                        <h2 class="uppercase line-clamp-1 text-max-black">
                            <a href="{{ route('article.show', ['slug' => $post->slug]) }}"
                                class="transition hover:text-max-soft">
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

                    <div class="flex items-center justify-between mt-5">

                        {{-- Дата публікації статті --}}
                        <span class="flex text-xs">
                            <x-lucide-calendar class="w-4 h-4 me-1" />
                            {{ \Carbon\Carbon::parse($post->created_at)->format('F d, Y') }}
                        </span>

                        {{-- Кнопка розгортання тексту статті --}}
                        <span class="cursor-pointer" x-on:click="maximize=!maximize">
                            <x-lucide-picture-in-picture-2 x-show="!maximize" class="hidden w-4 h-4 lg:block" />
                            <x-lucide-picture-in-picture x-show="maximize" class="hidden w-4 h-4 lg:block" />
                        </span>

                        {{-- Кнопка переходу на сторінку статті --}}
                        <a href={{ route('article.show', ['slug' => $post->slug]) }}
                            class="text-sm uppercase transition hover:text-max-soft">
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
    <div class="flex justify-center mt-12 lg:mt-24">
        <button wire:click="loadMore"
            class="flex p-3 transition-all rounded-lg shadow bg-max-soft text-max-light hover:shadow-lg"
            wire:loading.class='bg-zinc-400' wire:loading.attr="disabled">
            Завантажити ще
            <x-lucide-refresh-cw class="h-5 w-5 ms-1.5 mt-0.5" wire:loading.class='animate-spin' />
        </button>
    </div>
@else
    <div class="flex flex-col items-center mt-24">
        <x-lucide-frown class="w-10 h-10" />
        <p class="mt-3">Більше статей немає</p>
    </div>
@endif
