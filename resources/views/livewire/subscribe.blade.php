<div class="flex flex-col h-20">
    @session('subscribe-success')
        <div class="flex flex-col items-center self-center px-10">
            <x-lucide-mail class="mb-2 size-8 text-max-text" />
            <span class="leading-4 text-center text-max-text">
                Дякуємо. Ваша пошта успішно збережена.
            </span>
        </div>
    @else
        <div class="flex">
            <div class="text-sm uppercase text-max-text">Підпишіться</div>
            <div class="inline-block ms-2 hs-tooltip">
                <x-lucide-circle-help class="transition cursor-pointer size-4 text-max-light/80 hover:text-max-light" />
                <div class="absolute z-10 invisible inline-block p-3 transition-opacity rounded shadow-sm opacity-0 max-w-64 bg-max-dark/70 hs-tooltip-content hs-tooltip-shown:opacity-100 backdrop-blur hs-tooltip-shown:visible"
                    role="tooltip">
                    <p class="text-xs font-medium text-max-light">
                        Оформіть підписку на статті і отримуйте завжди вчасно цікаву інформацію.</p>
                    <p class="m-0 text-xs font-medium text-max-light">
                        Ми не розсилаємо спам та листів рекламного характеру.</p>
                </div>
            </div>
        </div>
        <form wire:submit='save'>
            <x-form.input label="Електронна пошта" name="form.email" icon="mail" color="dark"
                class="subscribe-email-input" wire:target='save' wire:loading.attr='disabled'>
                <x-slot:button type='submit' wire:loading.attr='disabled'>
                    <span wire:loading.class='hidden' wire:target='save'>Підписатись
                        <x-lucide-send class="inline-block size-4 ms-1" />
                    </span>
                    <span wire:loading wire:target='save'>Відправка
                        <x-lucide-loader-circle class="inline-block size-4 ms-1 animate-spin" />
                    </span>
                </x-slot>
            </x-form.input>
        </form>
    @endsession
</div>

@script
    <script>
        IMask($wire.$el.querySelector('.subscribe-email-input'), {
            mask: '*{3,20}@*{3,20}.*{2,7}'
        });
    </script>
@endscript
