<div class="flex flex-col h-28">
    @session('subscribe-success')
        <div class="flex flex-col items-center self-center px-10">
            <x-lucide-mail class="mb-2 size-8 text-max-text" />
            <span class="leading-4 text-center text-max-text">
                Дякуємо. Ваша пошта успішно збережена.
            </span>
        </div>
    @else
        <div class="flex flex-col">
            <span class="text-sm uppercase text-max-light">Підпишіться</span>
            <span class="text-sm text-max-light/50 -mt-0.5 mb-1 font-normal leading-4">
                оформіть підписку на статті і отримуйте завжди вчасно цікаву інформацію
            </span>
        </div>
        <form wire:submit='save'>
            <x-form.input label="Електронна пошта" name="form.email" icon="mail" color="dark" reactive>
                <x-slot:button class="block p-4">
                    <span wire:loading.class='hidden' wire:target='save'>Підписатись
                        <x-lucide-send class="inline-block size-4 ms-1" />
                    </span>
                    <span wire:loading wire:target='save'>Відправка
                        <x-lucide-loader-circle class="inline-block size-4 ms-1 animate-spin" />
                    </span>
                </x-slot>
            </x-form.input>
        </form>
        <span class="text-xs font-normal leading-4 text-max-light/30">
            ми не розсилаємо спам та листів рекламного характеру
        </span>
    @endsession
</div>
