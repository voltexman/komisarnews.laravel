<!-- Stepper -->
<x-stepper current="3">
    <form wire:submit="save" x-data="{
        showDescription: false,
    }">

        <div class="mb-5">
            <span class="block text-lg font-semibold text-center uppercase text-max-soft">
                Оцінка та продаж волосся
            </span>
        </div>

        <x-stepper.navigation>
            <x-stepper.navigation.item step='1' icon='file-text' label='Заявка' />
            <x-stepper.navigation.item step='2' icon='swatch-book' label='Опції' />
            <x-stepper.navigation.item step='3' icon='camera' label='Фото' />
            <x-stepper.navigation.item step='4' icon='message-square-text' label='Опис' />
            <x-stepper.navigation.item step='5' icon='file-check' label='Дані' />
        </x-stepper.navigation>

        <!-- Stepper Content -->
        <div class="flex flex-col mt-5">
            <div class="flex flex-col h-[375px]">

                <!-- Person Content -->
                <div data-hs-stepper-content-item='{
                        "index": 1
                    }'>
                    <div class="flex flex-col w-full gap-y-5">
                        <x-form.select label="Вкажіть ціль заявки" id="goals">
                            @foreach ($goals as $goal)
                                <option value="{{ $goal['option'] }}"
                                    data-hs-select-option='{
                                        "description": "{{ $goal['description'] }}"
                                    }'>
                                    {{ $goal['option'] }}
                                </option>
                            @endforeach
                        </x-form.select>

                        <x-form.input class="border bg-max-soft/20 border-max-soft/20" label="Ваше ім'я" icon="user"
                            maxlength="40" name="order.name" />

                        <x-form.input class="border bg-max-soft/20 border-max-soft/20" label="Місто" icon="map-pin"
                            maxlength="30" name="order.city" required />

                        <x-form.input class="border bg-max-soft/20 border-max-soft/20" label="Електронна пошта"
                            icon="mail" maxlength="40" name="order.email" />

                        <x-form.input class="border bg-max-soft/20 border-max-soft/20" label="Номер телефону"
                            icon="phone" maxlength="15" name="order.phone" required />
                    </div>
                </div>
                <!-- End Person Content -->

                {{-- Parameters Content --}}
                <div data-hs-stepper-content-item='{
                    "index": 2
                }'
                    style="display: none" class="flex flex-col gap-y-5">

                    <p class="-mb-4 text-xs leading-4 text-max-dark/80">
                        Якийсь текст пояснюючий що потрібно вказати в даному полі</p>
                    <x-form.select label="Вкажіть колір" id="colors">
                        @foreach ($colors as $item)
                            <option value="{{ $item['option'] }}">
                                {{ $item['option'] }}
                            </option>
                        @endforeach
                    </x-form.select>

                    <p class="-mb-4 text-xs leading-4 text-max-dark/80">
                        Якийсь текст пояснюючий що потрібно вказати в даному полі</p>
                    <div class="flex justify-between gap-x-4">

                        <!-- Input Number -->
                        <div class="border rounded-lg bg-max-soft/20 border-max-soft/30">
                            <div class="flex items-center justify-between w-full gap-x-1">
                                <div class="px-3 py-2 grow">
                                    <span class="block text-xs text-max-dark">Вага (гр)</span>
                                    <input type="text" wire:model='order.hair_weight' placeholder="0"
                                        class="w-full p-0 bg-transparent border-0 text-max-dark focus:ring-0 placeholder:text-sm placeholder:text-max-soft/50"
                                        aria-label="Вага">
                                </div>
                            </div>
                        </div>
                        <!-- End Input Number -->

                        <!-- Input Number -->
                        <div class="border rounded-lg bg-max-soft/20 border-max-soft/30" data-hs-input-number>
                            <div class="flex items-center justify-between w-full gap-x-1">
                                <div class="relative px-3 py-2 grow">
                                    <span class="block text-xs text-max-dark">Довжина (мм)</span>
                                    <span class="absolute top-0 text-lg text-red-500 right-1">*</span>
                                    <input type="text" wire:model.blur='order.hair_length' placeholder="0"
                                        class="w-full p-0 bg-transparent border-0 text-max-dark focus:ring-0 placeholder:text-sm placeholder:text-max-soft/50"
                                        aria-label="Довжина" data-hs-input-number-input>
                                </div>
                            </div>
                        </div>
                        <!-- End Input Number -->

                        <!-- Input Number -->
                        <div class="w-[130px] border rounded-lg bg-max-soft/20 border-max-soft/30">
                            <div class="flex items-center justify-between w-full gap-x-1">
                                <div class="px-3 py-2 grow">
                                    <span class="block text-xs text-max-dark">Вік</span>
                                    <input type="text" wire:model='order.age' placeholder="25"
                                        class="w-full p-0 bg-transparent border-0 text-max-dark focus:ring-0 placeholder:text-sm placeholder:text-max-soft/50"
                                        aria-label="Вік">
                                </div>
                            </div>
                        </div>
                    </div>

                    <p class="-mb-4 text-xs leading-4 text-max-dark/80">
                        Якийсь текст пояснюючий що потрібно вказати в даному полі</p>
                    <ul class="flex flex-col justify-between sm:flex-row">
                        <li
                            class="inline-flex items-center w-full gap-x-2.5 py-3 px-4 text-sm font-medium transition hover:bg-max-soft/40 bg-max-soft/20 border border-max-soft/30 text-max-dark -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg sm:-ms-px sm:mt-0 sm:first:rounded-se-none sm:first:rounded-es-lg sm:last:rounded-es-none sm:last:rounded-se-lg">
                            <div class="relative flex items-start w-full">
                                <div class="flex items-center h-6">
                                    <input id="hair-options-1" wire:model="order.hair_options" type="checkbox"
                                        value="Зрізані"
                                        class="p-2.5 rounded-full border-max-soft checked:bg-max-soft disabled:opacity-50">
                                </div>
                                <label for="hair-options-1"
                                    class="self-center block w-full text-sm ms-3 text-max-dark">Зрізані</label>
                            </div>
                        </li>

                        <li
                            class="inline-flex items-center w-full gap-x-2.5 py-3 px-4 text-sm font-medium transition hover:bg-max-soft/40 bg-max-soft/20 border border-max-soft/30 text-max-dark -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg sm:-ms-px sm:mt-0 sm:first:rounded-se-none sm:first:rounded-es-lg sm:last:rounded-es-none sm:last:rounded-se-lg">
                            <div class="relative flex items-start w-full">
                                <div class="flex items-center h-6">
                                    <input id="hair-options-2" wire:model="order.hair_options" type="checkbox"
                                        value="Фарбовані"
                                        class="p-2.5 rounded-full border-max-soft checked:bg-max-soft disabled:opacity-50">
                                </div>
                                <label for="hair-options-2"
                                    class="self-center block w-full text-sm ms-3 text-max-dark">Фарбовані</label>
                            </div>
                        </li>

                        <li
                            class="inline-flex items-center w-full gap-x-2.5 py-3 px-4 text-sm font-medium transition hover:bg-max-soft/40 bg-max-soft/20 border border-max-soft/30 text-max-dark -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg sm:-ms-px sm:mt-0 sm:first:rounded-se-none sm:first:rounded-es-lg sm:last:rounded-es-none sm:last:rounded-se-lg">
                            <div class="relative flex items-start w-full">
                                <div class="flex items-center h-6">
                                    <input id="hair-options-3" wire:model="order.hair_options" type="checkbox"
                                        value="З сивиною"
                                        class="p-2.5 rounded-full border-max-soft checked:bg-max-soft disabled:opacity-50">
                                </div>
                                <label for="hair-options-3"
                                    class="self-center block w-full text-sm ms-3 text-max-dark">З сивиною</label>
                            </div>
                        </li>
                    </ul>
                </div>
                {{-- End Parameters Content --}}

                <!-- Person Content -->
                <div data-hs-stepper-content-item='{
                    "index": 3
                }'>
                    photos...
                </div>
                {{-- End Photos Content --}}

                <!-- Description Content -->
                <div data-hs-stepper-content-item='{
                    "index": 4
                }'
                    style="display: none">
                    <div
                        class="flex flex-row mb-4 overflow-hidden border rounded-lg bg-max-soft/10 border-max-soft/10">
                        <div class="flex px-3 py-2 border-e pe-2 bg-max-soft/20 border-max-soft/10">
                            <i data-lucide="info" class="self-center w-4 h-4"></i>
                        </div>
                        <span class="px-4 py-2 text-xs leading-4 text-gray-600">
                            Можете вказати будь-яку додаткову інформацію, яку вважаєте важливою, для майстра.
                        </span>
                    </div>
                    <x-form.textarea label="Додатковий опис" rows="12" name="order.description"
                        maxlength="1000" />
                </div>
                <!-- End Description Content -->

                <!-- Check Content -->
                <div data-hs-stepper-content-item='{
                    "index": 5
                }'
                    style="display: none">
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
                            <span class="font-normal" x-bind:class="{ 'italic text-gray-500': !$wire.order.color }"
                                x-text="$wire.order.color ? $wire.order.color + 'р.' : 'не вказано'"></>
                        </div>
                    </div>

                    <div class="mt-4">
                        <div class="flex flex-col text-sm">
                            <span class="font-bold">Опції:</span>
                            <span class="font-normal"
                                x-text="$wire.order.hair_options ? $wire.order.hair_options : 'Не зразані, не фарбовані, без сивини'"></span>
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
                                <span class="font-bold cursor-pointer text-max-soft"
                                    data-hs-overlay="#rules-check-document">
                                    правилами
                                </span>
                            </span>
                        </label>
                    </div>
                </div>
                <!-- End Check Content -->
            </div>

            <!-- Button Group -->
            <div class="flex justify-between gap-x-2">
                <button type="button" data-hs-stepper-back-btn
                    class="inline-flex items-center px-3 py-2 text-sm font-medium duration-300 rounded-lg shadow-sm gap-x-1 bg-max-dark text-max-light hover:bg-max-soft disabled:opacity-50 disabled:pointer-events-none">
                    <x-lucide-arrow-left class="w-4 h-4 me-1" />
                    Назад
                </button>

                <button type="button" data-hs-overlay="#rules-check-document" aria-label="Правила заявки"
                    class="inline-flex items-center px-3 py-2 text-sm font-medium duration-300 rounded-lg shadow-sm me-auto gap-x-1 bg-max-dark hover:bg-max-soft disabled:opacity-50 disabled:pointer-events-none">
                    <x-lucide-info class="w-5 h-5 text-max-light" />
                </button>

                <button type="button" data-hs-stepper-next-btn
                    class="inline-flex items-center px-3 py-2 text-sm font-semibold duration-300 rounded-lg gap-x-1 ms-auto bg-max-dark text-max-light hover:bg-max-soft disabled:opacity-50 disabled:pointer-events-none">
                    Далі
                    <x-lucide-arrow-right class="w-4 h-4 ms-1" />
                </button>
                <button type="submit" data-hs-stepper-finish-btn style="display: none;"
                    class="inline-flex items-center px-3 py-2 text-sm font-semibold duration-300 rounded-lg gap-x-1 bg-max-soft text-max-light hover:bg-max-dark disabled:opacity-50 disabled:pointer-events-none"
                    x-bind:disabled="!$wire.order.city || !$wire.order.phone || !$wire.order.hair_length">
                    Відправити
                    <x-lucide-send class="w-4 h-4 ms-1" />
                </button>
            </div>
            <!-- End Button Group -->
        </div>
        <!-- End Stepper Content -->

        {{-- Модальне вікно правил --}}



        <div id="rules-check-document"
            class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto">
            <div
                class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto h-[calc(100%-3.5rem)] flex items-center">
                <div
                    class="flex flex-col max-h-full overflow-hidden bg-white border shadow-sm pointer-events-auto rounded-xl h-2/3">
                    <div class="flex items-center justify-between px-4 py-3 border-b dark:border-gray-700">
                        <h3 class="font-bold text-gray-800 dark:text-white">
                            Modal title
                        </h3>
                        <button type="button"
                            class="flex items-center justify-center text-sm font-semibold text-gray-800 border border-transparent rounded-full size-7 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-gray-700 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                            data-hs-overlay="#hs-scroll-inside-body-modal">
                            <span class="sr-only">Close</span>
                            <x-lucide-x class="w-4 h-4" />
                        </button>
                    </div>
                    <div
                        class="p-4 overflow-y-auto text-gray-600 [&::-webkit-scrollbar]:w-2
                                            [&::-webkit-scrollbar-track]:rounded-full
                                            [&::-webkit-scrollbar-track]:bg-gray-100
                                            [&::-webkit-scrollbar-thumb]:rounded-full
                                            [&::-webkit-scrollbar-thumb]:bg-gray-300
                                            dark:[&::-webkit-scrollbar-track]:bg-max-soft/20
                                            dark:[&::-webkit-scrollbar-thumb]:bg-max-soft">
                        <div class="space-y-4">
                            <div>
                                <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Be bold</h3>
                                <p class="mt-1 text-gray-800 dark:text-gray-400">
                                    Motivate teams to do their best work. Offer best practices to get users
                                    going in the right direction. Be bold and offer just enough help to get
                                    the work started, and then get out of the way. Give accurate information
                                    so users can make educated decisions. Know your user's struggles and
                                    desired outcomes and give just enough information to let them get where
                                    they need to go.
                                </p>
                            </div>

                            <div>
                                <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Be
                                    optimistic</h3>
                                <p class="mt-1 text-gray-800 dark:text-gray-400">
                                    Focusing on the details gives people confidence in our products. Weave a
                                    consistent story across our fabric and be diligent about vocabulary
                                    across all messaging by being brand conscious across products to create
                                    a seamless flow across all the things. Let people know that they can
                                    jump in and start working expecting to find a dependable experience
                                    across all the things. Keep teams in the loop about what is happening by
                                    informing them of relevant features, products and opportunities for
                                    success. Be on the journey with them and highlight the key points that
                                    will help them the most - right now. Be in the moment by focusing
                                    attention on the important bits first.
                                </p>
                            </div>

                            <div>
                                <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Be
                                    practical, with a wink</h3>
                                <p class="mt-1 text-gray-800 dark:text-gray-400">
                                    Keep our own story short and give teams just enough to get moving. Get
                                    to the point and be direct. Be concise - we tell the story of how we can
                                    help, but we do it directly and with purpose. Be on the lookout for
                                    opportunities and be quick to offer a helping hand. At the same time
                                    realize that nobody likes a nosy neighbor. Give the user just enough to
                                    know that something awesome is around the corner and then get out of the
                                    way. Write clear, accurate, and concise text that makes interfaces more
                                    usable and consistent - and builds trust. We strive to write text that
                                    is understandable by anyone, anywhere, regardless of their culture or
                                    language so that everyone feels they are part of the team.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center justify-end px-4 py-3 border-t gap-x-2 dark:border-gray-700">
                        <button type="button"
                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-gray-800 bg-white border border-gray-200 rounded-lg shadow-sm gap-x-2 hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                            data-hs-overlay="#hs-scroll-inside-body-modal">
                            Close
                        </button>
                        <button type="button"
                            class="inline-flex items-center px-3 py-2 text-sm font-semibold text-white bg-blue-600 border border-transparent rounded-lg gap-x-2 hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                            Save changes
                        </button>
                    </div>
                </div>
            </div>
        </div>



        <x-modal>
            <x-modal.panel>
                <x-modal.close />
                <x-modal.header>
                    <x-lucide-file-check class="inline-flex w-5 h-5 -mt-1 text-max-dark" />
                    Правила заявки
                </x-modal.header>

                <x-modal.body>
                    <div
                        class="h-full overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-track]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-thumb]:bg-gray-300">
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
                    </div>
                </x-modal.body>

                <x-modal.footer>
                    <p class="text-xs font-normal leading-4 text-white">
                        МИ НЕ НАДАЄМО ВАШІ КОНТАКТНІ ДАНІ ІНШИМ ОСОБАМ ТА НЕ РОЗСИЛАЄМО СПАМ!
                        НЕ НАМАГАЙТЕСЯ ОБДУРИТИ ОЦІНЮВАЧА, ВИКОРИСТОВУЮЧИ ПРИЙОМИ, ЩОБ ПОЛІПШИТИ
                        ЯКІСТЬ ВОЛОССЯ, АБО РОЗТЯГУВАТИ ПАСМО ЩОБ ВІЗУАЛЬНО ЗБІЛЬШИТИ ДОВЖИНУ. НАШ
                        ФАХІВЕЦЬ ОБОВ'ЯЗКОВО РОЗПІЗНАЄ ОБМАН.
                    </p>
                </x-modal.footer>

            </x-modal.panel>
        </x-modal>

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
</x-stepper>
<!-- End Stepper -->

@script
    <script>
        window.addEventListener('load', () => {
            const goalSelect = HSSelect.getInstance('#goals');
            const colorSelect = HSSelect.getInstance('#colors');
            // const optionsSelect = HSSelect.getInstance('#hair-options');

            goalSelect.on('change', (value) => {
                $wire.set('order.goal', value)
            });
            colorSelect.on('change', (value) => {
                $wire.set('order.color', value)
            });
            // optionsSelect.on('change', (values) => {
            //     $wire.set('order.hair_options', values)
            // });
        })
    </script>
@endscript
