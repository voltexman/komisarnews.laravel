<!-- Stepper -->
<div class="relative bg-max-light h-[575px] p-5 rounded-lg shadow-lg overflowhidden"
    data-hs-stepper='{
    "currentIndex": 2
  }'>

    <form wire:submit="save" x-data="{ goal: '', name: '', city: '', email: '', phone: '', hair_weight: '', hair_length: '', age: '', color: '', description: '', descriptionFull: false }">

        <div class="text-lg text-center text-max-soft uppercase font-semibold mb-5">Оцінка та продаж волосся</div>

        <!-- Stepper Nav -->
        <ul class="relative flex flex-row gap-x-2 mx-auto max-w-sm justify-between">

            <!-- Item -->
            <li class="md:shrink md:basis-0 flex-1 group flex gap-x-2 md:flex flex-col items-center justify-center"
                data-hs-stepper-nav-item='{
                    "index": 1
                }'>
                <div
                    class="relative min-w-[28px] min-h-[28px] flex flex-col items-center md:w-full md:inline-flex md:flex-wrap md:flex-row text-xs align-middl">
                    <span
                        class="w-8 h-8 flex mx-auto justify-center items-center flex-shrink-0 bg-white font-medium text-gray-800 rounded-full hs-stepper-active:bg-max-soft/85 hs-stepper-active:animate-bounce hs-stepper-success:bg-max-soft">
                        <x-lucide-file-text
                            class="h-4 w-4 text-max-soft hs-stepper-active:text-max-light hs-stepper-success:hidden" />
                        <x-lucide-check class="h-4 w-4 hidden text-max-light hs-stepper-success:block" />
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

            <!-- Item -->
            <li class="md:shrink md:basis-0 flex-1 group flex gap-x-2 md:flex flex-col items-center justify-center"
                data-hs-stepper-nav-item='{
                    "index": 2
                }'>
                <div
                    class="relative min-w-[28px] min-h-[28px] flex flex-col items-center md:w-full md:inline-flex md:flex-wrap md:flex-row text-xs align-middl">
                    <span
                        class="w-8 h-8 flex mx-auto justify-center items-center flex-shrink-0 bg-white font-medium text-gray-800 rounded-full hs-stepper-active:bg-max-soft/85 hs-stepper-active:animate-bounce hs-stepper-success:bg-max-soft">
                        <x-lucide-camera
                            class="h-4 w-4 text-max-soft hs-stepper-active:text-max-light hs-stepper-success:hidden" />
                        <x-lucide-check class="h-4 w-4 hidden text-max-light hs-stepper-success:block" />
                    </span>
                    {{-- <div
                        class="mt-2 w-px h-full md:mt-0 md:ms-2 md:w-full md:h-px md:flex-1 bg-gray-200 group-last:hidden">
                    </div> --}}
                    <div
                        class="absolute top-1/2 left-1/2 w-[50px] translate-x-1/2 md:h-px bg-max-soft/20 group-last:hidden">
                    </div>
                </div>
                <div class="grow md:grow-0 mt-1">
                    <span class="block text-sm font-semibold text-gray-600">
                        Фото
                    </span>
                </div>
            </li>
            <!-- End Item -->

            <!-- Item -->
            <li class="md:shrink md:basis-0 flex-1 group flex gap-x-2 md:flex flex-col items-center justify-center"
                data-hs-stepper-nav-item='{
                    "index": 3
                }'>
                <div
                    class="min-w-[28px] min-h-[28px] flex flex-col items-center md:w-full md:inline-flex md:flex-wrap md:flex-row text-xs align-middle">
                    <span
                        class="w-8 h-8 flex mx-auto justify-center items-center flex-shrink-0 bg-white font-medium text-gray-800 rounded-full hs-stepper-active:bg-max-soft/85 hs-stepper-active:animate-bounce hs-stepper-success:bg-max-soft">
                        <x-lucide-message-circle
                            class="h-4 w-4 text-max-soft hs-stepper-active:text-max-light hs-stepper-success:hidden" />
                        <x-lucide-check class="h-4 w-4 hidden text-max-light hs-stepper-success:block" />
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

            <!-- Item -->
            <li class="md:shrink md:basis-0 flex-1 group flex gap-x-2 md:flex flex-col items-center justify-center"
                data-hs-stepper-nav-item='{
                    "index": 4
                }'>
                <div
                    class="min-w-[28px] min-h-[28px] flex flex-col items-center md:w-full md:inline-flex md:flex-wrap md:flex-row text-xs align-middl">
                    <span
                        class="w-8 h-8 flex mx-auto justify-center items-center flex-shrink-0 bg-white font-medium text-gray-800 rounded-full hs-stepper-active:bg-max-soft/85 hs-stepper-active:animate-bounce hs-stepper-success:bg-max-soft">
                        <x-lucide-list-checks
                            class="h-4 w-4 text-max-soft hs-stepper-active:text-max-light hs-stepper-success:hidden" />
                        <x-lucide-check class="h-4 w-4 hidden text-max-light hs-stepper-success:block" />
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
                <!-- First Content -->
                <div data-hs-stepper-content-item='{
                    "index": 1,
                    "isCompleted": true
                }'
                    x-transition-duration.500ms class="active">
                    <div class="flex justify-center items-center">
                        <!-- Floating Input -->
                        <div class="flex flex-col gap-y-5 w-full">
                            <!-- Select -->
                            <div class="relative">
                                <select x-model="goal"
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
                                    <option value="Хочу оцінити вартість" selected
                                        data-hs-select-option='{
                                            "description": "Майстер оцінить та повідомить вартість.",
                                            "icon": "<img class=\"inline-block w-6 h-6 rounded-full\" src=\"/images/icons/order-money.svg\" />"
                                        }'>
                                        Хочу оцінити вартість</option>

                                    <option value="Хочу продати волосся"
                                        data-hs-select-option='{
                                            "description": "Надішліть волосся та отримайте гроші.",
                                            "icon": "<img class=\"inline-block w-6 h-6 rounded-full\" src=\"/images/icons/order.svg\" />"
                                        }'>
                                        Хочу продати волосся</option>
                                </select>

                                <div class="absolute top-1/2 end-3 -translate-y-1/2">
                                    <svg class="flex-shrink-0 w-3.5 h-3.5 text-gray-500"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path d="m7 15 5 5 5-5" />
                                        <path d="m7 9 5-5 5 5" />
                                    </svg>
                                </div>
                            </div>
                            <!-- End Select -->

                            <div class="flex flex-row w-full gap-4">

                                <div class="relative w-1/2">
                                    <x-input type="text" label="Ваше ім'я" maxlength="40" x-model="name"
                                        class="bg-max-soft/20 border border-max-soft/20" />
                                </div>

                                <div class="relative w-1/2">
                                    <x-input type="text" label="Місто" maxlength="30" x-model="city" required
                                        class="bg-max-soft/20 border border-max-soft/20" />
                                </div>

                            </div>
                            <div class="flex flex-row w-full gap-4">

                                <div class="relative w-1/2">
                                    <x-input type="text" label="Електронна пошта" maxlength="40" x-model="email"
                                        class="bg-max-soft/20 border border-max-soft/20" />
                                </div>

                                <div class="relative w-1/2">
                                    <x-input type="text" label="Номер телефону" maxlength="15" x-model="phone"
                                        required class="bg-max-soft/20 border border-max-soft/20" />
                                </div>
                            </div>
                            <!-- Select -->
                            <div class="relative">
                                <select x-model="color" on:change=""
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
                                    <svg class="flex-shrink-0 w-3.5 h-3.5 text-gray-500"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path d="m7 15 5 5 5-5" />
                                        <path d="m7 9 5-5 5 5" />
                                    </svg>
                                </div>
                            </div>
                            <!-- End Select -->
                            <div class="flex justify-between gap-x-4">
                                <!-- Input Number -->
                                <div class="bg-max-soft/5 border border-max-soft/30 rounded-lg" data-hs-input-number>
                                    <div class="w-full flex justify-between items-center gap-x-1">
                                        <div class="grow py-2 px-3">
                                            <span class="block text-xs text-gray-500">
                                                Вага
                                            </span>
                                            <input
                                                class="w-full p-0 bg-transparent border-0 text-gray-800 focus:ring-0"
                                                type="text" value="1" x-model="hair_weight"
                                                data-hs-input-number-input>
                                        </div>
                                        <div
                                            class="flex flex-col -gap-y-px divide-y divide-max-soft/30 border-s border-max-soft/30">
                                            <button type="button"
                                                class="w-7 h-7 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-se-lg bg-max-soft/50 text-max-dark hover:bg-max-soft/80 transition disabled:opacity-50 disabled:pointer-events-none"
                                                data-hs-input-number-decrement>
                                                <svg class="flex-shrink-0 w-3.5 h-3.5"
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <path d="M5 12h14" />
                                                </svg>
                                            </button>
                                            <button type="button"
                                                class="w-7 h-7 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-ee-lg bg-max-soft/50 text-max-dark hover:bg-max-soft/80 transition disabled:opacity-50 disabled:pointer-events-none"
                                                data-hs-input-number-increment>
                                                <svg class="flex-shrink-0 w-3.5 h-3.5"
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <path d="M5 12h14" />
                                                    <path d="M12 5v14" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Input Number -->
                                <!-- Input Number -->
                                <div class="bg-max-soft/5 border border-max-soft/30 rounded-lg" data-hs-input-number>
                                    <div class="w-full flex justify-between items-center gap-x-1">
                                        <div class="grow py-2 px-3 relative">
                                            <span class="block text-xs text-gray-500">
                                                Довжина
                                            </span>
                                            <span class="absolute top-0 right-1 text-red-500 text-lg">*</span>
                                            <input
                                                class="w-full p-0 bg-transparent border-0 text-gray-800 focus:ring-0"
                                                type="text" value="1" x-model="hair_length"
                                                data-hs-input-number-input>
                                        </div>
                                        <div
                                            class="flex flex-col -gap-y-px divide-y divide-max-soft/30 border-s border-max-soft/30">
                                            <button type="button"
                                                class="w-7 h-7 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-se-lg bg-max-soft/50 text-max-dark hover:bg-max-soft/80 transition disabled:opacity-50 disabled:pointer-events-none"
                                                data-hs-input-number-decrement>
                                                <svg class="flex-shrink-0 w-3.5 h-3.5"
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <path d="M5 12h14" />
                                                </svg>
                                            </button>
                                            <button type="button"
                                                class="w-7 h-7 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-ee-lg bg-max-soft/50 text-max-dark hover:bg-max-soft/80 transition disabled:opacity-50 disabled:pointer-events-none"
                                                data-hs-input-number-increment>
                                                <svg class="flex-shrink-0 w-3.5 h-3.5"
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <path d="M5 12h14" />
                                                    <path d="M12 5v14" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Input Number -->
                                <!-- Input Number -->
                                <div class="bg-max-soft/5 border border-max-soft/30 rounded-lg" data-hs-input-number>
                                    <div class="w-full flex justify-between items-center gap-x-1">
                                        <div class="grow py-2 px-3">
                                            <span class="block text-xs text-gray-500">
                                                Вік
                                            </span>
                                            <input
                                                class="w-full p-0 bg-transparent border-0 text-gray-800 focus:ring-0"
                                                type="text" value="1" x-model="age"
                                                data-hs-input-number-input>
                                        </div>
                                        <div
                                            class="flex flex-col -gap-y-px divide-y divide-max-soft/30 border-s border-max-soft/30">
                                            <button type="button"
                                                class="w-7 h-7 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-se-lg bg-max-soft/50 text-max-dark hover:bg-max-soft/80 transition disabled:opacity-50 disabled:pointer-events-none"
                                                data-hs-input-number-decrement>
                                                <svg class="flex-shrink-0 w-3.5 h-3.5"
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <path d="M5 12h14" />
                                                </svg>
                                            </button>
                                            <button type="button"
                                                class="w-7 h-7 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-ee-lg bg-max-soft/50 text-max-dark hover:bg-max-soft/80 transition disabled:opacity-50 disabled:pointer-events-none"
                                                data-hs-input-number-increment>
                                                <svg class="flex-shrink-0 w-3.5 h-3.5"
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <path d="M5 12h14" />
                                                    <path d="M12 5v14" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Input Number -->
                            </div>
                        </div>
                        <!-- End Floating Input -->
                    </div>
                </div>
                <!-- End First Content -->

                <!-- First Content -->
                <div data-hs-stepper-content-item='{
                    "index": 2
                }'
                    x-transition-duration.500ms style="display: none;">
                    <div x-data="{ dropingFile: false }">
                        <div x-bind:class="dropingFile && 'bg-max-soft/10 border-gray-400'"
                            x-on:drop="dropingFile = false" x-on:dragover.prevent="dropingFile = true"
                            x-on:dragleave.prevent="dropingFile = false"
                            class="px-4 py-9 bg-gray-50 flex justify-center border border-dashed border-gray-400/70 rounded-xl relative overflow-hidden transition-all">
                            <div class="w-full">
                                <x-lucide-image-plus
                                    class="h-20 w-20 absolute opacity-10 text-sky-400 -top-3 -left-3 rotate-[35deg]" />
                                <x-lucide-camera
                                    class="h-12 w-12 absolute opacity-10 text-indigo-300 top-1 left-24 -rotate-[30deg]" />
                                <x-lucide-image
                                    class="h-16 w-16 absolute opacity-10 text-purple-500 -top-3 right-3 rotate-[15deg]" />
                                <div class="w-full flex flex-row">
                                    <div class="w-1/3 items-center flex justify-center">
                                        <div class="relative border-2 border-max-soft p-3 rounded-full">
                                            <span
                                                class="animate-ping absolute inline-flex h-full w-full rounded-full bg-max-soft"></span>
                                            <x-lucide-upload-cloud class="h-8 w-8" />
                                        </div>
                                    </div>
                                    <div class="w-2/3 flex flex-col">
                                        {{-- <input type="file"
                                            class=" w-full text-sm text-slate-700
                                                file:mr-4 file:py-2 file:px-4
                                                file:rounded-full file:border-0
                                                file:text-sm file:font-semibold
                                                file:bg-max-soft/30 file:text-gray-600
                                                hover:file:bg-violet-100"
                                            wire:model="photos" multiple> --}}

                                        <input type="file" wire:model="order.photos">

                                        <span class="text-sm text-gray-500">або перетягніть сюди</span>
                                    </div>
                                </div>
                                <div
                                    class="absolute bottom-0.5 left-0 px-4 text-xs text-gray-400 flex justify-between w-full">
                                    <span class="flex"><x-lucide-scaling
                                            class="h-3.5 w-3.5 me-0.5" />1920x1080</span>
                                    <span class="flex"><x-lucide-image class="h-3.5 w-3.5 me-0.5" />JPG, PNG</span>
                                </div>
                            </div>
                        </div>

                        @if (!$order->photos)
                            <div
                                class="my-3.5 flex flex-row bg-max-soft/5 rounded-lg overflow-hidden border border-max-soft/10">
                                <div class="border-e bg-max-soft/20 border-max-soft/10 flex">
                                    <x-lucide-info class="h-4 w-4 mx-3 self-center" />
                                </div>
                                <div class="text-sm leading-4 text-gray-500 px-4 py-4 lg:py-4">
                                    <p class="mb-2">Додайте фотографії вашого волосся для<br>
                                        подальшої оцінки нашим спеціалістом</p>
                                    <p class="lg:mb-2">Намагайтесь обирати найвдаліші фото,<br>
                                        які краще відображають реальний стан волосся</p>
                                    <p class="hidden lg:block">Ви можете відредагувати фото натиснувши<br>
                                        На мініатюрах фото можуть виглядати інакше</p>
                                </div>
                            </div>
                        @endif

                        <!-- Popover -->
                        {{-- <div x-show="acceptedFiles" class="w-full flex justify-end mt-2">
                            <div class="hs-tooltip inline-block [--trigger:click]">
                                <div class="hs-tooltip-toggle block text-center">
                                    <x-lucide-info class="h-4 w-4" />
                                    <div class="p-2 text-xs textcenter text-max-dark/70 hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible hidden opacity-0 transition-opacity absolute invisible z-10 max-w-xs bg-white border border-gray-100 text-start rounded-lg shadow-md"
                                        role="tooltip">
                                        <p class="mb-2">Додайте фотографії вашого волосся для<br>
                                            подальшої оцінки нашим спеціалістом</p>
                                        <p class="mb-2">Намагайтесь обирати найвдаліші фото,<br>
                                            які краще відображають реальний стан волосся</p>
                                        <p>Ви можете відредагувати фото натиснувши<br>
                                            На мініатюрах фото можуть виглядати інакше</p>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        <!-- End Popover -->

                        <div wire:loading wire:target="order.photos">Uploading...</div>

                        @if ($order->photos)
                            @foreach ($order->photos as $photo)
                                <img src="{{ $photo->temporaryUrl() }}" class="w-1/4">
                            @endforeach
                        @endif

                        @error('photos.*')
                            <span class="error">{{ $message }}</span>
                        @enderror

                        {{-- <div x-show="!acceptedFiles" class="text-xs text-center mt-3 text-max-dark/70">
                            <p class="mb-2">Додайте фотографії вашого волосся для<br>
                                подальшої оцінки нашим спеціалістом</p>
                            <p class="mb-2">Намагайтесь обирати найвдаліші фото,<br>
                                які краще відображають реальний стан волосся</p>
                            <p>Ви можете відредагувати фото натиснувши<br>
                                На мініатюрах фото можуть виглядати інакше</p>
                        </div> --}}
                        <!-- Select -->
                        <div class="relative">
                            <select multiple
                                data-hs-select='{
                                "placeholder": "Вкажіть параметри...",
                                "toggleTag": "<button type=\"button\"></button>",
                                "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative flex text-nowrap w-full cursor-pointer bg-white border border-gray-200 rounded-lg text-start text-sm focus:border-blue-500 focus:ring-blue-500",
                                "dropdownClasses": "mt-2 z-50 w-full max-h-[300px] p-1 space-y-0.5 bg-white border border-gray-200 rounded-lg overflow-hidden overflow-y-auto",
                                "optionClasses": "py-2 px-4 w-full text-sm text-gray-800 cursor-pointer hover:bg-gray-100 rounded-lg focus:outline-none focus:bg-gray-100",
                                "mode": "tags",
                                "tagsClasses": "relative ps-0.5 pe-1 min-h-[46px] flex items-center flex-wrap text-nowrap w-full border border-gray-200 rounded-lg text-start text-sm focus:border-blue-500 focus:ring-blue-500",
                                "tagsItemTemplate": "<div class=\"flex flex-nowrap items-center relative z-10 bg-white border border-gray-200 rounded-full p-1 m-1\"><div class=\"h-6 w-6 me-1\" data-icon></div><div class=\"whitespace-nowrap\" data-title></div><div class=\"inline-flex flex-shrink-0 justify-center items-center h-5 w-5 ms-2 rounded-full text-gray-800 bg-gray-200 hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-400 text-sm cursor-pointer\" data-remove><svg class=\"flex-shrink-0 w-3 h-3\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"M18 6 6 18\"/><path d=\"m6 6 12 12\"/></svg></div></div>",
                                "tagsInputClasses": "absolute inset-0 w-full py-3 px-4 pe-9 flex-1 text-sm rounded-lg focus-visible:ring-0",
                                "optionTemplate": "<div class=\"flex items-center\"><div class=\"h-8 w-8 me-2\" data-icon></div><div><div class=\"text-sm font-semibold text-gray-800\" data-title></div><div class=\"text-xs text-gray-500\" data-description></div></div><div class=\"ms-auto\"><span class=\"hidden hs-selected:block\"><svg class=\"flex-shrink-0 w-4 h-4 text-blue-600\" xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" viewBox=\"0 0 16 16\"><path d=\"M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z\"/></svg></span></div></div>"
                            }'
                                class="hidden">
                                <option value="">Choose</option>
                                <option value="Зрізані"
                                    data-hs-select-option='{
                                    "description": "Волосся вже зрізане",
                                    "icon": "<img class=\"inline-block rounded-full\" src=\"https://images.unsplash.com/\" />"
                                }'>
                                    Зрізані</option>

                                <option value="Фарбовані"
                                    data-hs-select-option='{
                                    "description": "Фарбоване волосся",
                                    "icon": "<img class=\"inline-block rounded-full\" src=\"https://images.unsplash.com/\" />"
                                }'>
                                    Фарбовані</option>

                                <option value="З сивиною"
                                    data-hs-select-option='{
                                    "description": "Присутня сивина",
                                    "icon": "<img class=\"inline-block rounded-full\" src=\"https://images.unsplash.com/\" />"
                                }'>
                                    З сивиною</option>
                            </select>

                            <div class="absolute top-1/2 end-3 -translate-y-1/2">
                                <svg class="flex-shrink-0 w-3.5 h-3.5 text-gray-500"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="m7 15 5 5 5-5" />
                                    <path d="m7 9 5-5 5 5" />
                                </svg>
                            </div>
                        </div>
                        <!-- End Select -->
                    </div>
                </div>
                <!-- End First Content -->

                <!-- First Content -->
                <div data-hs-stepper-content-item='{
                    "index": 3
                }'
                    x-transition-duration.500ms style="display: none;">
                    <!-- Floating Textarea -->
                    <div class="mb-4 flex flex-row bg-max-soft/5 p-2 rounded-lg border border-max-soft/10">
                        <div class="border-e pe-2 flex">
                            <x-lucide-info class="h-4 w-4 self-center" />
                        </div>
                        <span class="text-sm leading-4 text-gray-600">Можете вказати будь-яку додаткову важливу
                            інформацію для майстра.</span>
                    </div>
                    <x-textarea label="Додатковий опис" rows="11"
                        class="bg-max-soft/20 border border-max-soft/20" x-model="description" maxlength="1000" />
                    <!-- End Floating Textarea -->
                </div>
                <!-- End First Content -->

                <!-- First Content -->
                <div data-hs-stepper-content-item='{
                    "index": 4,
                    "isFinal": true
                }'
                    x-transition-duration.500ms style="display: none;">
                    <div class="text-center text-sm font-semibold uppercase text-max-soft">
                        Перевірка заповнених даних
                    </div>

                    <div class="">
                        <span x-text="goal"></span>
                    </div>

                    <div class="grid grid-cols-2 gap-5 mt-4">
                        <div class="flex flex-col text-sm">
                            <span class="font-bold">Ваше ім'я:</span>
                            <span class="font-normal" x-text="name ? name : 'не вказано'"></span>
                        </div>

                        <div class="flex flex-col text-sm">
                            <span class="font-bold" x-bind:class="!city ? 'text-red-500' : 'text-gray-600'">
                                Місто:
                            </span>
                            <span class="font-normal" x-bind:class="!city ? 'text-red-500' : 'text-gray-600'"
                                x-text="city ? city : 'не вказано'"></span>
                        </div>

                        <div class="flex flex-col text-sm">
                            <span class="font-bold">Електронна пошта:</span>
                            <span class="font-normal" x-text="email ? email : 'не вказано'"></span>
                        </div>

                        <div class="flex flex-col text-sm">
                            <span class="font-bold" x-bind:class="!phone ? 'text-red-500' : 'text-gray-600'">
                                Номер телефону:
                            </span>
                            <span class="font-normal" x-bind:class="!phone ? 'text-red-500' : 'text-gray-600'"
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
                            <span class="font-bold" x-bind:class="!hair_length ? 'text-red-500' : 'text-gray-600'">
                                Довжина:
                            </span>
                            <span class="font-normal" x-bind:class="!hair_length ? 'text-red-500' : 'text-gray-600'"
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
                            class="absolute top-0 start-0 w-full h-full z-50 bg-max-light rounded-lg"></div>
                        <div x-show="descriptionFull" x-transition.duration.500ms
                            class="absolute top-0 left-0 h-full w-full p-5 z-50">
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
                <!-- End First Content -->
            </div>

            <!-- Button Group -->
            <div class="flex justify-between gap-x-2">
                <button type="button"
                    class="py-2 px-3 inline-flex items-center gap-x-1 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none"
                    data-hs-stepper-back-btn>
                    <x-lucide-chevron-left class="h-4 w-4 me-1" />
                    Назад
                </button>
                <button type="button"
                    class="py-2 px-3 inline-flex items-center me-auto gap-x-1 text-sm font-medium rounded-lg bg-max-soft text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none"
                    data-hs-overlay="#hs-modal-upgrade-to-pro">
                    <x-lucide-info class="h-5 w-5 text-max-light" />
                </button>
                <button type="button"
                    class="py-2 px-3 inline-flex items-center gap-x-1 text-sm font-semibold rounded-lg border border-transparent bg-max-soft text-max-light hover:bg-max-dark disabled:opacity-50 disabled:pointer-events-none"
                    data-hs-stepper-next-btn>
                    Далі
                    <x-lucide-chevron-right class="h-4 w-4 ms-1" />
                </button>
                <button type="submit"
                    class="py-2 px-3 inline-flex items-center gap-x-1 text-sm font-semibold rounded-lg border border-transparent bg-max-soft text-max-light hover:bg-max-dark disabled:opacity-50 disabled:pointer-events-none"
                    data-hs-stepper-finish-btn style="display: none;"
                    x-bind:disabled="!city || !phone || !hair_length">
                    Відправити
                    <x-lucide-send class="h-4 w-4 ms-1" />
                </button>
                <button type="reset"
                    class="py-2 px-3 inline-flex items-center gap-x-1 text-sm font-semibold rounded-lg border border-transparent bg-max-soft text-max-light hover:bg-max-dark disabled:opacity-50 disabled:pointer-events-none"
                    data-hs-stepper-reset-btn style="display: none;">
                    Нова заявка
                    <x-lucide-undo-2 class="h-4 w-4 ms-1" />
                </button>
            </div>
            <!-- End Button Group -->
        </div>
        <!-- End Stepper Content -->

        {{-- Loading... --}}
        <div wire:loading wire:target="save" class="absolute top-0 start-0 w-full h-full bg-white/80 rounded-lg">
        </div>

        <div wire:loading wire:target="save"
            class="absolute top-1/2 start-1/2 transform -translate-x-1/2 -translate-y-1/2">
            <div class="animate-spin inline-block w-14 h-14 border-[3px] border-current border-t-transparent text-max-soft rounded-full"
                role="status" aria-label="loading">
                <span class="sr-only">Loading...</span>
            </div>
        </div>

        {{-- Success... --}}
        @if (session('number'))
            <div class="absolute top-0 start-0 w-full h-full bg-max-light rounded-lg"></div>
            <div class="absolute top-0 left-0 h-full w-full">
                <div class="flex flex-col h-full justify-center items-stretch text-max-soft" role="status">
                    <div class="self-center text-center">
                        <x-lucide-smile class="h-20 w-20 text-max-soft mx-auto" />
                        <p class="leading-5 text-center mt-3">Заявка успішно надіслана.<br>Очікуйте відповіді майстра.
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
