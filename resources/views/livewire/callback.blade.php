<div class="relative flex flex-col h-20">
    @session('success')
        <div class="flex bg-max-black size-full">
            <div class="flex flex-row items-center self-center justify-between">
                <div class="me-4">
                    <x-lucide-loader-circle class="mb-2 animate-spin size-8 text-max-text" wire:loading />
                    <x-lucide-phone-call class="mb-2 size-8 text-max-text" wire:loading.remove />
                </div>
                <div class="flex flex-col">
                    <div class="leading-4 text-max-text">
                        <p class="m-0 text-sm">Очікуйте на дзвінок менеджера</p>
                        <p class="m-0 text-sm">за номером: <span class="font-bold">{{ session('callback-phone') }}</span></p>
                        <p class="m-0 text-sm">Ми невдовзі зателефонуємо Вам.</p>
                    </div>
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
                <div class="inline-block ms-2">
                    <x-tooltip color='white'>
                        Якщо у Вас не вистачає грошей на рахунку, менеджер зателефонує Вам в зручний для Вас час.
                    </x-tooltip>
                </div>
            </div>
            <x-form.input label="Номер телефону" name="form.phone" icon="phone" color="dark"
                x-maska="'+380 (##) ###-##-##'" wire:target='save' wire:loading.attr='disabled'>
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
