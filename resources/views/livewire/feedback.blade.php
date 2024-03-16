<div>
    <form wire:submit="save">
        <div
            class="relative overflow-hidden min-h-[450px] w-full bg-max-black rounded-lg shadow-lg shadow-max-black/50 p-8">
            <div class="w-full text-center">
                <div class="text-xl font-light uppercase text-max-light mt-">
                    Зворотній зв`язок
                </div>
            </div>

            <x-input label="Ваше ім`я" wire:model="feedback.name" class="mt-5 bg-max-light/95 focus:bg-max-light/85"
                type="text" required maxlength="40" />
            <div>
                @error('feedback.name')
                    <span class="text-xs text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <x-input label="Контактні дані" wire:model="feedback.contact"
                class="mt-5 bg-max-light/95 focus:bg-max-light/85" type="text" required maxlength="60" />
            <div>
                @error('feedback.contact')
                    <span class="text-xs text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <x-textarea label="Повідомлення" wire:model="feedback.text" rows="5"
                class="mt-5 bg-max-light/95 focus:bg-max-light/85" required maxlength="1500" />
            <div>
                @error('feedback.text')
                    <span class="text-xs text-red-500">{{ $message }}</span>
                @enderror
            </div>

            {{-- Loading... --}}
            <div wire:loading class="absolute top-0 w-full h-full start-0 bg-max-black/80"></div>

            <div wire:loading class="absolute transform -translate-x-1/2 -translate-y-1/2 top-1/2 start-1/2">
                <div class="animate-spin inline-block w-14 h-14 border-[3px] border-current border-t-transparent text-max-soft rounded-full"
                    role="status" aria-label="loading">
                    <span class="sr-only">Loading...</span>
                </div>
            </div>

            {{-- Success... --}}
            @session('success')
                <div class="absolute top-0 w-full h-full start-0 bg-max-black"></div>
                <div class="absolute top-0 left-0 w-full h-full">
                    <div class="flex flex-col items-stretch justify-center h-full text-max-soft" role="status">
                        <div class="self-center text-center">
                            <i data-lucide="smile" class="w-20 h-20 mx-auto text-max-soft"></i>
                            <p class="mt-3 leading-5 text-center">Лист успішно надісланий.<br>Дякуємо Вам!
                            </p>
                            <button type="button" wire:click='$refresh'
                                class="px-3 py-2 mt-10 rounded shadow bg-max-soft text-max-light hover:bg-max-dark hover:shadow-lg transitiond-all">
                                Новий лист
                                <i data-lucide="rotate-ccw" class="inline-block w-4 h-4 ms-1"></i>
                            </button>
                        </div>
                    </div>
                </div>
            @endsession

            <div class="flex justify-center">
                <button type="submit"
                    class="flex px-3 py-2 mt-8 transition-all rounded bg-max-soft text-max-light hover:bg-max-dark">
                    Надіслати
                    <x-lucide-send class="h-5 w-5 ms-1.5 mt-0.5" />
                </button>
            </div>
        </div>
    </form>
</div>
