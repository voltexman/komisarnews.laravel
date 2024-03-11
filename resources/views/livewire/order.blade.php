@php
    $goals = [
        [
            'icon' => 'question-mark-circle',
            'option' => 'Хочу оцінити вартість',
            'description' => 'Лише дізнатись ціну у майстра',
        ],
        [
            'icon' => 'currency-dollar',
            'option' => 'Хочу продати волосся',
            'description' => 'Відправити волосся та отримати гроші',
        ],
    ];
    $colors = [
        [
            'label' => '#fff',
            'option' => 'Блонд',
        ],
        [
            'label' => '#ccc',
            'option' => 'Світло-русий',
        ],
        [
            'label' => '#ff0000',
            'option' => 'Русий',
        ],
        [
            'label' => '#ff0000',
            'option' => 'Світло-коричневий',
        ],
        [
            'label' => '#ff0000',
            'option' => 'Темно-коричневий',
        ],
        [
            'label' => '#ff0000',
            'option' => 'Чорний',
        ],
    ];
@endphp

<!-- Stepper -->
<div x-data="stepper" class="relative bg-max-light h-[575px] p-5 rounded-lg shadow-lg shadow-max-black/25">

    <form wire:submit="save" x-data="{
        showDescription: false,
        showModal: false
    }" @keydown.esc="showModal = false">

        <div class="mb-5">
            <span class="block text-lg font-semibold text-center uppercase text-max-soft">
                Оцінка та продаж волосся
            </span>
        </div>

        <!-- Stepper Nav -->
        <ul class="relative flex flex-row justify-between max-w-sm mx-auto gap-x-2">

            <!-- Person Item -->
            <li class="flex flex-col items-center justify-center flex-1 md:shrink md:basis-0 group gap-x-2 md:flex">
                <div
                    class="relative min-w-[28px] min-h-[28px] flex flex-col items-center md:w-full md:inline-flex md:flex-wrap md:flex-row text-xs align-middl">
                    <span
                        class="flex items-center justify-center flex-shrink-0 w-8 h-8 mx-auto font-medium rounded-full"
                        :class="[isActive(1) && 'animate-bounce', isDone(1) ? 'bg-max-dark' : 'bg-white']">

                        <x-lucide-file-text class="w-5 h-5 text-max-soft" x-bind:class="{ 'hidden': isDone(1) }" />
                        <x-lucide-check class="w-5 h-5" x-bind:class="isDone(1) ? 'block text-max-light' : 'hidden'" />
                    </span>
                </div>
                <div class="mt-1 grow md:grow-0">
                    <span class="block text-sm font-semibold text-gray-600">
                        Заявка
                    </span>
                </div>
            </li>
            <!-- End Item -->

            <!-- Parameters Item -->
            <li class="flex flex-col items-center justify-center flex-1 md:shrink md:basis-0 group gap-x-2 md:flex">
                <div
                    class="relative min-w-[28px] min-h-[28px] flex flex-col items-center md:w-full md:inline-flex md:flex-wrap md:flex-row text-xs align-middl">
                    <span
                        class="flex items-center justify-center flex-shrink-0 w-8 h-8 mx-auto font-medium rounded-full"
                        :class="[isActive(2) && 'animate-bounce', isDone(2) ? 'bg-max-dark' : 'bg-white']">

                        <x-lucide-file-text class="w-5 h-5 text-max-soft" x-bind:class="{ 'hidden': isDone(2) }" />
                        <x-lucide-check class="w-5 h-5" x-bind:class="isDone(2) ? 'block text-max-light' : 'hidden'" />
                    </span>
                </div>
                <div class="mt-1 grow md:grow-0">
                    <span class="block text-sm font-semibold text-gray-600">
                        Параметри
                    </span>
                </div>
            </li>
            <!-- End Item -->

            <!-- Description Item -->
            <li class="flex flex-col items-center justify-center flex-1 md:shrink md:basis-0 group gap-x-2 md:flex">
                <div
                    class="min-w-[28px] min-h-[28px] flex flex-col items-center md:w-full md:inline-flex md:flex-wrap md:flex-row text-xs align-middle">
                    <span
                        class="flex items-center justify-center flex-shrink-0 w-8 h-8 mx-auto font-medium rounded-full"
                        :class="[isActive(3) && 'animate-bounce', isDone(3) ? 'bg-max-dark' : 'bg-white']">

                        <x-lucide-message-square-text class="w-5 h-5 text-max-soft"
                            x-bind:class="{ 'hidden': isDone(3) }" />
                        <x-lucide-check class="w-5 h-5" x-bind:class="isDone(3) ? 'block text-max-light' : 'hidden'" />
                    </span>
                </div>
                <div class="mt-1 grow md:grow-0">
                    <span class="block text-sm font-semibold text-gray-600">
                        Опис
                    </span>
                </div>
            </li>
            <!-- End Item -->

            <!-- Check Item -->
            <li class="flex flex-col items-center justify-center flex-1 md:shrink md:basis-0 group gap-x-2 md:flex">
                <div
                    class="min-w-[28px] min-h-[28px] flex flex-col items-center md:w-full md:inline-flex md:flex-wrap md:flex-row text-xs align-middl">
                    <span
                        class="flex items-center justify-center flex-shrink-0 w-8 h-8 mx-auto font-medium rounded-full"
                        :class="[isActive(4) && 'animate-bounce', isDone(4) ? 'bg-max-dark' : 'bg-white']">

                        <x-lucide-file-check class="w-5 h-5 text-max-soft" x-bind:class="{ 'hidden': isDone(4) }" />
                        <x-lucide-check class="w-5 h-5" x-bind:class="isDone(4) ? 'block text-max-light' : 'hidden'" />
                    </span>
                </div>
                <div class="mt-1 grow md:grow-0">
                    <span class="block text-sm font-semibold text-gray-600">
                        Дані
                    </span>
                </div>
            </li>
            <!-- End Item -->

        </ul>
        <!-- End Stepper Nav -->

        <!-- Stepper Content -->
        <div class="flex flex-col mt-5">
            <div class="flex flex-col h-[375px]">
                <!-- Person Content -->
                <div x-show="isActive(1)">
                    <!-- Floating Input -->
                    <div class="flex flex-col w-full gap-y-5">
                        {{-- Ціль заявки --}}
                        <div x-data="{ open: false }" @click.away="open = false" @keydown.esc="open = false"
                            class="relative">

                            <input type="hidden" wire:model='order.goal' />

                            {{-- Button --}}
                            <button type="button" @click="open = !open"
                                x-bind:class="open && 'rounded-b-none border-b0 bg-white border-b-white'"
                                class="relative py-3 px-4 pe-9 flex items-center text-nowrap w-full duration-300 cursor-pointer bg-max-soft/20 border border-max-soft/30 rounded-lg text-start text-sm before:absolute before:inset-0 before:z-[1] outline-none">
                                <span x-text="$wire.order.goal"></span>
                                <div class="absolute -translate-y-1/2 top-1/2 end-3">
                                    <i data-lucide="chevrons-up-down"
                                        class="flex-shrink-0 w-3.5 h-3.5 text-max-soft"></i>
                                </div>
                            </button>

                            {{--
                             Panel --}}
                            <div x-show="open" x-transition.opacity.300ms
                                class="absolute -mt-0.5 left-0 bg-white border border-t-0 border-max-soft/30 rounded-b-lg z-10 w-full p-2 shadow-lg">

                                @foreach ($goals as $goal)
                                    <div
                                        class="flex flex-row px-3 py-2 duration-300 rounded-lg cursor-pointer hover:bg-max-soft/20">
                                        <div class="flex flex-col">
                                            <span @click="$wire.set('order.goal', '{{ $goal['option'] }}')"
                                                class="text-sm font-bold text-max-dark">
                                                {{ $goal['option'] }}
                                            </span>
                                            <span class="text-sm text-max-dark/70">{{ $goal['description'] }}</span>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>

                        <x-input type="text" label="Ваше ім'я" icon="user" maxlength="40"
                            class="border bg-max-soft/20 border-max-soft/20" wire:model='order.name' />

                        <x-input type="text" label="Місто" icon="map-pin" maxlength="30"
                            class="border bg-max-soft/20 border-max-soft/20" wire:model='order.city' required />

                        <x-input type="text" label="Електронна пошта" icon="envelope" maxlength="40"
                            class="border bg-max-soft/20 border-max-soft/20" wire:model='order.email' />

                        <x-input type="text" label="Номер телефону" icon="phone" maxlength="15"
                            class="border bg-max-soft/20 border-max-soft/20" wire:model='order.phone' required />
                    </div>
                    <!-- End Floating Input -->
                </div>
                <!-- End Person Content -->

                {{-- Parameters Content --}}
                <div x-show="isActive(2)">

                    {{-- Колір волосся --}}
                    <div x-data="{ open: false }" @click.away="open = false" @keydown.esc="open = false"
                        class="relative">

                        <input type="hidden" wire:model='order.color' />

                        {{-- Button --}}
                        <button type="button" @click="open = !open"
                            x-bind:class="open && 'rounded-b-none border-b0 bg-white border-b-white'"
                            class="relative py-3 px-4 pe-9 flex items-center text-nowrap w-full duration-300 cursor-pointer bg-max-soft/20 border border-max-soft/30 rounded-lg text-start text-sm before:absolute before:inset-0 before:z-[1] outline-none">
                            <span x-text="$wire.order.color"></span>
                            <div class="absolute -translate-y-1/2 top-1/2 end-3">
                                <i data-lucide="chevrons-up-down" class="flex-shrink-0 w-3.5 h-3.5 text-max-soft"></i>
                            </div>
                        </button>

                        {{-- Panel --}}
                        <div x-show="open" x-transition.opacity.500ms
                            class="absolute -mt-0.5 left-0 bg-white border border-t-0 border-max-soft/30 rounded-b-lg z-10 w-full p-2 shadow-lg">

                            @foreach ($colors as $color)
                                <div
                                    class="flex flex-row px-3 py-2 duration-300 rounded-lg cursor-pointer hover:bg-max-soft/20">
                                    <div class="self-center me-3">
                                        <span style="background-color: {{ $color['label'] }}"
                                            class="block w-5 h-5 border rounded-full shadow-lg border-max-dark"></span>
                                    </div>
                                    <div class="text-sm text-max-dark">{{ $color['option'] }}</div>
                                </div>
                            @endforeach

                        </div>
                    </div>

                    <div class="flex justify-between gap-x-4">

                        <!-- Input Number -->
                        <div class="border rounded-lg bg-max-soft/5 border-max-soft/30">
                            <div class="flex items-center justify-between w-full gap-x-1">
                                <div class="px-3 py-2 grow">
                                    <span class="block text-xs text-gray-700">
                                        Вага (гр)
                                    </span>
                                    <input type="text" wire:model='order.hair_weight' placeholder="0"
                                        class="w-full p-0 bg-transparent border-0 text-max-dark focus:ring-0 placeholder:text-sm placeholder:text-max-soft/50"
                                        aria-label="Вага">
                                </div>
                            </div>
                        </div>
                        <!-- End Input Number -->

                        <!-- Input Number -->
                        <div class="border rounded-lg bg-max-soft/5 border-max-soft/30">
                            <div class="flex items-center justify-between w-full gap-x-1">
                                <div class="relative px-3 py-2 grow">
                                    <span class="block text-xs text-gray-700">
                                        Довжина (мм)
                                    </span>
                                    <span class="absolute top-0 text-lg text-red-500 right-1">*</span>
                                    <input type="text" wire:model='order.hair_length' placeholder="0"
                                        class="w-full p-0 bg-transparent border-0 text-max-dark focus:ring-0 placeholder:text-sm placeholder:text-max-soft/50"
                                        aria-label="Довжина">
                                </div>
                            </div>
                        </div>
                        <!-- End Input Number -->

                        <!-- Input Number -->
                        <div class="border rounded-lg bg-max-soft/5 border-max-soft/30">
                            <div class="flex items-center justify-between w-full gap-x-1">
                                <div class="px-3 py-2 grow">
                                    <span class="block text-xs text-gray-700">
                                        Вік
                                    </span>
                                    <input type="text" wire:model='order.age' placeholder="25"
                                        class="w-full p-0 bg-transparent border-0 text-max-dark focus:ring-0 placeholder:text-sm placeholder:text-max-soft/50"
                                        aria-label="Вік">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- End Parameters Content --}}

                <!-- Description Content -->
                <div x-show="isActive(3)">
                    <div
                        class="flex flex-row mb-4 overflow-hidden border rounded-lg bg-max-soft/10 border-max-soft/10">
                        <div class="flex px-3 py-2 border-e pe-2 bg-max-soft/20 border-max-soft/10">
                            <i data-lucide="info" class="self-center w-4 h-4"></i>
                        </div>
                        <span class="px-4 py-2 text-xs leading-4 text-gray-600">
                            Можете вказати будь-яку додаткову інформацію, яку вважаєте важливою, для майстра.
                        </span>
                    </div>
                    <x-textarea label="Додатковий опис" rows="12"
                        class="border bg-max-soft/20 border-max-soft/20" wire:model='order.description'
                        maxlength="1000" />
                </div>
                <!-- End Description Content -->

                <!-- Check Content -->
                <div x-show="isActive(4)">
                    <div class="text-sm font-semibold text-center uppercase text-max-soft">
                        Перевірка заповнених даних
                    </div>

                    <div class="w-full">
                        <span class="block text-sm font-bold text-center text-max-dark"
                            x-text="$wire.order.goal"></span>
                    </div>

                    <div class="grid grid-cols-2 gap-5 mt-4">
                        <div class="flex flex-col text-sm">
                            <span class="font-bold">Ваше ім'я:</span>
                            <span class="font-normal line-clamp-1"
                                x-bind:class="{ 'italic text-gray-500': !$wire.order.name }"
                                x-text="$wire.order.name ? $wire.order.name : 'не вказано'"></span>
                        </div>

                        <div class="flex flex-col text-sm">
                            <span class="font-bold"
                                x-bind:class="!$wire.order.city ? 'text-red-500' : 'text-gray-600'">
                                Місто:
                            </span>
                            <span class="font-normal line-clamp-1"
                                x-bind:class="!$wire.order.city ? 'text-red-500 italic' : 'text-gray-600'"
                                x-text="$wire.order.city ? $wire.order.city : 'не вказано'"></span>
                        </div>

                        <div class="flex flex-col text-sm">
                            <span class="font-bold">Електронна пошта:</span>
                            <span class="font-normal line-clamp-1"
                                x-bind:class="{ 'italic text-gray-500': !$wire.order.email }"
                                x-text="$wire.order.email ? $wire.order.email : 'не вказано'"></span>
                        </div>

                        <div class="flex flex-col text-sm">
                            <span class="font-bold"
                                x-bind:class="!$wire.order.phone ? 'text-red-500' : 'text-gray-600'">
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
                            <span class="font-normal"
                                x-bind:class="{ 'italic text-gray-500': !$wire.order.hair_weight }"
                                x-text="$wire.order.hair_weight ? $wire.order.hair_weight + 'гр.' : 'не вказано'"></span>
                        </div>

                        <div class="flex flex-col text-sm">
                            <span class="font-bold"
                                x-bind:class="!$wire.order.hair_length ? 'text-red-500' : 'text-gray-600'">
                                Довжина:
                            </span>
                            <span class="font-normal"
                                x-bind:class="!$wire.order.hair_length ? 'text-red-500 italic' : 'text-gray-600'"
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
                            <i data-lucide="maximize" x-show="$wire.order.description"
                                @click="showDescription=!showDescription"
                                class="w-4 h-4 cursor-pointer animate-scale"></i>
                        </div>
                        <span class="font-normal line-clamp-1"
                            x-bind:class="{ 'italic text-gray-500': !$wire.order.description }"
                            x-text="$wire.order.description ? $wire.order.description : 'не вказано'"></span>
                        <div x-show="showDescription" x-transition.duration.500ms
                            class="absolute top-0 z-20 w-full h-full rounded-lg start-0 bg-max-light"></div>
                        <div x-show="showDescription" x-transition.duration.500ms
                            class="absolute top-0 left-0 z-20 w-full h-full p-5">
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
                <!-- End Check Content -->
            </div>

            <!-- Button Group -->
            <div class="flex justify-between gap-x-2">
                <button x-show="current > 1" type="button" @click="previous"
                    class="inline-flex items-center px-3 py-2 text-sm font-medium duration-300 rounded-lg shadow-sm gap-x-1 bg-max-dark text-max-light hover:bg-max-soft disabled:opacity-50 disabled:pointer-events-none">
                    <x-lucide-arrow-left class="w-4 h-4 me-1" />
                    Назад
                </button>

                <button type="button" @click="showModal = true" aria-label="Правила заявки"
                    class="inline-flex items-center px-3 py-2 text-sm font-medium duration-300 rounded-lg shadow-sm me-auto gap-x-1 bg-max-dark hover:bg-max-soft disabled:opacity-50 disabled:pointer-events-none">
                    <x-lucide-info class="w-5 h-5 text-max-light" />
                </button>

                <button x-show="current !== total" type="button" @click="next"
                    class="inline-flex items-center px-3 py-2 text-sm font-semibold duration-300 rounded-lg gap-x-1 ms-auto bg-max-dark text-max-light hover:bg-max-soft disabled:opacity-50 disabled:pointer-events-none">
                    Далі
                    <x-lucide-arrow-right class="w-4 h-4 ms-1" />
                </button>
                <button x-show="current === total" type="submit"
                    class="inline-flex items-center px-3 py-2 text-sm font-semibold duration-300 rounded-lg gap-x-1 bg-max-soft text-max-light hover:bg-max-dark disabled:opacity-50 disabled:pointer-events-none"
                    x-bind:disabled="!$wire.order.city || !$wire.order.phone || !$wire.order.hair_length">
                    Відправити
                    <i data-lucide="send" class="w-4 h-4 ms-1"></i>
                </button>
            </div>
            <!-- End Button Group -->
        </div>
        <!-- End Stepper Content -->

        {{-- Модальне вікно правил --}}
        <template x-teleport="body">
            <x-modal x-show="showModal" @click.away="showModal = false">
                {{-- Close Modal Button X --}}
                <span class="absolute cursor-pointer top-2 right-2">
                    <x-lucide-x class="w-5 h-5" @click="showModal = false" />
                </span>
                <x-slot name="header" icon="document-check">
                    Правила заявки
                </x-slot>

                <p><x-lucide-file-text class="h-14 w-14 float-start me-2" />
                    Заповніть всі необхіні поля та надішліть нам замовлення. Бажано вказати
                    колір, вагу і довжину Вашого волосся. Електронна пошта та номер телефону нам
                    необхідний для зворотнього зв`язку з Вами та для того щоб повідомити Вас про
                    купівлю волосся і його вартість.
                </p>
                <p>Спочатку Ви отримаєте сповіщення про те, що наш фахівець ознайомлюється з
                    замовленням, після чого Вам надійде другий лист з інформацією про вартість
                    та іншими деталями. Зазвичай це займає не більше декількох годин після
                    відправлення замовлення.
                </p>
                <p>В полі "Ваше повідомлення" Ви можете вказати будь-яку іншу, на Вашу думку,
                    важливу інформацію стосовно волосся. Наприклад, структуру волосся, стан
                    зрізу: свіжа рівна стрижка або просто укладене волосся або шиньйон. Вкажіть
                    якомога більше інформації, важливі всі деталі.</p>

                <x-slot name="footer" class="bg-red-500/70">
                    <p class="text-xs font-normal leading-4 text-white">
                        МИ НЕ НАДАЄМО ВАШІ КОНТАКТНІ ДАНІ ІНШИМ ОСОБАМ ТА НЕ РОЗСИЛАЄМО СПАМ!
                        НЕ НАМАГАЙТЕСЯ ОБДУРИТИ ОЦІНЮВАЧА, ВИКОРИСТОВУЮЧИ ПРИЙОМИ, ЩОБ ПОЛІПШИТИ
                        ЯКІСТЬ ВОЛОССЯ, АБО РОЗТЯГУВАТИ ПАСМО ЩОБ ВІЗУАЛЬНО ЗБІЛЬШИТИ ДОВЖИНУ. НАШ
                        ФАХІВЕЦЬ ОБОВ'ЯЗКОВО РОЗПІЗНАЄ ОБМАН.
                    </p>
                </x-slot>
            </x-modal>
        </template>

        {{-- Loading... --}}
        <div wire:loading wire:target="save" class="absolute top-0 w-full h-full rounded-lg start-0 bg-white/80">
            <div class="flex flex-col items-stretch justify-center h-full text-max-soft" role="status">
                <div class="self-center text-center">
                    <div class="animate-spin inline-block w-14 h-14 border-[3px] border-current border-t-transparent text-max-soft rounded-full"
                        role="status" aria-label="loading">
                        <span class="sr-only">Loading...</span>
                    </div>
                </div>
            </div>
        </div>

        {{-- Success... --}}
        @if (session('number'))
            <div class="absolute top-0 w-full h-full rounded-lg start-0 bg-max-light">
                <div class="flex flex-col items-stretch justify-center h-full text-max-soft" role="status">
                    <div class="self-center text-center">
                        <i data-lucide="smile" class="w-20 h-20 mx-auto text-max-soft"></i>
                        <p class="mt-3 leading-5 text-center">
                            Заявка успішно надіслана.<br>Очікуйте відповіді майстра.
                        </p>
                        <div class="mt-5 text-xl font-bold drop-shadow-lg">#{{ session('number') }}</div>
                        <button type="button"
                            class="px-3 py-2 mt-10 transition-all rounded-lg shadow bg-max-soft text-max-light hover:bg-max-dark hover:shadow-lg">
                            Нова заявка
                            <i data-lucide="rotate-ccw" class="inline-block w-4 h-4 ms-1"></i>
                        </button>
                    </div>
                </div>
            </div>
        @endif
    </form>
</div>
<!-- End Stepper -->

@script
    <script>
        Alpine.data('stepper', () => {
            return {
                current: 1,
                total: 4,
                previous() {
                    this.current--;
                },
                next() {
                    this.current++;
                },
                isActive(step) {
                    return this.current === step;
                },
                isDone(step) {
                    return this.current > step;
                },
                isFinal() {
                    return this.current === this.total;
                }
            }
        })
    </script>
@endscript
