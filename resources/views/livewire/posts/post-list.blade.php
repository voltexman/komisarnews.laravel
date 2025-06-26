<div>
    @if ($posts->isEmpty())
        <div class="flex flex-col items-center">
            <x-lucide-frown class="size-14 opacity-80" />
            <span class="mt-3">
                Наразі, нажаль, статей немає...
            </span>
        </div>
    @else
        <div class="max-w-6xl mx-auto grid gap-10 sm:grid-cols-2 sm:gap-20">
            @foreach ($posts as $post)
                <article class="relative flex flex-col lg:flex-row">
                    {{-- Зображення статті Preview --}}
                    <a href="{{ route('article.show', ['slug' => $post->slug]) }}"
                        class="block rounded-t-lg lg:rounded-lg overflow-hidden shadow-xl shadow-max-soft/30 lg:w[640px] lg:h-[400px] h[240px] w-full">
                        <img src="{{ $post->getFirstMediaUrl('posts', 'preview') ?: asset('images/bg-header.webp') }}"
                            width="640" height="480" alt="{{ env('APP_NAME') . ' ' . $post->title }}"
                            class="object-cover object-center duration-700 size-full hover:scale-125 hover:rotate-6"></a>

                    <div x-data="{ maximize: false }"
                        :class="maximize ? 'lg:w-full lg:h-full' :
                            'lg:w-2/3 lg:h-[210px] lg:translate-x-10 lg:translate-y-10'"
                        class="flex flex-col p-4 duration-500 bg-white rounded-b-lg lg:absolute lg:rounded-lg lg:right-0 lg:bottom-0">

                        {{-- Заголовок статті --}}
                        <div :class="maximize && 'mb-5'">
                            <h2 class="uppercase mb-2.5 font-semibold line-clamp-1 text-max-black">
                                <a href="{{ route('article.show', ['slug' => $post->slug]) }}"
                                    class="transition hover:text-max-soft">
                                    {{ $post->name }}
                                </a>
                            </h2>
                        </div>

                        {{-- Scrollbar розгорнутого тексту --}}
                        <x-scrollbar>
                            <div :class="!maximize && 'line-clamp-4 text-sm font-medium text-gray-200'">
                                {{ strip_tags($post->body) }}
                            </div>
                        </x-scrollbar>

                        <div class="flex items-center justify-between mt-5">

                            {{-- Дата публікації статті --}}
                            <span class="flex text-xs">
                                <x-lucide-calendar class="w-4 h-4 me-1" />
                                {{ $post->created_at->format('F d, Y') }}
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
                </article>
            @endforeach
        </div>

        @if ($this->paginator->hasMorePages())
            <div class="flex justify-center mt-12 lg:mt-24">
                <x-button color='soft' wire:click="loadMore" wire:loading.attr="disabled">
                    Завантажити ще<x-lucide-refresh-cw class="size-5 inline-block ms-1.5"
                        wire:loading.class='animate-spin' />
                </x-button>
            </div>
        @else
            <div class="flex flex-col items-center px-10 mt-20">
                <img src="{{ asset('images/icons/smile.svg') }}" alt="">
                <p class="mt-3">Ви переглянули всі статті</p>
                <p class="p-0 -mt-2 leading-5 text-center">Завітайте згодом, щоб ознайомитись з новими публікаціями</p>
            </div>
        @endif
    @endif
</div>
