<div class="relative flex flex-col h-28">
    @session('success')
        <div class="flex bg-max-black size-full">
            <div class="flex flex-row items-center self-center justify-between">
                <div class="me-4">
                    <x-lucide-loader-circle class="mb-2 animate-spin size-8 text-max-text" wire:loading />
                    <x-lucide-phone-call class="mb-2 size-8 text-max-text" wire:loading.remove />
                </div>
                <div class="flex flex-col">
                    <span class="text-sm leading-4 text-max-text">
                        <p class="m-0">Очікуйте на дзвінок за номером {{ session('callback-phone') }}.</p>
                        <p>Майстер зателефонує Вам найближчим часом.</p>
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
        <div class="flex flex-col">
            <span class="text-sm uppercase text-max-light">Передзвоніть мені</span>
            <span class="text-sm text-max-light/50 -mt-0.5 mb-1 font-normal leading-4">
                замовте дзвінок менеджера
            </span>
        </div>
        <form wire:submit='save'>
            <x-form.input label="Номер телефону" name="form.phone" icon="phone" color="dark"
                wire:loading.attr='disabled'>
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
        <span class="text-xs font-normal leading-4 text-max-light/30">
            <x-lucide-info class="inline-block size-3 me-0.5" />
            майстер подзвонить Вам найближчим часом
        </span>
    @endsession
</div>
