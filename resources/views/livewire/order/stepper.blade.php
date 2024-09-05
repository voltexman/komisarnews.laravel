<!-- Stepper -->
<x-stepper x-data="stepper" x-cloak>
    {{-- Success... --}}
    @session('number')
        <div class="absolute top-0 left-0 rounded-lg size-full start-0 bg-max-light">
            <div class="flex flex-col items-stretch justify-center h-full text-max-soft" role="status">
                <div class="self-center text-center">
                    <img src="{{ asset('images/icons/order-check.svg') }}" class="mx-auto mb-5 size-32">
                    <p class="m-0">Заявка успішно надіслана</p>
                    <p class="m-0">Очікуйте відповіді майстра</p>
                    <div class="mt-5 text-xl font-bold drop-shadow-lg">#{{ session('number') }}</div>
                    <x-button type="button" color='light' class="mt-5" wire:click='$refresh' wire:target.except='save'
                        wire:loading.attr='disabled'>Нова заявка
                        <x-lucide-rotate-ccw class="inline-block size-4 ms-1" wire:loading.remove />
                        <x-lucide-refresh-cw class="inline-block size-4 ms-1 animate-spin" wire:loading />
                    </x-button>
                </div>
            </div>
        </div>
    @else
        <form wire:submit="save" x-data="{
            descriptionFull: false,
            rulesConfirm: false,
        }">

            <div class="mb-5">
                <span class="block text-lg font-medium text-center uppercase text-max-dark">
                    Оцінка та продаж волосся
                </span>
            </div>

            <x-stepper.navigation>
                <x-stepper.navigation.item step='order.person' icon='file-text' label='Заявка' />
                <x-stepper.navigation.item step='order.options' icon='swatch-book' label='Опції' />
                <x-stepper.navigation.item step='order.photos' icon='camera' label='Фото' />
                <x-stepper.navigation.item step='order.description' icon='message-circle-more' label='Опис' />
                <x-stepper.navigation.item step='order.check' icon='file-check' label='Дані' />
            </x-stepper.navigation>

            <div class="flex flex-col justify-between h-[450px]">
                <x-stepper.content step="1">
                    <div class="flex flex-col w-full gap-y-5">
                        <x-form.select :label="$order->goal ? $order->goal : 'Вкажіть ціль заявки'">
                            @foreach (App\Enums\Order\Goals::cases() as $goal)
                                <x-form.select.item wire:click="$set('order.goal', '{{ $goal->getLabel() }}')"
                                    icon="{{ $goal->getIcon() }}">
                                    <x-slot:label>
                                        {{ $goal->getLabel() }}
                                    </x-slot>
                                    <x-slot:description>
                                        {{ $goal->getDescription() }}
                                    </x-slot>
                                </x-form.select.item>
                            @endforeach
                        </x-form.select>

                        <x-form.input label="Ваше ім'я" icon="user" maxlength="40" name="order.name" />

                        <x-form.input label="Місто" icon="map-pin" maxlength="30" name="order.city" required />

                        <x-form.input label="Електронна пошта" icon="mail" maxlength="40" name="order.email" />

                        <x-form.input label="Номер телефону" icon="phone" maxlength="15" name="order.phone" required />
                    </div>

                    {{-- <livewire:is :component="$step" :$order :key="$step" /> --}}
                </x-stepper.content>

                <x-stepper.content step="2">
                    <x-form.select label="Вкажіть колір волосся" id="colors">
                        @foreach (App\Enums\Order\Colors::cases() as $color)
                            <option value="{{ $color->value }}">
                                {{ $color->getLabel() }}
                            </option>
                        @endforeach
                    </x-form.select>

                    <div>
                        <p class="hidden text-xs leading-4 lg:inline-block text-max-dark/80">
                            <x-lucide-info class="inline-block size-3 -mt-0.5" />
                            Бажано вказати якомога більше подробиць
                        </p>
                        <div class="flex justify-between gap-x-4">

                            <!-- Input Number -->
                            <div class="border rounded-lg bg-max-soft/20 border-max-soft/30">
                                <div class="flex items-center justify-between w-full gap-x-1">
                                    <div class="relative px-3 py-2 grow">
                                        <span class="block text-xs text-max-dark line-clamp-1">Вага (гр)</span>
                                        <input type="text" wire:model='order.hair_weight' placeholder="0"
                                            class="w-full p-0 bg-transparent border-0 weight-input text-max-dark focus:ring-0 placeholder:text-sm placeholder:text-max-soft/50"
                                            aria-label="Вага">
                                    </div>
                                </div>
                            </div>
                            <!-- End Input Number -->

                            <!-- Input Number -->
                            <div class="border rounded-lg bg-max-soft/20 border-max-soft/30" data-hs-input-number>
                                <div class="flex items-center justify-between w-full gap-x-1">
                                    <div class="relative px-3 py-2 grow">
                                        <span class="text-xs text-max-dark line-clamp-1">Довжина (мм)</span>
                                        <div class="absolute text-lg top-2 right-2">
                                            <span class="block bg-red-500 h-1.5 w-1.5 rounded-full"></span>
                                        </div>
                                        <input type="text" wire:model.blur='order.hair_length' placeholder="0"
                                            class="w-full p-0 bg-transparent border-0 length-input text-max-dark focus:ring-0 placeholder:text-sm placeholder:text-max-soft/50"
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
                                            class="w-full p-0 bg-transparent border-0 age-input text-max-dark focus:ring-0 placeholder:text-sm placeholder:text-max-soft/50"
                                            aria-label="Вік">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <p class="text-xs text-max-dark/80">
                            <x-lucide-info class="inline-block size-3 -mt-0.5" />
                            Вкажіть особливості волосся для оцінки
                        </p>
                        <ul
                            class="flex flex-col justify-between border rounded-lg lg:rounded-t-lg lg:rounded-b-none bg-max-soft/30 sm:flex-row border-max-soft/50">
                            <li
                                class="inline-flex items-center w-full gap-x-2.5 py-2 px-4 lg:py-4 text-sm font-medium lg:transition lg:hover:bg-max-soft/40 lg:border-e border-max-soft/50 text-max-dark -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg sm:-ms-px sm:mt-0 sm:first:rounded-se-none sm:first:rounded-tl-lg sm:last:rounded-es-none sm:last:rounded-se-lg">
                                <div class="relative flex items-start w-full">
                                    <div class="flex items-center self-center h-6">
                                        {{-- <input id="hair-options-1" wire:model="order.hair_options" type="checkbox"
                        value="Зрізане"
                        class="p-2.5 rounded-full border-max-soft checked:bg-max-soft text-max-dark focus:ring-max-dark disabled:opacity-50"> --}}
                                    </div>
                                    <label for="hair-options-1"
                                        class="flex flex-col self-center w-full text-sm font-semibold ms-3 text-max-dark">Зрізане
                                        <span class="-mt-1 text-xs text-max-dark/80 lg:hidden">
                                            волосся наразі зрізане
                                        </span>
                                    </label>
                                </div>
                            </li>

                            <li
                                class="inline-flex items-center w-full gap-x-2.5 py-2 px-4 lg:py-4 text-sm font-medium border-t lg:transition lg:hover:bg-max-soft/40 lg:border-e border-max-soft/50 lg:border-t-0 text-max-dark -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg sm:-ms-px sm:mt-0 sm:first:rounded-se-none sm:first:rounded-es-lg sm:last:rounded-es-none sm:last:rounded-se-lg">
                                <div class="relative flex items-start w-full">
                                    <div class="flex items-center self-center h-6">
                                        {{-- <input id="hair-options-2" wire:model="order.hair_options" type="checkbox"
                        value="Фарбоване"
                        class="p-2.5 rounded-full border-max-soft checked:bg-max-soft text-max-dark focus:ring-max-dark disabled:opacity-50"> --}}
                                    </div>
                                    <label for="hair-options-2"
                                        class="flex flex-col self-center w-full text-sm font-semibold ms-3 text-max-dark">Фарбоване
                                        <span class="-mt-1 text-xs text-max-dark/80 lg:hidden">
                                            волосся вже фарбоване
                                        </span>
                                    </label>
                                </div>
                            </li>

                            <li
                                class="inline-flex items-center w-full gap-x-2.5 py-2 px-4 lg:py-4 text-sm font-medium border-t lg:rounded-tr-lg lg:cursor-pointer lg:transition lg:hover:bg-max-soft/40 border-max-soft/50 lg:border-t-0 text-max-dark -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg sm:-ms-px sm:mt-0 sm:first:rounded-se-none sm:first:rounded-es-lg sm:last:rounded-es-none sm:last:rounded-se-lg">
                                <div class="relative flex items-start w-full">
                                    <div class="flex items-center self-center h-6">
                                        {{-- <input id="hair-options-3" wire:model="order.hair_options" type="checkbox"
                        value="З сивиною"
                        class="p-2.5 rounded-full border-max-soft checked:bg-max-soft text-max-dark focus:ring-max-dark disabled:opacity-50"> --}}
                                    </div>
                                    <label for="hair-options-3"
                                        class="flex flex-col self-center w-full text-sm font-semibold ms-3 text-max-dark lg:cursor-pointer">
                                        З сивиною
                                        <span class="-mt-1 text-xs text-max-dark/80 lg:hidden">
                                            частково має сивину
                                        </span>
                                    </label>
                                </div>
                            </li>

                            <li
                                class="inline-flex items-center w-full lg:hidden gap-x-2.5 py-2 px-4 lg:py-4 text-sm font-medium border-t border-max-soft/50 lg:border-t text-max-dark -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg sm:-ms-px sm:mt-0 sm:first:rounded-se-none sm:first:rounded-es-lg sm:last:rounded-es-none sm:last:rounded-se-lg">
                                <div class="hs-tooltip [--trigger:hover] w-full">
                                    <div class="flex hs-tooltip-toggle">
                                        <x-lucide-message-circle-more class="size-6 text-max-soft" />
                                        <div class="flex flex-col ms-3 hs-tooltip-toggle">
                                            <span class="font-semibold text-max-dark">Інші уточнення</span>
                                            <span class="-mt-1 text-xs text-max-dark/80 lg:hidden">
                                                власні особливості
                                            </span>
                                        </div>
                                        <div class="absolute z-10 invisible hidden w-full max-w-xs transition-opacity border rounded-lg shadow-lg opacity-0 shadow-max-dark/50 bg-max-light border-max-soft/30 hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible text-start"
                                            role="tooltip">
                                            <div class="px-4 py-3 text-sm">
                                                <x-form.textarea label="Інші уточнення" rows="6"
                                                    name="order.description" maxlength="1000" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>

                        <div class="hidden lg:block">
                            <x-form.textarea label="Додаткові уточнення" color='soft' name="order.description"
                                class="border-t-0 rounded-t-none bg-max-soft/20 focus:ring-0" maxlength="1000"
                                rows="4" />
                        </div>
                    </div>
                </x-stepper.content>

                <x-stepper.content step="3">
                    <livewire:order.photos :$order />
                </x-stepper.content>

                <!-- Button Group -->
                <div class="flex justify-between gap-x-2">
                    <x-button x-show="step !== 1" @click="preview">
                        <div wire:loading wire:target='preview'>
                            <span class="text-xs text-max-light/80">Перевірка...</span>
                            <x-lucide-loader-2 class="inline-block size-4 ms-1 animate-spin" />
                        </div>
                        <div wire:loading.remove wire:target='preview' class="flex">
                            <x-lucide-arrow-left class="inline-block size-5 me-2" />
                            <span class="text-sm text-max-light">Назад</span>
                        </div>
                    </x-button>

                    {{-- Модальне вікно правил --}}
                    <div class="me-auto">
                        <x-modal>
                            <x-slot:open>
                                <x-button>
                                    <x-lucide-info class="size-5" />
                                </x-button>
                            </x-slot>

                            <x-slot:header>
                                <h3 class="font-semibold tracking-wide text-max-light drop-shadow-md">
                                    Правила заявки
                                </h3>
                            </x-slot>

                            <x-slot:body>
                                <x-scrollbar class="h-52">
                                    <p class="text-sm font-medium"><x-lucide-file-text class="size-14 float-start me-2" />
                                        Заповніть всі необхіні поля та надішліть нам замовлення. Бажано вказати
                                        колір, вагу і довжину Вашого волосся. Електронна пошта та номер телефону нам
                                        необхідний для зворотнього зв`язку з Вами та для того щоб повідомити Вас про
                                        купівлю волосся і його вартість.
                                    </p>
                                    <p class="text-sm font-medium">Спочатку Ви отримаєте сповіщення про те, що наш фахівець
                                        ознайомлюється з замовленням, після чого Вам надійде другий лист з інформацією про
                                        вартість та іншими деталями. Зазвичай це займає не більше декількох годин після
                                        відправлення замовлення.
                                    </p>
                                    <p class="m-0 text-sm font-medium">В полі "Ваше повідомлення" Ви можете вказати
                                        будь-яку
                                        іншу, на Вашу думку, важливу інформацію стосовно волосся. Наприклад, структуру
                                        волосся, стан зрізу: свіжа рівна стрижка або просто укладене волосся або шиньйон.
                                        Вкажіть якомога більше інформації, важливі всі деталі.</p>
                                </x-scrollbar>
                            </x-slot>

                            <x-slot:footer class="bg-red/80">
                                <div class="text-xs font-normal leading-4 text-white">
                                    МИ НЕ НАДАЄМО ВАШІ КОНТАКТНІ ДАНІ ІНШИМ ОСОБАМ ТА НЕ РОЗСИЛАЄМО СПАМ!
                                    НЕ НАМАГАЙТЕСЯ ОБДУРИТИ ОЦІНЮВАЧА, ВИКОРИСТОВУЮЧИ ПРИЙОМИ, ЩОБ ПОЛІПШИТИ
                                    ЯКІСТЬ ВОЛОССЯ, АБО РОЗТЯГУВАТИ ПАСМО ЩОБ ВІЗУАЛЬНО ЗБІЛЬШИТИ ДОВЖИНУ. НАШ
                                    ФАХІВЕЦЬ ОБОВ'ЯЗКОВО РОЗПІЗНАЄ ОБМАН.
                                </div>
                            </x-slot>
                        </x-modal>
                    </div>

                    <x-button x-show="$wire.step !== 'order.check'" @click="next">
                        <div wire:loading wire:target='next'>
                            <span class="text-xs text-max-light/80">Перевірка...</span>
                            <x-lucide-loader-2 class="inline-block size-4 ms-1 animate-spin" />
                        </div>
                        <div wire:loading.remove wire:target='next' class="flex">
                            <span class="text-sm text-max-light">Далі</span>
                            <x-lucide-arrow-right class="inline-block size-5 ms-2" />
                        </div>
                    </x-button>
                    <x-button type="submit" x-show="$wire.step === 'order.check'"
                        x-bind:disabled="!$wire.order.city || !$wire.order.phone || !$wire.order.hair_length || !rulesConfirm">
                        Відправити <x-lucide-send class="inline-block size-4 ms-1" />
                    </x-button>
                </div>
                <!-- End Button Group -->
            </div>

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
        </form>
    @endsession
</x-stepper>
<!-- End Stepper -->

@script
    <script>
        Alpine.data('stepper', () => ({
            step: 3,
            next() {
                this.step > 5 ? null : this.step = this.step + 1;
            },
            preview() {
                this.step < 2 ? null : this.step = this.step - 1;
            }
        }));
    </script>
@endscript
