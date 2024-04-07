<div x-data="dropzone">
    <div :class="isDropping ? 'bg-max-text/60' : 'bg-max-text/20'"
        class="relative w-full h-40 overflow-hidden duration-300 border border-dashed rounded-lg border-max-text/90">
        <input type="file" multiple wire:model='photos' @drop="handleFileDrop"
            class="absolute inset-0 z-50 w-full h-full p-0 m-0 outline-none opacity-0 cursor-pointer"
            @dragover="isDropping=true" @dragleave="isDropping=false">
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
                    <span class="relative inline-flex border-2 rounded-full size-16 border-max-soft/70 bg-max-light">
                        <x-lucide-cloud-upload class="self-center mx-auto size-9 text-max-soft opacity-90" />
                    </span>
                </span>
            </div>
            <div class="flex items-stretch w-2/3">
                <div class="flex flex-col self-center">
                    <x-button color='light'>
                        <x-lucide-camera class="size-5 me-1 inline-flex" />
                        Відкрити зображення
                    </x-button>
                    <span class="text-sm text-max-dark/70">або перетягнути сюди...</span>
                </div>
            </div>
        </div>
        <div class="absolute bottom-0 left-0 w-full flex justify-between">
            <span class="text-xs text-gray-500 ms-2">
                <x-lucide-file-image class="size-3 -mt-1 inline-flex" />
                JPG, PNG
            </span>
            <span class="text-xs text-gray-500 me-2">
                <x-lucide-scaling class="size-3 -mt-1 inline-flex" />
                1980x1024
            </span>
        </div>
    </div>

    <div x-data="{ uploading: false, progress: 0 }" x-on:livewire-upload-start="uploading = true"
        x-on:livewire-upload-finish="uploading = false" x-on:livewire-upload-cancel="uploading = false"
        x-on:livewire-upload-error="uploading = false"
        x-on:livewire-upload-progress="progress = $event.detail.progress">

        <!-- Progress Bar -->
        <div x-show="uploading">
            <progress max="100" x-bind:value="progress"></progress>
        </div>
    </div>

    <div wire:loading wire:target="order.photos">Uploading...</div>

    @if ($photos)
        <x-alert class="mt-4">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum id soluta modi!
            Quidem dolorum labore earum soluta, vitae eligendi. Labore, nesciunt accusantium?
        </x-alert>

        <div class="grid grid-cols-4 mt-4 gap-x-4">
            @foreach ($photos as $photo)
                <livewire:order.photo :$photo :key="$loop->index" id="{{ $loop->index }}" />
            @endforeach
        </div>
    @else
        <x-alert class="mt-4">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aspernatur
                dicta corrupti, vero deserunt est delectus quis corporis! In sapiente, eos, dolore
                natus ratione consequuntur.</p>
        </x-alert>
        <x-alert type='warning' class="mt-4">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores laudantium
                voluptatum, cumque autem saepe neque. Error veritatis cumque ratione ullam ab natus
                doloremque repellat enim ipsam. Suscipit doloribus eius error.</p>
        </x-alert>
    @endif
</div>

@script
    <script>
        Alpine.data('dropzone', () => ({
            isDropping: false,
            handleFileDrop() {
                this.isDropping = false;
                let files = $wire.el.querySelector('input[type="file"]').files;
                $wire.uploadMultiple('photos', files)
            },
        }));
    </script>
@endscript
