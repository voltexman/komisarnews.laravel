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
            <button type="button" data-hs-overlay="#confirm-dialog-{{ $id }}"
                class="flex items-center justify-center w-full transition bg-red-500 hover:bg-red-600">
                <x-lucide-trash-2 class="size-4 text-max-light" />
            </button>
        </div>
    </div>

    <div id="confirm-dialog-{{ $id }}"
        class="--prevent-on-load-init hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto">
        <div
            class="m-3 mt-0 transition-all ease-out opacity-0 hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 sm:max-w-lg sm:w-full sm:mx-auto">
            <div class="relative flex flex-col shadow-lg bg-max-light rounded-xl">
                <div class="p-4 overflow-y-auto text-center sm:p-14">
                    <div class="mx-auto overflow-hidden rounded-lg size-36">
                        <img src="{{ $photo->temporaryUrl() }}" alt="" class="object-cover">
                    </div>
                    <div class="flex flex-col">
                        <span class="mb-2 text-xl font-bold text-gray-800">Підтвердження</span>
                        <span class="text-gray-500">Дійсно бажаєте видалити фото?</span>
                    </div>
                </div>

                <div class="flex items-center">
                    <button type="button"
                        class="inline-flex items-center justify-center w-full px-4 py-3 text-sm font-semibold text-gray-800 transition border border-transparent gap-x-2 rounded-es-xl bg-max-soft/10 hover:bg-max-soft/30 disabled:opacity-50 disabled:pointer-events-none"
                        data-hs-overlay="">
                        <x-lucide-circle-x class="size-4" />
                        Відмінити
                    </button>
                    <button type="button"
                        class="inline-flex items-center justify-center w-full px-4 py-3 text-sm font-semibold transition bg-red-500 border border-transparent gap-x-2 rounded-ee-xl text-max-light hover:bg-red-600 disabled:opacity-50 disabled:pointer-events-none"
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
        window.HSOverlay.autoInit();
        // window.HSStaticMethods.autoInit(['overlay']);

        document.addEventListener('DOMContentLoaded', () => {
            document
                .querySelectorAll('[data-hs-overlay].--prevent-on-load-init')
                .forEach((el) => new HSOverlay(el));
        });
    </script>
@endscript
