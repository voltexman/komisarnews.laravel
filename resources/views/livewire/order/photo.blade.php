<div class="relative overflow-hidden rounded-lg shadow-md aspect-square">
    <img src="{{ $photo->temporaryUrl() }}" class="object-cover object-center size-full" alt="">

    <div class="absolute space-y-2 right-2 top-2">
        {{-- Підтвердження видалення фото --}}
        <x-dialog caption='Підтвердження'>
            <x-slot:open>
                <button type="button" class="flex items-center justify-center rounded-full bg-red size-6">
                    <x-lucide-trash-2 class="text-white size-3" />
                </button>
            </x-slot>

            <div class="flex justify-center gap-y-4">
                <div class="flex flex-col space-y-3 font-semibold">
                    <div class="flex items-center justify-center mx-auto rounded-full bg-red/40 size-16">
                        <x-lucide-circle-help class="inline-flex text-max-light size-10" />
                    </div>
                    <div class="text-center text-max-medium">
                        <div class="font-semibold">Бажаєте видалити це фото?</div>
                        <div class="text-sm font-light text-max-dark/80">Редагування фото видалиться також</div>
                    </div>
                </div>
            </div>

            <x-slot:actions class="space-x-2">
                <x-button variant="danger" class="flex">
                    <x-lucide-trash-2 class="inline-block size-4 me-2" />
                    Видалити
                </x-button>
            </x-slot>
        </x-dialog>

        {{-- Редагування фото --}}
        <x-modal>
            <x-slot:open>
                <button type="button" class="flex items-center justify-center rounded-full bg-max-dark size-6">
                    <x-lucide-pencil class="text-white size-3" />
                </button>
            </x-slot>

            <x-slot:header>
                Редагування
            </x-slot>

            <x-slot:body>
                <img src="{{ $photo->temporaryUrl() }}"
                    class="object-cover object-center w-full shadow-md rounded-xl max-h-80" alt="">

                <div class="flex flex-row mt-4 space-x-3">
                    <div>
                        <x-button size="icon">
                            <x-lucide-rotate-ccw class="size-5" />
                        </x-button>
                        <x-button size="icon">
                            <x-lucide-rotate-cw class="size-5" />
                        </x-button>
                    </div>

                    <div>
                        <x-button size="icon">
                            <x-lucide-zoom-in class="size-5" />
                        </x-button>
                        <x-button size="icon">
                            <x-lucide-zoom-out class="size-5" />
                        </x-button>
                    </div>

                    <div>
                        <x-button size="icon">
                            <x-lucide-flip-horizontal class="size-5" />
                        </x-button>
                        <x-button size="icon">
                            <x-lucide-flip-vertical class="size-5" />
                        </x-button>
                    </div>
                </div>
            </x-slot>

            <x-slot:footer class="flex justify-end space-x-2">
                <x-button>
                    <x-lucide-ban class="inline-block size-4 me-3" />
                    Відмінити
                </x-button>
                <x-button variant="danger">
                    <x-lucide-save class="inline-block size-4 me-3" />
                    Видалити
                </x-button>
            </x-slot>
            </x-dialog>
    </div>
</div>
