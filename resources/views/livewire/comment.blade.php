<div class="mt-5">
    @if ($comments->isEmpty())
        <div
            class="flex bg-max-soft/5 mt-10 py-10 rounded-lg border border-max-soft/10 justify-center items-center lg:w-1/2">
            <div class="text-sm text-center flex flex-col leading-4 text-max-dark/70">
                {{-- <x-lucide-message-square-text class="size-6 my-2 mx-auto" /> --}}
                <img src="{{ asset('images/icons/no-comment.svg') }}" class="size-16 mx-auto" alt="">
                <span>Коментарів ще немає</span>
                <span>Прокоментуйте першими</span>
            </div>
        </div>
    @else
        <div class="text-max-dark uppercase mb-5">
            <x-lucide-message-square-text class="size-5 inline-block me-1 opacity-95" />Обговорення
        </div>

        @foreach ($comments as $comment)
            <div class="mb-5 lg:w-1/2">
                <div class="bg-max-dark/20 p-2 rounded-t-lg flex justify-between">
                    <div class="flex self-center space-x-3">
                        <div class="text-xs text-max-dark font-semibold">
                            <x-lucide-calendar class="size-3 inline-block -mt-1" />
                            {{ $comment->created_at->format('d.m.Y') }}
                        </div>
                        <div class="text-xs text-max-dark font-semibold">
                            <x-lucide-clock class="size-3 inline-block -mt-1" />
                            {{ $comment->created_at->format('H:m') }}
                        </div>
                    </div>
                    <div class="flex">
                        @if ($this->hasLike($comment->id))
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="inline-block me-0.5 size-4">
                                <path
                                    d="m11.645 20.91-.007-.003-.022-.012a15.247 15.247 0 0 1-.383-.218 25.18 25.18 0 0 1-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0 1 12 5.052 5.5 5.5 0 0 1 16.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 0 1-4.244 3.17 15.247 15.247 0 0 1-.383.219l-.022.012-.007.004-.003.001a.752.752 0 0 1-.704 0l-.003-.001Z" />
                            </svg>
                        @else
                            <button type="button" class="lg:hover:scale-125 transition"
                                wire:click="like({{ $comment->id }})" wire:target='like' wire:loading.attr='disabled'
                                wire:loading.class='animate-pulse' aria-label="Вподобати коментар">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="2" stroke="currentColor" class="size-4">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                                </svg>
                            </button>
                        @endif
                        @if ($comment->likes->count() > 0)
                            <span class="text-xs text-max-dark/80">
                                {{ $comment->likes->count() }}
                            </span>
                        @endif
                    </div>
                </div>
                <div class="text-sm p-4 bg-max-dark/10 rounded-b-lg">
                    {{ $comment->content }}
                </div>
            </div>
        @endforeach
    @endif

    @session('comment-success')
        <div
            class="flex bg-max-soft/5 mt-10 h-40 rounded-lg border border-max-soft/10 justify-center items-center lg:w-1/2">
            <div class="text-sm text-center flex flex-col leading-4 text-max-dark/70">
                <x-lucide-smile class="size-6 my-2 mx-auto" />
                <span>Коментар успішно доданий</span>
                <x-button color='light' class="mt-3" wire:click='$refresh' wire:target='refresh'
                    wire:loading.attr='disabled'>Новий коментар
                    <x-lucide-rotate-ccw class="inline-block size-4 ms-1" wire:target='refresh' wire:loading.remove />
                    <x-lucide-refresh-cw class="inline-block animate-spin size-4 ms-1" wire:target='refresh' wire:loading />
                </x-button>
            </div>
        </div>
    @else
        <div class="mt-10 lg:w-1/3">
            <form wire:submit="save">
                <div class="space-y-5">
                    <x-form.textarea name='form.content' label='Коментар' rows='5' wire:target='save'
                        wire:loading.attr='disabled' maxlength='800' required />

                    <x-button type='submit' color='light'>Коментувати
                        <x-lucide-send class="inline-block size-4" wire:target='save' wire:loading.remove />
                        <x-lucide-refresh-cw class="inline-block animate-spin size-4 ms-1" wire:target='save'
                            wire:loading />
                    </x-button>
                </div>
            </form>
        </div>
    @endsession
</div>
