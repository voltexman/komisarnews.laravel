<div>
    <div class="text-sm font-semibold text-center uppercase text-max-soft">
        Перевірка заповнених даних
    </div>

    <div class="w-full">
        <span class="block text-sm font-bold text-center text-max-dark" x-text="$wire.order.goal"></span>
    </div>

    <div class="grid grid-cols-2 gap-5 mt-4">
        <div class="flex flex-col text-sm">
            <span class="font-bold">Ваше ім'я:</span>
            <span class="font-normal line-clamp-1" x-bind:class="{ 'italic text-gray-500': !$wire.order.name }"
                x-text="$wire.order.name ? $wire.order.name : 'не вказано'"></span>
        </div>

        <div class="flex flex-col text-sm">
            <span class="font-bold" x-bind:class="!$wire.order.city ? 'text-red-500' : 'text-gray-600'">
                Місто:
            </span>
            <span class="font-normal line-clamp-1"
                x-bind:class="!$wire.order.city ? 'text-red-500 italic' : 'text-gray-600'"
                x-text="$wire.order.city ? $wire.order.city : 'не вказано'"></span>
        </div>

        <div class="flex flex-col text-sm">
            <span class="font-bold">Електронна пошта:</span>
            <span class="font-normal line-clamp-1" x-bind:class="{ 'italic text-gray-500': !$wire.order.email }"
                x-text="$wire.order.email ? $wire.order.email : 'не вказано'"></span>
        </div>

        <div class="flex flex-col text-sm">
            <span class="font-bold" x-bind:class="!$wire.order.phone ? 'text-red-500' : 'text-gray-600'">
                Номер телефону:
            </span>
            <span class="font-normal line-clamp-1"
                x-bind:class="!$wire.order.phone ? 'text-red-500 italic' : 'text-gray-600'"
                x-text="$wire.order.phone ? $wire.order.phone : 'не вказано'"></span>
        </div>
    </div>

    <div class="grid grid-cols-3 gap-5 mt-4 space-y5">
        <div class="flex flex-col text-sm">
            <span class="font-bold">Вага:</span>
            <span class="font-normal" x-bind:class="{ 'italic text-gray-500': !$wire.order.hair_weight }"
                x-text="$wire.order.hair_weight ? $wire.order.hair_weight + 'гр.' : 'не вказано'"></span>
        </div>

        <div class="flex flex-col text-sm">
            <span class="font-bold" x-bind:class="!$wire.order.hair_length ? 'text-red-500' : 'text-gray-600'">
                Довжина:
            </span>
            <span class="font-normal" x-bind:class="!$wire.order.hair_length ? 'text-red-500 italic' : 'text-gray-600'"
                x-text="$wire.order.hair_length ? $wire.order.hair_length + 'мм.' : 'не вказано'"></span>
        </div>

        <div class="flex flex-col text-sm">
            <span class="font-bold">Вік:</span>
            <span class="font-normal" x-bind:class="{ 'italic text-gray-500': !$wire.order.age }"
                x-text="$wire.order.age ? $wire.order.age + 'р.' : 'не вказано'"></span>
        </div>
    </div>

    <div class="mt-4">
        <div class="flex flex-col text-sm">
            <span class="font-bold">Колір:</span>
            <span class="font-normal" x-text="$wire.order.color"></span>
        </div>
    </div>

    <div class="flex flex-col mt-4 text-sm">
        <div class="flex justify-between">
            <span class="font-bold">Додатковий опис:</span>
            <i data-lucide="maximize" x-show="$wire.order.description" @click="showDescription=!showDescription"
                class="w-4 h-4 cursor-pointer animate-scale"></i>
        </div>
        <span class="font-normal line-clamp-1" x-bind:class="{ 'italic text-gray-500': !$wire.order.description }"
            x-text="$wire.order.description ? $wire.order.description : 'не вказано'"></span>
        <div x-show="showDescription" x-transition.duration.500ms
            class="absolute top-0 z-20 w-full h-full rounded-lg start-0 bg-max-light"></div>
        <div x-show="showDescription" x-transition.duration.500ms class="absolute top-0 left-0 z-20 w-full h-full p-5">
            <div class="flex flex-col h-full">
                <span class="mb-5 font-semibold text-center text-gray-700 uppercase">
                    Додатковий опис
                </span>
                <div class="h-full mb-10">
                    <p x-text="$wire.order.description"
                        class="text-gray-600 [&::-webkit-scrollbar]:w-2
                        [&::-webkit-scrollbar-track]:rounded-full
                        [&::-webkit-scrollbar-track]:bg-gray-100
                        [&::-webkit-scrollbar-thumb]:rounded-full
                        [&::-webkit-scrollbar-thumb]:bg-gray-300
                        dark:[&::-webkit-scrollbar-track]:bg-max-soft/20
                        dark:[&::-webkit-scrollbar-thumb]:bg-max-soft">
                    </p>
                </div>
                <i data-lucide="minimize" x-on:click="showDescription=!showDescription"
                    class="absolute w-5 h-5 cursor-pointer right-5 bottom-5"></i>
            </div>
        </div>
    </div>

    <div class="mt-4">
        <label for="hs-checkbox-in-form"
            class="flex w-full px-3 py-2 text-sm border rounded-lg bg-max-soft/10 border-max-soft/10 focus:border-blue-500 focus:ring-blue-500">
            <input type="checkbox"
                class="shrink-0 mt-0.5 border-gray-200 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                id="hs-checkbox-in-form">
            <span class="text-sm text-gray-500 ms-3">Ознайомлений(а) та погоджуюсь з
                <span class="font-bold text-max-soft">правилами</span>
            </span>
        </label>
    </div>
</div>
