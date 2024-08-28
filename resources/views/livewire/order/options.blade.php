<div>
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
                                <x-form.textarea label="Інші уточнення" rows="6" name="order.description"
                                    maxlength="1000" />
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>

        <div class="hidden lg:block">
            <x-form.textarea label="Додаткові уточнення" color='soft' name="order.description"
                class="border-t-0 rounded-t-none bg-max-soft/20 focus:ring-0" maxlength="1000" rows="4" />
        </div>
    </div>
</div>
