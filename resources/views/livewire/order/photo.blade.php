<div>
    <div class="overflow-hidden rounded-lg">
        <div class="h-16">
            <img src="{{ $photo->temporaryUrl() }}" alt="">
        </div>
        <div class="flex justify-between h-8">
            <button type="button"
                class="flex items-center justify-center w-full transition bg-max-soft hover:bg-max-dark">
                <x-lucide-edit class="size-4 text-max-light" />
            </button>
            <button type="button" data-hs-overlay="#confirm-dialog-{{ $id }}" id="delete-{{ $id }}"
                class="flex items-center justify-center w-full transition bg-red-500 hover:bg-red-600">
                <x-lucide-trash-2 class="size-4 text-max-light" />
            </button>
        </div>
    </div>

    <div id="confirm-dialog-{{ $id }}" data-modal
        class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto">
        <div
            class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto">
            <div class="relative flex flex-col bg-max-light shadow-lg rounded-xl">
                <div class="p-4 sm:p-14 text-center overflow-y-auto">
                    <div class="size-36 mx-auto rounded-lg overflow-hidden">
                        <img src="https://loremflickr.com/480/640" class="object-cover" />
                    </div>
                    <div class="flex flex-col">
                        <span class="mb-2 text-xl font-bold text-gray-800">Підтвердження</span>
                        <span class="text-gray-500">Дійсно бажаєте видалити фото?</span>
                    </div>
                </div>

                <div class="flex items-center">
                    <button type="button"
                        class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-es-xl border border-transparent bg-max-soft/10 text-gray-800 hover:bg-max-soft/30 transition disabled:opacity-50 disabled:pointer-events-none"
                        data-hs-overlay="">
                        <x-lucide-circle-x class="size-4" />
                        Відмінити
                    </button>
                    <button type="button" wire:click="$cancelUpload('photos')"
                        class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-ee-xl border border-transparent bg-red-500 text-max-light hover:bg-red-600 transition disabled:opacity-50 disabled:pointer-events-none"
                        data-hs-overlay="#confirm-dialog-{{ $id }}">
                        <x-lucide-trash-2 class="size-4" />
                        Видалити
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

@script
    <script>
        const deleteModal = new HSOverlay($wire.$el.querySelector('[data-modal]'));
        const openDeleteModal = $wire.$el.querySelector('#delete-{{ $id }}');

        openDeleteModal.addEventListener('click', () => {
            deleteModal.open();
        });
    </script>
@endscript
