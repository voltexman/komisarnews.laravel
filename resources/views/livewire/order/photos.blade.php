<div x-data="dropzone">
    @if ($this->isMaxPhotos())
        <div class="w-full h-40 overflow-hidden border border-dashed rounded-lg border-max-text/30 bg-max-text/10">
            <div class="flex content-center justify-center h-full">
                <div class="flex flex-col self-center px-8 lg:px-20">
                    <x-lucide-octagon-alert class="mx-auto mb-4 opacity-50 size-10 text-gray-500/90" />
                    <span class="self-center text-xs text-gray-500/90">Ви додали максимальну кількість фото.</span>
                    <span class="self-center text-xs text-center text-gray-500/90">
                        Щоб додати або змінити фото, можете видалити
                        <x-lucide-trash-2 class="inline-flex size-3 -mt-0.5" />
                        будь-яке і відкрити інше.
                    </span>
                </div>
            </div>
        </div>
    @else
        <div :class="isDropping ? 'bg-max-text/60' : 'bg-max-text/20'"
            class="relative w-full h-40 overflow-hidden duration-300 border border-dashed rounded-lg border-max-text/90">
            <input type="file" multiple wire:model='order.photos' @change="isDropping = false"
                class="absolute inset-0 z-50 w-full h-full p-0 m-0 outline-none opacity-0 cursor-pointer"
                :class="'{{ $this->isMaxPhotos() ? 'hidden' : 'block' }}'" @dragover="isDropping=true"
                @dragleave="isDropping=false">
            <x-lucide-camera class="absolute text-indigo-600 opacity-5 -top-3 left-3 size-20 -rotate-[25deg]" />
            <x-lucide-image class="absolute text-red-600 opacity-5 top-1 -right-2 rotate-[35deg] size-16" />
            <x-lucide-image-up class="absolute text-purple-600 opacity-5 bottom-1 left-16 size-16 -rotate-[55deg]" />
            <x-lucide-image-plus class="absolute text-cyan-600 opacity-5 bottom-4 right-32 size-14 rotate-[20deg]" />
            <x-lucide-file-image class="absolute text-cyan-600 opacity-5 top-4 left-36 size-16 rotate-[10deg]" />
            <div class="flex flex-row h-full">
                <div class="content-center w-1/3">
                    <span class="relative flex mx-auto size-16">
                        <span
                            class="absolute inline-flex w-full h-full rounded-full opacity-75 animate-ping bg-max-soft/50"></span>
                        <span
                            class="relative inline-flex border-2 rounded-full size-16 border-max-soft/70 bg-max-light">
                            <x-lucide-cloud-upload class="self-center mx-auto size-9 text-max-soft opacity-90" />
                        </span>
                    </span>
                </div>
                <div class="flex items-stretch w-2/3">
                    <div class="flex flex-col self-center">
                        <x-button color='light'>
                            <x-lucide-camera class="inline-flex size-5 me-1" />
                            Відкрити зображення
                        </x-button>
                        <span class="text-sm text-max-dark/70">або перетягнути сюди...</span>
                    </div>
                </div>
            </div>
            <div class="absolute bottom-0 left-0 flex justify-between w-full">
                <span class="text-xs text-gray-500 ms-2">
                    <x-lucide-file-image class="inline-flex -mt-1 size-3" />
                    JPG, PNG
                </span>
                <span class="text-xs text-gray-500 me-2">
                    <x-lucide-scaling class="inline-flex -mt-1 size-3" />
                    1980x1024
                </span>
            </div>
        </div>
    @endif

    <div x-data="{ uploading: false, progress: 0 }" x-on:livewire-upload-start="uploading = true"
        x-on:livewire-upload-finish="uploading = false" x-on:livewire-upload-cancel="uploading = false"
        x-on:livewire-upload-error="uploading = false"
        x-on:livewire-upload-progress="progress = $event.detail.progress">

        {{-- <div x-show="uploading"> --}}
        <div class="flex w-full h-2 overflow-hidden bg-gray-200 rounded-full" role="progressbar"
            :aria-valuenow="progress" aria-valuemin="0" aria-valuemax="100">
            <div class="flex flex-col justify-center overflow-hidden text-xs text-center text-white transition duration-500 bg-gray-800 rounded-full whitespace-nowrap"
                :style="{ width: progress + '%' }"></div>
        </div>
        {{-- </div> --}}

    </div>

    <div wire:loading wire:target="order.photos" class="flex flex-col w-full mt-4 animate-pulse">
        <div class="w-full overflow-hidden rounded-lg bg-max-soft/30">
            <span class="block size-16 bg-max-soft/50"></span>
        </div>

        @php $items = ['','','','']; @endphp
        <div class="grid grid-cols-4 mt-4 gap-x-4">
            @foreach ($items as $item)
                <div class="overflow-hidden rounded-lg bg-max-soft/30">
                    <div class="h-16"></div>
                    <div class="flex justify-between h-8">
                        <span class="flex w-full bg-max-dark/30"></span>
                        <span class="flex w-full bg-red-500/20"></span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div wire:loading.class="hidden" wire:target='order.photos'>
        @if ($order->photos)
            <x-alert class="mt-4">
                <p class="m-0 line-clamp-3">На мініатюрах, фотограції можуть виглядати інакше. Але майстер бачитиме
                    повноцінне фото. Для редагування натисніть <x-lucide-edit class="inline-flex size-3 -mt-0.5" /></p>
            </x-alert>

            <div class="grid grid-cols-4 mt-4 gap-x-4">
                @foreach ($order->photos as $photo)
                    <livewire:order.photo :$photo :key="$loop->index" id="{{ $loop->index }}" lazy />
                @endforeach
            </div>
        @else
            <x-alert class="mt-4">
                <p class="m-0 line-clamp-3">Намагайтесь обирати максимально вигідні фото та ракурс, який найкраще
                    відображає волосся та їх стан. Можете додати до <b>4</b> фотографії.</p>
            </x-alert>
            <x-alert type='warning' class="mt-4">
                <p class="m-0 line-clamp-4">Не застосовуйте фільтрів, які змінюють кольори та якість фото.</p>
            </x-alert>
        @endif
    </div>
</div>

@script
    <script>
        Alpine.data('dropzone', () => ({
            isDropping: false,
            handleFileDrop(event) {
                this.isDropping = false;
                let files = $wire.el.querySelector('input[type="file"]').files;
                const successCallback = (event) => {
                    window.HSOverlay.autoInit();
                }
                // $wire.uploadMultiple('order.photos', files, successCallback)
            },
        }));
    </script>
@endscript
