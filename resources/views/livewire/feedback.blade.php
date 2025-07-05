<?php

use function Livewire\Volt\{state, rules};
use Illuminate\Support\Facades\Notification;
use App\Notifications\FeedbackSent;
use App\Models\Feedback;

state(['name', 'contact', 'text']);

rules([
    'name' => 'nullable|string|min:2|max:40',
    'contact' => 'nullable|min:5|max:60',
    'text' => 'required|string|min:10|max:1500',
]);

$send = function () {
    $validated = $this->validate();

    Feedback::create($validated);

    Notification::route('mail', env('ADMIN_EMAIL'))->route('telegram', env('TELEGRAM_CHAT_ID'))->notify(new FeedbackSent((object) $validated));

    $this->reset();

    session()->flash('success');
};

?>

<div
    class="relative min-h-[455px] overflow-hidden rounded-xl bg-max-black px-5 py-10 shadow-lg shadow-max-black/50 md:p-10">
    @session('success')
        <div class="absolute inset-0 size-full">
            <div class="flex size-full flex-col items-center justify-center gap-y-5 text-max-soft">
                <x-lucide-smile class="size-24 text-max-light" stroke-width="1.5" />
                <div class="text-center font-medium text-max-light/80">
                    <div>Лист успішно надісланий.</div>
                    <div>Дякуємо Вам!</div>
                </div>
                <x-button class="mt-10" variant='light' wire:click='$refresh' wire:loading.attr="disabled"
                    wire:target.except='send'>Новий лист
                    <x-lucide-rotate-ccw class="ms-1 inline-block h-4 w-4" wire:loading.remove />
                    <x-lucide-loader-circle class="ms-1 hidden h-4 w-4 animate-spin" wire:loading.class.remove='hidden'
                        wire:loading.class='inline-block' />
                </x-button>
            </div>
        </div>
    @else
        <form wire:submit="send">
            <div class="text-center font-[Oswald] text-xl uppercase text-max-light">
                Зворотній зв`язок
            </div>

            <x-form.input label="Ваше ім`я" icon="user" color='soft' name='name' class="mt-5" maxlength="40" />

            <x-form.input label="Контактні дані" color='soft' name="contact" class="mt-5" maxlength="60" />

            <x-form.textarea label="Повідомлення" color='soft' name="text" rows="5" class="mt-5" required
                maxlength="1500" />

            {{-- Loading... --}}
            <div wire:loading wire:target="send" class="absolute inset-0 size-full bg-max-black/80"></div>

            <div wire:loading wire:target="send"
                class="absolute start-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 transform">
                <div class="border-current inline-block size-14 animate-spin rounded-full border-[3px] border-t-transparent text-max-soft"
                    role="status" aria-label="loading">
                    <span class="sr-only">Loading...</span>
                </div>
            </div>

            <div class="flex justify-center">
                <x-button type="submit" variant='orange' class="mt-8">Надіслати
                    <x-lucide-send class="ms-1.5 inline-block size-4" />
                </x-button>
            </div>
        </form>
    @endsession
</div>
