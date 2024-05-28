<div>
    @if ($comments->isEmpty())
        <div
            class="flex bg-max-soft/5 mt-10 py-10 rounded-lg border border-max-soft/10 justify-center items-center lg:w-1/2">
            <div class="text-sm text-center flex flex-col leading-4 text-max-dark/70">
                <img src="{{ asset('images/icons/no-comment.svg') }}" class="size-16 mx-auto" alt="">
                <span>Коментарів ще немає</span>
                <span>Прокоментуйте першими</span>
            </div>
        </div>
    @else
        <div class="text-max-dark uppercase mb-5">
            <x-lucide-message-square-text class="size-5 inline-block me-1 opacity-95" />Обговорення
            @if ($comments->count() > 0)
                <div class="font-semibold inline-block">
                    <span wire:loading.class='hidden' wire:target.except='save'>({{ $comments->count() }})</span>
                    <span class="hidden" wire:target.except='save' wire:loading.class.remove='hidden'>
                        <x-lucide-loader-circle class="inline-block animate-spin size-5 -mt1" />
                    </span>
                </div>
            @endif
        </div>

        @foreach ($comments as $comment)
            <div class="mb-5 lg:w-1/2" :key='$comment'>
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
                        <livewire:like-button type='comments' :model='$comment' />
                    </div>
                </div>
                <div class="text-sm p-4 bg-max-dark/10 rounded-b-lg">
                    {{ $comment->content }}
                </div>
            </div>
        @endforeach
    @endif
</div>
