<div class="space-y-2">
    <div class="text-sm font-semibold text-center uppercase text-max-soft">
        Перевірка заповнених даних
    </div>

    <div class="w-full">
        <span class="block text-sm font-bold text-center text-max-dark" x-text="$wire.order.goal"></span>
    </div>

    <div class="grid grid-cols-2 gap-2">
        <div class="flex flex-col text-sm">
            <span class="font-bold">Ваше ім'я:</span>
            <span class="font-normal line-clamp-1" x-bind:class="{ 'italic text-gray-500': !$wire.order.name }"
                x-text="$wire.order.name ? $wire.order.name : 'не вказано'"></span>
        </div>

        <div class="flex flex-col text-sm">
            <span class="font-bold" x-bind:class="!$wire.order.city ? 'text-red' : 'text-max-dark'">
                Місто:
            </span>
            <span class="font-normal line-clamp-1"
                x-bind:class="!$wire.order.city ? 'text-red italic' : 'text-gray-600'"
                x-text="$wire.order.city ? $wire.order.city : 'не вказано'"></span>
        </div>

        <div class="flex flex-col text-sm">
            <span class="font-bold">Електронна пошта:</span>
            <span class="font-normal line-clamp-1" x-bind:class="{ 'italic text-gray-500': !$wire.order.email }"
                x-text="$wire.order.email ? $wire.order.email : 'не вказано'"></span>
        </div>

        <div class="flex flex-col text-sm">
            <span class="font-bold" x-bind:class="!$wire.order.phone ? 'text-red' : 'text-max-dark'">
                Номер телефону:
            </span>
            <span class="font-normal line-clamp-1"
                x-bind:class="!$wire.order.phone ? 'text-red italic' : 'text-gray-600'"
                x-text="$wire.order.phone ? $wire.order.phone : 'не вказано'"></span>
        </div>
    </div>

    <div class="grid grid-cols-3 gap-2">
        <div class="flex flex-col text-sm">
            <span class="font-bold">Вага:</span>
            <span class="font-normal" x-bind:class="{ 'italic text-gray-500': !$wire.order.hair_weight }"
                x-text="$wire.order.hair_weight ? $wire.order.hair_weight + 'гр.' : 'не вказано'"></span>
        </div>

        <div class="flex flex-col text-sm">
            <span class="font-bold" x-bind:class="!$wire.order.hair_length ? 'text-red' : 'text-max-dark'">
                Довжина:
            </span>
            <span class="font-normal" x-bind:class="!$wire.order.hair_length ? 'text-red italic' : 'text-gray-600'"
                x-text="$wire.order.hair_length ? $wire.order.hair_length + 'мм.' : 'не вказано'"></span>
        </div>

        <div class="flex flex-col text-sm">
            <span class="font-bold">Вік:</span>
            <span class="font-normal" x-bind:class="{ 'italic text-gray-500': !$wire.order.age }"
                x-text="$wire.order.age ? $wire.order.age + 'р.' : 'не вказано'"></span>
        </div>
    </div>

    <div class="grid grid-cols-1 gap-2">
        <div class="flex flex-col text-sm">
            <span class="font-bold">Колір:</span>
            <span class="font-normal" x-bind:class="{ 'italic text-gray-500': !$wire.order.color }"
                x-text="$wire.order.color ? $wire.order.color : 'не вказано'"></>
        </div>

        <div class="flex flex-col text-sm">
            <span class="font-bold">Опції:</span>
            {{-- <span class="font-normal"
                                    x-text="$wire.order.hair_options.length ? $wire.order.hair_options : 'Не зрізані, не фарбовані, без сивини'"></span> --}}
        </div>

        <div class="flex flex-col text-sm">
            <div class="flex justify-between">
                <span class="font-bold">Додатковий опис:</span>
                <x-lucide-maximize x-show="$wire.order.description" @click="descriptionFull=!descriptionFull"
                    class="w-4 h-4 cursor-pointer" />
            </div>
            <span class="font-normal line-clamp-1" x-bind:class="{ 'italic text-gray-500': !$wire.order.description }"
                x-text="$wire.order.description ? $wire.order.description : 'не вказано'"></span>
            <div x-show="descriptionFull" x-transition.duration.500ms
                class="absolute top-0 z-20 w-full h-full rounded-lg start-0 bg-max-light">
            </div>
            <div x-show="descriptionFull" x-transition.duration.500ms
                class="absolute top-0 left-0 z-20 w-full h-full p-5">
                <div class="flex flex-col h-full">
                    <span class="mb-5 font-semibold text-center text-gray-700 uppercase">
                        Додатковий опис
                    </span>
                    <div class="h-full mb-10">
                        <p x-text="$wire.order.description" class="text-gray-600"></p>
                    </div>
                    <x-lucide-minimize x-on:click="descriptionFull=!descriptionFull"
                        class="absolute w-5 h-5 cursor-pointer right-5 bottom-5" />
                </div>
            </div>
        </div>
    </div>

    <div class="mt-4">
        <label for="hs-checkbox-in-form"
            class="flex w-full p-2 text-sm border rounded-lg bg-max-soft/10 border-max-soft/10 focus:border-max-dark focus:ring-max-dark">
            <input type="checkbox" @change="rulesConfirm = ! rulesConfirm"
                class="shrink-0 mt-0.5 border-max-soft rounded text-max-dark focus:ring-max-dark disabled:opacity-50 disabled:pointer-events-none"
                id="hs-checkbox-in-form">
            <div class="text-sm ms-3">
                <span class="hidden lg:inline-block">Ознайомлений(а) та погоджуюсь з</span>
                <span class="lg:hidden">Погоджуюсь з</span>
                <span class="font-bold cursor-pointer text-max-soft" data-hs-overlay="#rules-check-document">
                    правилами
                </span>
            </div>
        </label>
    </div>
</div>
