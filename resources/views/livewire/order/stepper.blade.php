<!-- Stepper -->
<x-stepper current="1" wire:ignore>
    <form wire:submit="save" x-data="{
        descriptionFull: false,
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
            <x-stepper.navigation.item step='4' icon='message-circle-more' label='Опис' />
            <x-stepper.navigation.item step='5' icon='file-check' label='Дані' />
        </x-stepper.navigation>

        <!-- Stepper Content -->
        <div class="flex flex-col mt-5">
            <div class="flex flex-col h-[375px]">

                <!-- Person Content -->
                <x-stepper.content step='1'>
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
                </x-stepper.content>
                <!-- End Person Content -->

                {{-- Parameters Content --}}
                <x-stepper.content step='2' style="display: none">

                    <div>
                        <p class="hidden text-xs leading-4 lg:block text-max-dark/80">
                            Якийсь текст пояснюючий що потрібно вказати в даному полі</p>
                        <x-form.select label="Вкажіть колір волосся" id="colors">
                            @foreach ($colors as $item)
                                <option value="{{ $item['option'] }}">
                                    {{ $item['option'] }}
                                </option>
                            @endforeach
                        </x-form.select>
                    </div>

                    <div>
                        <p class="hidden text-xs leading-4 lg:inline-block text-max-dark/80">
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
                    </div>

                    <div>
                        <p class="hidden text-xs leading-4 lg:block text-max-dark/80">
                            Якийсь текст пояснюючий що потрібно вказати в даному полі</p>
                        <ul class="flex flex-col justify-between sm:flex-row">
                            <li
                                class="inline-flex items-center w-full gap-x-2.5 py-3 px-4 text-sm font-medium transition hover:bg-max-soft/40 bg-max-soft/20 border border-max-soft/30 text-max-dark -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg sm:-ms-px sm:mt-0 sm:first:rounded-se-none sm:first:rounded-es-lg sm:last:rounded-es-none sm:last:rounded-se-lg">
                                <div class="relative flex items-start w-full">
                                    <div class="flex items-center self-center h-6">
                                        <input id="hair-options-1" wire:model="order.hair_options" type="checkbox"
                                            value="Зрізані"
                                            class="p-2.5 rounded-full border-max-soft checked:bg-max-soft disabled:opacity-50">
                                    </div>
                                    <label for="hair-options-1"
                                        class="flex flex-col self-center w-full text-sm ms-3 text-max-dark">
                                        Зрізані
                                        <span class="text-xs lg:hidden">some text</span>
                                    </label>
                                </div>
                            </li>

                            <li
                                class="inline-flex items-center w-full gap-x-2.5 py-3 px-4 text-sm font-medium transition hover:bg-max-soft/40 bg-max-soft/20 border border-max-soft/30 border-t-0 lg:border-t text-max-dark -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg sm:-ms-px sm:mt-0 sm:first:rounded-se-none sm:first:rounded-es-lg sm:last:rounded-es-none sm:last:rounded-se-lg">
                                <div class="relative flex items-start w-full">
                                    <div class="flex items-center self-center h-6">
                                        <input id="hair-options-2" wire:model="order.hair_options" type="checkbox"
                                            value="Фарбовані"
                                            class="p-2.5 rounded-full border-max-soft checked:bg-max-soft disabled:opacity-50">
                                    </div>
                                    <label for="hair-options-2"
                                        class="flex flex-col self-center w-full text-sm ms-3 text-max-dark">
                                        Фарбовані
                                        <span class="text-xs lg:hidden">some text</span>
                                    </label>
                                </div>
                            </li>

                            <li
                                class="inline-flex items-center w-full gap-x-2.5 py-3 px-4 text-sm font-medium transition hover:bg-max-soft/40 bg-max-soft/20 border border-max-soft/30 border-t-0 lg:border-t text-max-dark -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg sm:-ms-px sm:mt-0 sm:first:rounded-se-none sm:first:rounded-es-lg sm:last:rounded-es-none sm:last:rounded-se-lg">
                                <div class="relative flex items-start w-full">
                                    <div class="flex items-center self-center h-6">
                                        <input id="hair-options-3" wire:model="order.hair_options" type="checkbox"
                                            value="З сивиною"
                                            class="p-2.5 rounded-full border-max-soft checked:bg-max-soft disabled:opacity-50">
                                    </div>
                                    <label for="hair-options-3"
                                        class="flex flex-col self-center w-full text-sm ms-3 text-max-dark">
                                        З сивиною
                                        <span class="text-xs lg:hidden">some text</span>
                                    </label>
                                </div>
                            </li>
                        </ul>
                    </div>
                </x-stepper.content>
                {{-- End Parameters Content --}}

                <!-- Person Content -->
                <x-stepper.content step='3' style="display: none">

                    <livewire:order.photos :order="$order" />

                </x-stepper.content>
                {{-- End Photos Content --}}

                <!-- Description Content -->
                <x-stepper.content step='4' style="display: none">
                    <x-alert>
                        Можете вказати будь-яку додаткову інформацію, яку вважаєте важливою, для майстра.
                    </x-alert>
                    <x-form.textarea label="Додатковий опис" rows="12" name="order.description"
                        maxlength="1000" />
                </x-stepper.content>
                <!-- End Description Content -->

                <!-- Check Content -->
                <x-stepper.content step='5' style="display: none">
                    <div class="space-y-2">
                        <div class="text-sm font-semibold text-center uppercase text-max-soft">
                            Перевірка заповнених даних
                        </div>

                        <div class="w-full">
                            <span class="block text-sm font-bold text-center text-max-dark"
                                x-text="$wire.order.goal"></span>
                        </div>

                        <div class="grid grid-cols-2 gap-2">
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

                        <div class="grid grid-cols-3 gap-2">
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

                        <div class="grid grid-cols-1 gap-2">
                            <div class="flex flex-col text-sm">
                                <span class="font-bold">Колір:</span>
                                <span class="font-normal"
                                    x-bind:class="{ 'italic text-gray-500': !$wire.order.color }"
                                    x-text="$wire.order.color ? $wire.order.color + 'р.' : 'не вказано'"></>
                            </div>

                            <div class="flex flex-col text-sm">
                                <span class="font-bold">Опції:</span>
                                <span class="font-normal"
                                    x-text="$wire.order.hair_options ? $wire.order.hair_options : 'Не зразані, не фарбовані, без сивини'"></span>
                            </div>

                            <div class="flex flex-col text-sm">
                                <div class="flex justify-between">
                                    <span class="font-bold">Додатковий опис:</span>
                                    <x-lucide-maximize x-show="$wire.order.description"
                                        @click="descriptionFull=!descriptionFull" class="w-4 h-4 cursor-pointer" />
                                </div>
                                <span class="font-normal line-clamp-1"
                                    x-bind:class="{ 'italic text-gray-500': !$wire.order.description }"
                                    x-text="$wire.order.description ? $wire.order.description : 'не вказано'"></span>
                                <div x-show="descriptionFull" x-transition.duration.500ms
                                    class="absolute top-0 z-20 w-full h-full rounded-lg start-0 bg-max-light"></div>
                                <div x-show="descriptionFull" x-transition.duration.500ms
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
                                        <x-lucide-minimize x-on:click="descriptionFull=!descriptionFull"
                                            class="absolute w-5 h-5 cursor-pointer right-5 bottom-5" />
                                    </div>
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
                </x-stepper.content>
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
        <x-modal id="rules-check-document">
            <x-modal.header>
                <x-lucide-file-check class="inline-flex w-5 h-5 -mt-1 text-max-dark" />
                Правила заявки
            </x-modal.header>

            <x-modal.body>
                <p>
                    <x-lucide-file-text class="h-14 w-14 float-start me-2" />
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
            </x-modal.body>

            <x-modal.footer class="bg-red-500">
                <p class="text-xs font-normal leading-4 text-white">
                    МИ НЕ НАДАЄМО ВАШІ КОНТАКТНІ ДАНІ ІНШИМ ОСОБАМ ТА НЕ РОЗСИЛАЄМО СПАМ!
                    НЕ НАМАГАЙТЕСЯ ОБДУРИТИ ОЦІНЮВАЧА, ВИКОРИСТОВУЮЧИ ПРИЙОМИ, ЩОБ ПОЛІПШИТИ
                    ЯКІСТЬ ВОЛОССЯ, АБО РОЗТЯГУВАТИ ПАСМО ЩОБ ВІЗУАЛЬНО ЗБІЛЬШИТИ ДОВЖИНУ. НАШ
                    ФАХІВЕЦЬ ОБОВ'ЯЗКОВО РОЗПІЗНАЄ ОБМАН.
                </p>
            </x-modal.footer>
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
        Livewire.hook('component.init', () => {

            HSStepper.autoInit();
            HSSelect.autoInit();
            HSOverlay.autoInit();

            const goalSelect = HSSelect.getInstance($wire.el.querySelector('#goals'));
            const colorSelect = HSSelect.getInstance($wire.el.querySelector('#colors'));

            goalSelect.on('change', value => $wire.set('order.goal', value));
            colorSelect.on('change', value => $wire.set('order.color', value));
        });
    </script>
@endscript
