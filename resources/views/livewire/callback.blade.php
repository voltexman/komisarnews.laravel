<div class="relative flex flex-col h-28">
    <div class="flex flex-col">
        <span class="text-sm uppercase text-max-light">Передзвоніть мені</span>
        <span class="text-sm text-max-light/50 -mt-0.5 mb-1 font-normal leading-4">
            замовте дзвінок менеджера
        </span>
    </div>
    <form wire:submit='save'>
        <x-form.input label="Номер телефону" name="form.phone" icon="phone" color="dark" reactive>
            <x-slot:button class="block p-4">
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
        майстер подзвонить Вам найближчим часом
    </span>

    @session('callback-success')
        <div class="absolute top-0 left-0 flex bg-max-black size-full">
            <div class="flex flex-row items-center self-center justify-between px-10">
                <div class="me-4">
                    <x-lucide-phone-call class="mb-2 size-8 text-max-text" />
                </div>
                <div class="flex flex-col">
                    <span class="text-sm leading-4 text-max-text">
                        Очікуйте на дзвінок за номером 0000000000. Майстер зателефонує Вам найближчим часом.
                    </span>
                    <span class="text-sm font-bold text-max-light/80" wire:click='$refresh'>
                        Замовити дзвінок на інший номер?
                    </span>
                </div>
            </div>
        </div>
    @endsession
</div>
