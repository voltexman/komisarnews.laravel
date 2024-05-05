<div x-data="{ entered: false }" class="h-[calc(100vh-64px)] container">
    <div class="flex flex-col h-full pb-5 mx-auto lg:w-1/2">
        @if ($messages)
            <div class="flex flex-col grow">
                <div class="flex justify-between mb-3">
                    <div class="text-max-light/60">
                        <x-lucide-headset class="inline-block size-4" />
                        <span class="text-sm font-light text-center">
                            Діалог з консультантом
                        </span>
                    </div>
                    <div class="text-max-light/50">
                        {{-- <x-lucide-calendar class="inline-block size-3" /> --}}
                        <span class="text-xs">Звернення: {{ date('y.m.d') }}</span>
                    </div>
                </div>

                @if ($alert)
                    <x-alert dark close class="mb-2">
                        Зазвичай, майстер відповідає напротязі 15-30 хв. Очікуючи відповіді, ви можете згорнути
                        чат та продовжити користуватись сайтом. Про відповідь, вам прийде сповіщення.
                    </x-alert>
                @endif

                {{-- @dump($messages) --}}
                <div class="flex flex-col w-full">
                    <x-scrollbar class='h-full'>
                        @foreach ($messages as $message)
                            <div @class([
                                'max-w-md w-auto border border-max-soft/20 bg-max-soft/10 rounded-lg overflow-hidden my-2',
                                'ms-auto' => $message['user'] == 'client',
                            ])>
                                <div class="flex py-1 border-b bg-max-soft/10 border-max-soft/5">
                                    <span class="text-xs text-max-light/50 ms-2">
                                        <x-lucide-user class="inline-block -mt-1 size-3" />
                                        {{ $message['user'] == 'client' ? $message['name'] : 'Менеджер' }}
                                    </span>
                                    <span class="text-xs text-max-light/50 ms-auto me-2">
                                        <x-lucide-calendar class="inline-block -mt-1 size-3" />
                                        {{ $message['date'] }}
                                    </span>
                                </div>
                                <div class="p-3 text-sm font-normal leading-5 text-max-light/90">
                                    {{ $message['text'] }}
                                </div>
                            </div>
                        @endforeach
                    </x-scrollbar>
                </div>
            </div>
        @else
            <div class="flex items-center grow">
                <div class="flex flex-col mx-auto">
                    <x-lucide-info class="mx-auto mb-5 size-10" />
                    <div class="text-sm font-light text-center text-max-light/50">
                        <p>Зараз збережених діалогів з <span class="font-bold text-max-soft">"KomisarNews"</span> немає.
                        </p>
                        <p>Будь ласка, вкажіть Ваше ім'я, напишіть повідомлення <br>
                            та очікуйте на відповідь менеджера.
                        </p>
                        {{-- <p>Також, ви можете прикріпити до 10-ти фотографій.</p> --}}
                    </div>
                </div>
            </div>
        @endif
        
        <form wire:submit='save'>
            <div class="flex flex-col h[180px]">
                <div class="relative grow">
                    <textarea wire:model='form.message'
                        class='h-full border text-max-light/80 bg-max-soft/20 border-max-soft/30 peer p-4 block w-full border-gray-200 rounded-t-lg text-sm placeholder:text-transparent focus:border-max-soft focus:ring-max-soft disabled:opacity-50 disabled:pointer-events-none focus:pt-6 focus:pb-2 [&:not(:placeholder-shown)]:pt-6 [&:not(:placeholder-shown)]:pb-2 autofill:pt-6 autofill:pb-2',
                        id="chat-message" placeholder='Повідомлення' style="resize: none"></textarea>
                    <label for="chat-message"
                        class="absolute top-0 start-0 p-4 text-max-light/70 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent peer-disabled:opacity-50 peer-disabled:pointer-events-none peer-focus:text-xs peer-focus:-translate-y-1.5 peer-focus:text-max-soft peer-[:not(:placeholder-shown)]:text-xs peer-[:not(:placeholder-shown)]:-translate-y-1.5 peer-[:not(:placeholder-shown)]:text-max-soft">
                        Повідомлення
                    </label>

                    <div class="flex items-center w-full h-10 overflow-hidden rounded-b-lg ps-4 bg-max-soft/40">
                        <span class="text-xs font-medium text-max-light/45"
                            x-text="'Символів: ' + $wire.message.length + ' з 1000'"></span>
                        <div class="flex h-full ms-auto">
                            {{-- <button type="button" class="self-center cursor-pointer me-3">
                                <x-lucide-camera class="transition size-5 text-max-light/70 hover:text-max-light" />
                            </button> --}}
                            {{-- <input type="file" wire:model="form.photos"> --}}
                            <button type="submit"
                                class="h-full transition bg-max-soft/40 lg:hover:bg-max-soft/70 text-max-light/80 disabled:bg-transparent disabled:opacity-20 disabled:hover:bg-transparent"
                                x-bind:disabled="!$wire.form.message">
                                <span wire:loading.class='hidden' wire:target='save' class="px-3 text-sm">
                                    Відправити <x-lucide-send class="inline-block size-4" />
                                </span>
                                <span wire:loading wire:target='save' class="px-3 text-sm">
                                    Відправка <x-lucide-loader-circle class="inline-block size-4 animate-spin" />
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            {{-- @if ($form->photos)
                <div class="grid grid-cols-5 gap-2 mt-3">
                    @foreach ($form->photos as $photo)
                        <div class="relative">
                            <img src="{{ $photo->temporaryUrl() }}" class="rounded" />
                            <button type="button"
                                class="absolute p-1 lg:p-1.5 bg-red-500 rounded-full right-1 top-1 transition lg:hover:bg-red-700">
                                <x-lucide-x class="size-4 text-max-light" />
                            </button>
                        </div>
                    @endforeach
                </div>
            @endif --}}
        </form>
    </div>
</div>
