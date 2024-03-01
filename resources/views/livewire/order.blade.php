<!-- Stepper -->
<div x-data="stepper" class="relative bg-max-light h-[575px] p-5 rounded-lg shadow-lg">

    <form wire:submit="save" x-data="{
        options: ['Хочу оцінити вартість', 'Хочу продати волосся'],
        goal: 'Хочу оцінити вартість',
        name: '',
        city: '',
        email: '',
        phone: '',
        hair_weight: '',
        hair_length: '',
        age: '',
        color: '',
        description: '',
        descriptionFull: false
    }">

        <div class="text-lg text-center text-max-soft uppercase font-semibold mb-5">Оцінка та продаж волосся</div>

        <!-- Stepper Nav -->
        <ul class="relative flex flex-row gap-x-2 mx-auto max-w-sm justify-between">

            <!-- Person Item -->
            <li class="md:shrink md:basis-0 flex-1 group flex gap-x-2 md:flex flex-col items-center justify-center">
                <div
                    class="relative min-w-[28px] min-h-[28px] flex flex-col items-center md:w-full md:inline-flex md:flex-wrap md:flex-row text-xs align-middl">
                    <span class="w-8 h-8 flex mx-auto justify-center items-center flex-shrink-0 font-medium rounded-full"
                        :class="[isActive(1) && 'animate-bounce', isDone(1) ? 'bg-max-dark' : 'bg-white']">
                        <x-lucide-file-text class="h-4 w-4"
                            x-bind:class="isActive(1) ? 'text-max-soft block' : 'hidden'" />
                        <x-lucide-check class="h-4 w-4" x-bind:class="isDone(1) ? 'block text-max-light' : 'hidden'" />
                    </span>
                    <div
                        class="absolute top-1/2 left-1/2 w-[50px] translate-x-1/2 md:h-px bg-max-soft/20 group-last:hidden">
                    </div>
                </div>
                <div class="grow md:grow-0 mt-1">
                    <span class="block text-sm font-semibold text-gray-600">
                        Заявка
                    </span>
                </div>
            </li>
            <!-- End Item -->

            <!-- Description Item -->
            <li class="md:shrink md:basis-0 flex-1 group flex gap-x-2 md:flex flex-col items-center justify-center">
                <div
                    class="min-w-[28px] min-h-[28px] flex flex-col items-center md:w-full md:inline-flex md:flex-wrap md:flex-row text-xs align-middle">
                    <span
                        class="w-8 h-8 flex mx-auto justify-center items-center flex-shrink-0 font-medium rounded-full"
                        :class="[isActive(2) && 'animate-bounce', isDone(2) ? 'bg-max-dark' : 'bg-white']">
                        <x-lucide-message-circle class="h-4 w-4"
                            x-bind:class="isActive(2) ? 'text-max-soft block' : 'hidden'" />
                        <x-lucide-check class="h-4 w-4" x-bind:class="isDone(2) ? 'block text-max-light' : 'hidden'" />
                    </span>
                    {{-- <div
                        class="mt-2 w-px h-full md:mt-0 md:ms-2 md:w-full md:h-px md:flex-1 bg-gray-200 group-last:hidden">
                    </div> --}}
                </div>
                <div class="grow md:grow-0 mt-1">
                    <span class="block text-sm font-semibold text-gray-600">
                        Опис
                    </span>
                </div>
            </li>
            <!-- End Item -->

            <!-- Check Item -->
            <li class="md:shrink md:basis-0 flex-1 group flex gap-x-2 md:flex flex-col items-center justify-center">
                <div
                    class="min-w-[28px] min-h-[28px] flex flex-col items-center md:w-full md:inline-flex md:flex-wrap md:flex-row text-xs align-middl">
                    <span
                        class="w-8 h-8 flex mx-auto justify-center items-center flex-shrink-0 font-medium rounded-full"
                        :class="[isActive(3) && 'animate-bounce', isDone(3) ? 'bg-max-dark' : 'bg-white']">
                        <x-lucide-list-checks class="h-4 w-4"
                            x-bind:class="isActive(3) ? 'text-max-soft block' : 'hidden'" />
                        <x-lucide-check class="h-4 w-4" x-bind:class="isDone(3) ? 'block text-max-light' : 'hidden'" />
                    </span>
                    {{-- <div
                        class="mt-2 w-px h-full md:mt-0 md:ms-2 md:w-full md:h-px md:flex-1 bg-gray-200 group-last:hidden">
                    </div> --}}
                </div>
                <div class="grow md:grow-0 mt-1">
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
                    <div class="flex flex-col gap-y-5 w-full">
                        {{-- <select x-model="goal" wire:model='order.goal' x-on:change="goal = $event.target.value">
                                <template x-for="option in options" :key="option">
                                    <option :value="option" x-text="option" :selected="option === goal"></option>
                                </template>
                            </select> --}}
                        <!-- Select -->
                        <div class="relative">
                            <select id="select" wire:model='order.goal' x-model="goal"
                                data-hs-select='{
                                        "placeholder": "Select option...",
                                        "toggleTag": "<button type=\"button\"><span class=\"me-2\" data-icon></span><span class=\"text-gray-800\" data-title></span></button>",
                                        "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative py-3 px-4 pe-9 flex items-center text-nowrap w-full cursor-pointer bg-max-soft/20 border border-max-soft/20 rounded-lg text-start text-sm focus:border-blue-500 focus:ring-blue-500 before:absolute before:inset-0 before:z-[1]",
                                        "dropdownClasses": "mt-2 z-50 w-full max-h-[300px] p-1 space-y-0.5 bg-white border border-gray-200 rounded-lg overflow-hidden overflow-y-auto",
                                        "optionClasses": "py-2 px-4 w-full text-sm text-gray-800 cursor-pointer hover:bg-gray-100 rounded-lg focus:outline-none focus:bg-gray-100",
                                        "optionTemplate": "<div><div class=\"flex items-center\"><div class=\"me-2\" data-icon></div><div class=\"font-semibold text-gray-800\" data-title></div></div><div class=\"mt-1.5 text-sm text-gray-500\" data-description></div></div>"
                                    }'
                                class="hidden">
                                {{-- <option value="">Choose</option> --}}
                                <template x-for="option in options" :key="option">
                                    <option value="Хочу оцінити вартість"
                                        data-hs-select-option='{
                                            "description": "Майстер оцінить та повідомить вартість.",
                                            "icon": "<img class=\"lazyload inline-block w-6 h-6 rounded-full\" data-src=\"/images/icons/order-money.svg\" alt=\"\" />"
                                        }'>
                                        Хочу оцінити вартість</option>

                                    <option value="Хочу продати волосся"
                                        data-hs-select-option='{
                                            "description": "Надішліть волосся та отримайте гроші.",
                                            "icon": "<img class=\"lazyload inline-block w-6 h-6 rounded-full\" data-src=\"/images/icons/order.svg\" alt=\"\" />"
                                        }'>
                                        Хочу продати волосся</option>
                                </template>
                            </select>

                            <div class="absolute top-1/2 end-3 -translate-y-1/2">
                                <x-lucide-chevrons-up-down class="flex-shrink-0 w-3.5 h-3.5 text-max-soft" />
                            </div>
                        </div>
                        <!-- End Select -->

                        <div class="flex flex-row w-full gap-4">

                            <div class="relative w-1/2">
                                <x-input type="text" label="Ваше ім'я" maxlength="40" x-model="name"
                                    wire:model='order.name' class="bg-max-soft/20 border border-max-soft/20" />
                            </div>

                            <div class="relative w-1/2">
                                <x-input type="text" label="Місто" maxlength="30" x-model="city"
                                    wire:model='order.city' required class="bg-max-soft/20 border border-max-soft/20" />
                            </div>

                        </div>
                        <div class="flex flex-row w-full gap-4">

                            <div class="relative w-1/2">
                                <x-input type="text" label="Електронна пошта" maxlength="40" x-model="email"
                                    wire:model='order.email' class="bg-max-soft/20 border border-max-soft/20" />
                            </div>

                            <div class="relative w-1/2">
                                <x-input type="text" label="Номер телефону" maxlength="15" x-model="phone"
                                    wire:model='order.phone' required
                                    class="bg-max-soft/20 border border-max-soft/20" />
                            </div>
                        </div>
                        <!-- Select -->
                        <div class="relative">
                            <select x-model="color" wire:model='order.color'
                                data-hs-select='{
                                        "placeholder": "Вкажіть колір",
                                        "toggleTag": "<button type=\"button\"></button>",
                                        "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative py-3 px-4 pe-9 flex text-nowrap w-full cursor-pointer bg-max-soft/20 border border-max-soft/20 rounded-lg text-start text-sm focus:border-blue-500 focus:ring-blue-500 before:absolute before:inset-0 before:z-[1]",
                                        "dropdownClasses": "mt-2 z-50 w-full max-h-[300px] p-1 space-y-0.5 bg-white border border-gray-200 rounded-lg overflow-hidden overflow-y-auto",
                                        "optionClasses": "py-2 px-4 w-full text-sm text-gray-800 cursor-pointer hover:bg-gray-100 rounded-lg focus:outline-none focus:bg-gray-100",
                                        "optionTemplate": "<div class=\"flex justify-between items-center w-full\"><span data-title></span><span class=\"hidden hs-selected:block\"><svg class=\"flex-shrink-0 w-3.5 h-3.5 text-blue-600\" xmlns=\"http:.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><polyline points=\"20 6 9 17 4 12\"/></svg></span></div>"
                                    }'
                                class="hidden">
                                <option value="">Choose</option>
                                <option value="Блонд">Блонд</option>
                                <option value="Світло-русий">Світло-русий</option>
                                <option value="Русий">Русий</option>
                                <option value="Світло-коричневий">Світло-коричневий</option>
                                <option value="Темно-коричневий">Темно-коричневий</option>
                                <option value="Чорний">Чорний</option>
                            </select>

                            <div class="absolute top-1/2 end-3 -translate-y-1/2">
                                <x-lucide-chevrons-up-down class="flex-shrink-0 w-3.5 h-3.5 text-max-soft" />
                            </div>
                        </div>
                        <!-- End Select -->
                        <div class="flex justify-between gap-x-4">
                            <!-- Input Number -->
                            <div class="bg-max-soft/5 border border-max-soft/30 rounded-lg">
                                <div class="w-full flex justify-between items-center gap-x-1">
                                    <div class="grow py-2 px-3">
                                        <span class="block text-xs text-gray-700">
                                            Вага
                                        </span>
                                        <input class="w-full p-0 bg-transparent border-0 text-gray-800 focus:ring-0"
                                            type="text" x-model="hair_weight" wire:model='order.hair_weight'
                                            aria-label="Вага">
                                    </div>
                                    <div
                                        class="flex flex-col -gap-y-px divide-y divide-max-soft/30 border-s border-max-soft/30">
                                        <button type="button" role="button" aria-label="Weight minus"
                                            class="w-7 h-7 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-se-lg bg-max-soft/50 text-max-dark hover:bg-max-soft/80 transition disabled:opacity-50 disabled:pointer-events-none">
                                            <x-lucide-minus class="h-3 w-3" />
                                        </button>
                                        <button type="button" role="button" aria-label="Weight plus"
                                            class="w-7 h-7 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-ee-lg bg-max-soft/50 text-max-dark hover:bg-max-soft/80 transition disabled:opacity-50 disabled:pointer-events-none">
                                            <x-lucide-plus class="h-3 w-3" />
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- End Input Number -->
                            <!-- Input Number -->
                            <div class="bg-max-soft/5 border border-max-soft/30 rounded-lg">
                                <div class="w-full flex justify-between items-center gap-x-1">
                                    <div class="grow py-2 px-3 relative">
                                        <span class="block text-xs text-gray-700">
                                            Довжина
                                        </span>
                                        <span class="absolute top-0 right-1 text-red-500 text-lg">*</span>
                                        <input class="w-full p-0 bg-transparent border-0 text-gray-800 focus:ring-0"
                                            type="text" x-model="hair_length" wire:model='order.hair_length'
                                            aria-label="Довжина">
                                    </div>
                                    <div
                                        class="flex flex-col -gap-y-px divide-y divide-max-soft/30 border-s border-max-soft/30">
                                        <button type="button" role="button" aria-label="Length minus"
                                            class="w-7 h-7 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-se-lg bg-max-soft/50 text-max-dark hover:bg-max-soft/80 transition disabled:opacity-50 disabled:pointer-events-none">
                                            <x-lucide-minus class="h-3 w-3" />
                                        </button>
                                        <button type="button" role="button" aria-label="Length plus"
                                            class="w-7 h-7 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-ee-lg bg-max-soft/50 text-max-dark hover:bg-max-soft/80 transition disabled:opacity-50 disabled:pointer-events-none">
                                            <x-lucide-plus class="h-3 w-3" />
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- End Input Number -->
                            <!-- Input Number -->
                            <div class="bg-max-soft/5 border border-max-soft/30 rounded-lg">
                                <div class="w-full flex justify-between items-center gap-x-1">
                                    <div class="grow py-2 px-3">
                                        <span class="block text-xs text-gray-700">
                                            Вік
                                        </span>
                                        <input class="w-full p-0 bg-transparent border-0 text-gray-800 focus:ring-0"
                                            type="text" x-model="age" wire:model='order.age' aria-label="Вік">
                                    </div>
                                    <div
                                        class="flex flex-col -gap-y-px divide-y divide-max-soft/30 border-s border-max-soft/30">
                                        <button type="button" role="button" aria-label="Age minus"
                                            class="w-7 h-7 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-se-lg bg-max-soft/50 text-max-dark hover:bg-max-soft/80 transition disabled:opacity-50 disabled:pointer-events-none">
                                            <x-lucide-minus class="h-3 w-3" />
                                        </button>
                                        <button type="button" role="button" aria-label="Age plus"
                                            class="w-7 h-7 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-ee-lg bg-max-soft/50 text-max-dark hover:bg-max-soft/80 transition disabled:opacity-50 disabled:pointer-events-none">
                                            <x-lucide-plus class="h-3 w-3" />
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- End Input Number -->
                        </div>
                    </div>
                    <!-- End Floating Input -->
                </div>
                <!-- End Person Content -->

                <!-- Description Content -->
                <div x-show="isActive(2)">
                    <div
                        class="mb-4 flex flex-row bg-max-soft/10 rounded-lg border border-max-soft/10 overflow-hidden">
                        <div class="border-e pe-2 bg-max-soft/20 border-max-soft/10 flex py-2 px-3">
                            <x-lucide-info class="h-4 w-4 self-center" />
                        </div>
                        <span class="text-xs leading-4 text-gray-600 py-2 px-4">
                            Можете вказати будь-яку додаткову інформацію, яку вважаєте важливою, для майстра.
                        </span>
                    </div>
                    <x-textarea label="Додатковий опис" rows="12"
                        class="bg-max-soft/20 border border-max-soft/20" x-model="description"
                        wire:model='order.description' maxlength="1000" />
                </div>
                <!-- End Description Content -->

                <!-- Check Content -->
                <div x-show="isActive(3)">
                    <div class="text-center text-sm font-semibold uppercase text-max-soft">
                        Перевірка заповнених даних
                    </div>

                    <div>
                        <span class="font-normal" x-text="goal"></span>
                    </div>

                    <div class="grid grid-cols-2 gap-5 mt-4">
                        <div class="flex flex-col text-sm">
                            <span class="font-bold">Ваше ім'я:</span>
                            <span class="font-normal line-clamp-1" x-text="name ? name : 'не вказано'"></span>
                        </div>

                        <div class="flex flex-col text-sm">
                            <span class="font-bold" :class="!city ? 'text-red-500' : 'text-gray-600'">
                                Місто:
                            </span>
                            <span class="font-normal line-clamp-1" :class="!city ? 'text-red-500' : 'text-gray-600'"
                                x-text="city ? city : 'не вказано'"></span>
                        </div>

                        <div class="flex flex-col text-sm">
                            <span class="font-bold">Електронна пошта:</span>
                            <span class="font-normal line-clamp-1" x-text="email ? email : 'не вказано'"></span>
                        </div>

                        <div class="flex flex-col text-sm">
                            <span class="font-bold" :class="!phone ? 'text-red-500' : 'text-gray-600'">
                                Номер телефону:
                            </span>
                            <span class="font-normal line-clamp-1" :class="!phone ? 'text-red-500' : 'text-gray-600'"
                                x-text="phone ? phone : 'не вказано'"></span>
                        </div>
                    </div>

                    <div class="grid grid-cols-3 gap-5 space-y5 mt-4">
                        <div class="flex flex-col text-sm">
                            <span class="font-bold">Вага:</span>
                            <span class="font-normal"
                                x-text="hair_weight ? hair_weight + 'гр.' : 'не вказано'"></span>
                        </div>

                        <div class="flex flex-col text-sm">
                            <span class="font-bold" :class="!hair_length ? 'text-red-500' : 'text-gray-600'">
                                Довжина:
                            </span>
                            <span class="font-normal" :class="!hair_length ? 'text-red-500' : 'text-gray-600'"
                                x-text="hair_length ? hair_length + 'мм.' : 'не вказано'"></span>
                        </div>

                        <div class="flex flex-col text-sm">
                            <span class="font-bold">Вік:</span>
                            <span class="font-normal" x-text="age ? age + 'р.' : 'не вказано'"></span>
                        </div>
                    </div>

                    <div class="mt-4">
                        <div class="flex flex-col text-sm">
                            <span class="font-bold">Колір:</span>
                            <span class="font-normal" x-text="color"></span>
                        </div>
                    </div>

                    <div class="flex flex-col text-sm mt-4">
                        <div class="flex justify-between">
                            <span class="font-bold">Додатковий опис:</span>
                            <x-lucide-maximize x-show="description" x-on:click="descriptionFull=!descriptionFull"
                                class="h-4 w-4 cursor-pointer animate-scale" />
                        </div>
                        <span class="font-normal line-clamp-1"
                            x-text="description ? description : 'не вказано'"></span>
                        <div x-show="descriptionFull" x-transition.duration.500ms
                            class="absolute top-0 start-0 w-full h-full z-20 bg-max-light rounded-lg"></div>
                        <div x-show="descriptionFull" x-transition.duration.500ms
                            class="absolute top-0 left-0 h-full w-full p-5 z-20">
                            <div class="flex flex-col h-full">
                                <span class="uppercase text-center font-semibold mb-5 text-gray-700">
                                    Додатковий опис
                                </span>
                                <div class="h-full mb-10">
                                    <p x-text="description"
                                        class="text-gray-600 [&::-webkit-scrollbar]:w-2
                                        [&::-webkit-scrollbar-track]:rounded-full
                                        [&::-webkit-scrollbar-track]:bg-gray-100
                                        [&::-webkit-scrollbar-thumb]:rounded-full
                                        [&::-webkit-scrollbar-thumb]:bg-gray-300
                                        dark:[&::-webkit-scrollbar-track]:bg-max-soft/20
                                        dark:[&::-webkit-scrollbar-thumb]:bg-max-soft">
                                    </p>
                                </div>
                                <x-lucide-minimize x-on:click="descriptionFull=!descriptionFull"
                                    class="h-5 w-5 absolute right-5 bottom-5 cursor-pointer" />
                            </div>
                        </div>
                    </div>

                    <div class="mt-4">
                        <label for="hs-checkbox-in-form"
                            class="flex px-3 py-2 w-full bg-max-soft/10 border border-max-soft/10 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500">
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
                    class="py-2 px-3 inline-flex items-center gap-x-1 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none">
                    <x-lucide-chevron-left class="h-4 w-4 me-1" />
                    Назад
                </button>
                <button type="button" aria-label="Детальна інформація" @click="$wire.$set('order.goal', 'sdgsdgs')"
                    class="py-2 px-3 inline-flex items-center me-auto gap-x-1 text-sm font-medium rounded-lg bg-max-dark text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none">
                    <x-lucide-info class="h-5 w-5 text-max-light" />
                </button>
                <button x-show="current !== total" type="button" @click="next"
                    class="py-2 px-3 inline-flex items-center gap-x-1 text-sm font-semibold rounded-lg border border-transparent bg-max-dark text-max-light hover:bg-max-dark disabled:opacity-50 disabled:pointer-events-none">
                    Далі
                    <x-lucide-chevron-right class="h-4 w-4 ms-1" />
                </button>
                <button x-show="current === total" type="submit"
                    class="py-2 px-3 inline-flex items-center gap-x-1 text-sm font-semibold rounded-lg border border-transparent bg-max-soft text-max-light hover:bg-max-dark disabled:opacity-50 disabled:pointer-events-none"
                    :disabled="!city || !phone || !hair_length">
                    Відправити
                    <x-lucide-send class="h-4 w-4 ms-1" />
                </button>
            </div>
            <!-- End Button Group -->
        </div>
        <!-- End Stepper Content -->

        {{-- Loading... --}}
        <div wire:loading wire:target="save" class="absolute top-0 start-0 w-full h-full bg-white/80 rounded-lg">
            <div class="flex flex-col h-full justify-center items-stretch text-max-soft" role="status">
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
            <div class="absolute top-0 start-0 w-full h-full bg-max-light rounded-lg">
                <div class="flex flex-col h-full justify-center items-stretch text-max-soft" role="status">
                    <div class="self-center text-center">
                        <x-lucide-smile class="h-20 w-20 text-max-soft mx-auto" />
                        <p class="leading-5 text-center mt-3">Заявка успішно надіслана.<br>Очікуйте відповіді
                            майстра.
                        </p>
                        <div class="text-xl font-bold drop-shadow-lg mt-5">#{{ session('number') }}</div>
                        <button type="button"
                            class="bg-max-soft text-max-light shadow py-2 px-3 rounded-lg mt-10 hover:bg-max-dark hover:shadow-lg transition-all">
                            Нова заявка
                            <x-lucide-rotate-ccw class="h-4 w-4 ms-1 inline-block" />
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
                total: 3,
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
