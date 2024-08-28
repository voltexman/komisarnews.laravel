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
                <!-- Stepper Content -->
                <div class="flex flex-col mt-5">
                    <livewire:is :component="$step" :$order :key="$step" />
                </div>
                <!-- End Stepper Content -->

                <!-- Button Group -->
                <div class="flex justify-between gap-x-2">
                    <x-button x-show="$wire.step !== 'order.person'" wire:click="preview">
                        <div wire:loading wire:target='preview'>
                            <span class="text-xs text-max-light/80">Перевірка...</span>
                            <x-lucide-loader-2 class="inline-block size-4 ms-1 animate-spin" />
                        </div>
                        <div wire:loading.remove wire:target='preview'>
                            <span class="text-sm text-max-light">Назад</span>
                            <x-lucide-arrow-left class="inline-block size-4 ms-1" />
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

                    <x-button x-show="$wire.step !== 'order.check'" wire:click="next">
                        <div wire:loading wire:target='next'>
                            <span class="text-xs text-max-light/80">Перевірка...</span>
                            <x-lucide-loader-2 class="inline-block size-4 ms-1 animate-spin" />
                        </div>
                        <div wire:loading.remove wire:target='next'>
                            <span class="text-sm text-max-light">Далі</span>
                            <x-lucide-arrow-right class="inline-block size-4 ms-1" />
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

{{-- @script
    <script>
        Alpine.data('stepper', () => ({
            step: 1,
            next() {
                this.step > 5 ? null : this.step = this.step + 1;
            },
            preview() {
                this.step < 2 ? null : this.step = this.step - 1;
            }
        }));
    </script>
@endscript --}}
