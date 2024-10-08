<div class="relative overflow-hidden min-h-[455px] w-full bg-max-black rounded-lg shadow-lg shadow-max-black/50 p-8">
    @session('success')
        <div class="absolute top-0 w-full h-full start-0 bg-max-black"></div>
        <div class="absolute top-0 left-0 w-full h-full">
            <div class="flex flex-col items-stretch justify-center h-full text-max-soft" role="status">
                <div class="self-center text-center">
                    <x-lucide-smile class="w-20 h-20 mx-auto text-max-soft" />
                    <p class="mt-3 leading-5 text-center">
                        Лист успішно надісланий.<br>Дякуємо Вам!
                    </p>
                    <x-button class="mt-10" color='soft' wire:click='$refresh' wire:loading.attr="disabled"
                        wire:target.except='save'>Новий лист
                        <x-lucide-rotate-ccw class="inline-block w-4 h-4 ms-1" wire:loading.remove />
                        <x-lucide-loader-circle class="hidden w-4 h-4 animate-spin ms-1" wire:loading.class.remove='hidden'
                            wire:loading.class='inline-block' />
                    </x-button>
                </div>
            </div>
        </div>
    @else
        <form wire:submit="save">
            <div class="w-full text-center">
                <div class="text-xl font-light uppercase text-max-light mt-">
                    Зворотній зв`язок
                </div>
            </div>

            <x-form.input label="Ваше ім`я" color='soft' name='feedback.name' class="mt-5" required maxlength="40" />

            <x-form.input label="Контактні дані" color='soft' name="feedback.contact" class="mt-5" required
                maxlength="60" />

            <x-form.textarea label="Повідомлення" color='soft' name="feedback.text" rows="5" class="mt-5" required
                maxlength="1500" />

            {{-- Loading... --}}
            <div wire:loading wire:target="save" class="absolute top-0 w-full h-full start-0 bg-max-black/80"></div>

            <div wire:loading wire:target="save"
                class="absolute transform -translate-x-1/2 -translate-y-1/2 top-1/2 start-1/2">
                <div class="animate-spin inline-block size-14 border-[3px] border-current border-t-transparent text-max-soft rounded-full"
                    role="status" aria-label="loading">
                    <span class="sr-only">Loading...</span>
                </div>
            </div>

            <div class="flex justify-center">
                <x-button type="submit" color='orange' class="mt-8">Надіслати
                    <x-lucide-send class="size-4 inline-block ms-1.5" />
                </x-button>
            </div>
        </form>
    @endsession
</div>
