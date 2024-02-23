<div>
    <form wire:submit="save">
        <div
            class="relative overflow-hidden min-h-[450px] w-full bg-max-black rounded-lg shadow-lg shadow-max-black/50 p-8">
            <div class="w-full text-center">
                <div class="uppercase text-xl font-light text-max-light mt-">
                    Зворотній зв`язок
                </div>
            </div>

            <x-input label="Ваше ім`я" wire:model="feedback.name" class="mt-5 bg-max-light/95 focus:bg-max-light/85"
                type="text" required maxlength="40" />
            <div>
                @error('feedback.name')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                @enderror
            </div>

            <x-input label="Контактні дані" wire:model="feedback.contact"
                class="mt-5 bg-max-light/95 focus:bg-max-light/85" type="text" required maxlength="60" />
            <div>
                @error('feedback.contact')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                @enderror
            </div>

            <x-textarea label="Повідомлення" wire:model="feedback.text" rows="5"
                class="mt-5 bg-max-light/95 focus:bg-max-light/85" required maxlength="1500" />
            <div>
                @error('feedback.text')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                @enderror
            </div>

            {{-- Loading... --}}
            <div wire:loading class="absolute top-0 start-0 w-full h-full bg-max-black/80"></div>

            <div wire:loading class="absolute top-1/2 start-1/2 transform -translate-x-1/2 -translate-y-1/2">
                <div class="animate-spin inline-block w-14 h-14 border-[3px] border-current border-t-transparent text-max-soft rounded-full"
                    role="status" aria-label="loading">
                    <span class="sr-only">Loading...</span>
                </div>
            </div>

            {{-- Success... --}}
            @session('success')
                <div class="absolute top-0 start-0 w-full h-full bg-max-black"></div>
                <div class="absolute top-0 left-0 h-full w-full">
                    <div class="flex flex-col h-full justify-center items-stretch text-max-soft" role="status">
                        <div class="self-center text-center">
                            <x-lucide-smile
                                class="h-20 w-20 text-max-soft animate-scale duration-1000 delay-1000 mx-auto" />
                            <p class="leading-5 text-center mt-3">Лист успішно надісланий.<br>Дякуємо Вам!
                            </p>
                            <button type="button" wire:click='$refresh'
                                class="bg-max-soft text-max-light shadow py-2 px-3 rounded mt-10 hover:bg-max-dark hover:shadow-lg transition-all">
                                Новий лист
                                <x-lucide-rotate-ccw class="h-4 w-4 ms-1 inline-block" />
                            </button>
                        </div>
                    </div>
                </div>
            @endsession

            <div class="flex justify-center">
                <button type="submit"
                    class="bg-max-soft flex mt-8 text-max-light px-3 py-2 rounded hover:bg-max-dark transition-all">
                    Надіслати
                    <x-lucide-send class="h-5 w-5 ms-1 mt-0.5" />
                </button>
            </div>
        </div>
    </form>
</div>
