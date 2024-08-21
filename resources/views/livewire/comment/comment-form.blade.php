@session('comment-success')
    <div class="flex items-center justify-center h-40 mt-10 border rounded-lg bg-max-soft/5 border-max-soft/10 lg:w-1/2">
        <div class="flex flex-col text-sm leading-4 text-center text-max-dark/70">
            <x-lucide-smile class="mx-auto my-2 size-6" />
            <span>Коментар успішно доданий</span>
            <x-button color='light' class="mt-3" wire:click='$refresh' wire:target.except='save' wire:loading.attr='disabled'>
                Новий коментар
                <x-lucide-rotate-ccw class="inline-block size-4 ms-1" wire:target.except='save' wire:loading.remove />
                <x-lucide-refresh-cw class="inline-block animate-spin size-4 ms-1" wire:target.except='save' wire:loading />
            </x-button>
        </div>
    </div>
@else
    <div class="mt-10 lg:w-1/3">
        <form wire:submit="save">
            <div class="space-y-5">
                <x-form.textarea name='form.content' label='Коментар' rows='5' wire:target='save'
                    wire:loading.attr='disabled' maxlength='800' required />

                <x-button type='submit'>Коментувати
                    <x-lucide-send class="inline-block size-4" wire:target='save' wire:loading.remove />
                    <x-lucide-refresh-cw class="inline-block animate-spin size-4 ms-1" wire:target='save' wire:loading />
                </x-button>
            </div>
        </form>
    </div>
@endsession
