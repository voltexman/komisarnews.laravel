<div class="relative flex flex-col h-20">
    @session('success')
        <div class="flex bg-max-black size-full">
            <div class="flex flex-row items-center self-center justify-between">
                <div class="me-4">
                    <x-lucide-loader-circle class="mb-2 animate-spin size-8 text-max-text" wire:loading />
                    <x-lucide-phone-call class="mb-2 size-8 text-max-text" wire:loading.remove />
                </div>
                <div class="flex flex-col">
                    <span class="text-sm leading-4 text-max-text">
                        <p class="m-0">Очікуйте на дзвінок менеджера</p>
                        <p class="m-0">за номером: <span class="font-bold">{{ session('callback-phone') }}</span></p>
                        <p>Ми невдовзі зателефонуємо Вам.</p>
                    </span>
                    <button type="button" class="text-sm font-bold text-left text-max-light/80 disabled:opacity-50"
                        wire:target.except='save' aria-label="Замовити дзвінок на інший номер" wire:click='$refresh'
                        wire:loading.attr='disabled'>
                        Замовити дзвінок на інший номер?
                    </button>
                </div>
            </div>
        </div>
    @else
        <form wire:submit='save'>
            <div class="flex">
                <div class="text-sm uppercase text-max-text">Передзвоніть мені</div>
                <div class="inline-block ms-2 hs-tooltip">
                    <x-lucide-circle-help class="transition cursor-pointer size-4 text-max-light/80 hover:text-max-light" />
                    <div class="absolute z-10 invisible inline-block p-2 overflow-hidden transition-opacity rounded shadow-sm opacity-0 max-w-64 bg-max-dark/70 hs-tooltip-content hs-tooltip-shown:opacity-100 backdrop-blur hs-tooltip-shown:visible"
                        role="tooltip">
                        <p class="text-xs font-medium text-max-light">
                            Якщо у Вас не ви стачає грошей на рахунку,
                            наш майстер або менеджер зателефонує Вам в зручний для Вас час.</p>
                    </div>
                </div>
            </div>
            <x-form.input label="Номер телефону" name="form.phone" icon="phone" color="dark"
                class="callback-phone-input" wire:loading.attr='disabled'>
                <x-slot:button type="submit" color="dark" wire:loading.attr='disabled' aria-label="Передзвоніть">
                    <span wire:loading.class='hidden' wire:target='save'>Передзвоніть
                        <x-lucide-phone-call class="inline-block size-4 ms-1" />
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
        const callbackPhone = $wire.$el.querySelector('.callback-phone-input');
        const maskOptionsCallbackPhone = {
            mask: '+{380} (00) 000-00-00'
        };

        IMask(callbackPhone, maskOptionsCallbackPhone);
    </script>
@endscript
