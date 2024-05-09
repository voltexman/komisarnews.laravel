@props(['label', 'name' => '', 'required' => false, 'icon', 'color' => 'light', 'button'])

<div x-data="{ counter: false }">
    <div class="@isset($button) flex @endisset">
        <div class="relative grow">
            @isset($icon)
                <div class="absolute inset-y-0 z-20 flex items-center pointer-events-none start-0 ps-4">
                    @svg('lucide-' . $icon, 'flex-shrink-0 size-5 text-max-soft opacity-95')
                </div>
            @endisset

            <input wire:model='{{ $name }}'
                {{ $attributes->class([
                        'pl-12' => isset($icon),
                        'border-e-0 rounded-e-none' => isset($button),
                        'bg-max-soft/20 border-max-soft/20' => $color === 'light',
                        'bg-max-light/90 border-max-soft/80 focus:bg-max-light/85' => $color === 'soft',
                        'bg-max-dark/50 border-max-dark text-max-text focus:bg-max-light/10 focus:text-max-text disabled:bg-max-light/70' =>
                            $color === 'dark',
                        'peer border p-4 block w-full rounded-lg text-sm placeholder:text-transparent focus:border-max-soft focus:ring-max-soft disabled:opacity-30 disabled:pointer-events-none focus:pt-6 focus:pb-2 [&:not(:placeholder-shown)]:pt-6 [&:not(:placeholder-shown)]:pb-2 autofill:pt-6 autofill:pb-2 outline-none disabled:text-max-light',
                    ])->merge(['type' => 'text']) }}
                id="input-{{ Str::slug($label) }}" placeholder="{{ $label }}" x-on:focus="counter = true"
                x-on:blur="counter = false">
            <label for="input-{{ Str::slug($label) }}" @class([
                'pl-12' => isset($icon),
                'text-max-text' => $color === 'dark',
                'w-full absolute top-0 start-0 p-4 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent peer-disabled:opacity-50 peer-disabled:pointer-events-none peer-focus:text-xs peer-focus:-translate-y-1.5 peer-focus:text-max-soft peer-[:not(:placeholder-shown)]:text-xs peer-[:not(:placeholder-shown)]:-translate-y-1.5 peer-[:not(:placeholder-shown)]:text-max-soft',
            ])>
                {{ $label }}
            </label>

            <template x-if="'{{ $required }}'">
                <span class="absolute text-red-500 top-1 right-1">*</span>
            </template>

            <template x-if="'{{ $attributes->has('maxlength') }}'">
                <div x-show="counter" x-transition.opacity.duration.300ms>
                    <span
                        x-bind:class="$wire.{{ $name }}.length !== {{ $attributes['maxlength'] }} ? 'bg-max-soft' :
                            'bg-red-500'"
                        class="absolute px-1 text-xs rounded -bottom-2 right-2 text-max-light">
                        <span x-text="$wire.{{ $name }}.length + '/' + {{ $attributes['maxlength'] }}"></span>
                    </span>
                </div>
            </template>
        </div>

        @isset($button)
            <button
                {{ $button->attributes->class('inline-flex flex-none items-center justify-center text-sm p-4 text-max-text rounded-e-lg border border-s-0 border-max-dark bg-max-dark/25 transition duration-300 active:bg-max-soft/50 lg:hover:bg-max-dark/70 disabled:hover:bg-max-dark/70 disabled:bg-max-dark/70 disabled:text-max-text/40 disabled:opacity-90 disabled:hover:bg-max-dark/70 disabled:border-transparent') }}>
                {{ $button }}
            </button>
        @endisset
    </div>

    @error($name)
        <div>
            <span class="text-xs text-red-500">{{ $message }}</span>
        </div>
    @enderror
</div>
