<div class="flex flex-col h-28">
    @session('callback-success')
        <div class="flex flex-col items-center self-center px-10">
            <x-lucide-phone-call class="mb-2 size-8 text-max-text" />
            <span class="leading-4 text-center text-max-text">
                Очікуйте на дзвінок. Майстер зателефонує Вам найближчим часом.
            </span>
        </div>
    @else
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
    @endsession
</div>
