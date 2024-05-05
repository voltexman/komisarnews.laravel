@props(['label', 'name' => '', 'required' => false, 'icon', 'color' => 'light', 'button', 'reactive'])

<div x-data="{ counter: false }" class="relative">

    @isset($icon)
        @svg('lucide-' . $icon, 'absolute w-5 h-5 top-4 left-4 text-max-soft opacity-90')
    @endisset

    <input wire:model{{ isset($reactive) ? '.blur' : '' }}='{{ $name }}'
        {{ $attributes->class([
                'pl-12' => isset($icon),
                'bg-max-light/95 focus:bg-max-light/85' => $color === 'light',
                'bg-max-light/95 focus:bg-max-light/85' => $color === 'soft',
                'bg-max-dark/50 border-max-dark focus:bg-max-light/10 focus:text-max-text' => $color === 'dark',
                'peer p-4 block w-full rounded-lg text-sm placeholder:text-transparent focus:border-max-soft focus:ring-max-soft disabled:opacity-50 disabled:pointer-events-none focus:pt-6 focus:pb-2 [&:not(:placeholder-shown)]:pt-6 [&:not(:placeholder-shown)]:pb-2 autofill:pt-6 autofill:pb-2 outline-none',
            ])->merge(['type' => 'text']) }}
        id="input-{{ Str::slug($label) }}" placeholder="{{ $label }}" x-on:focus="counter = true"
        x-on:blur="counter = false">

    <label for="input-{{ Str::slug($label) }}" @class([
        'text-max-text' => $color === 'dark',
        'pl-12' => isset($icon),
        'w-full absolute top-0 start-0 p-4 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent peer-disabled:opacity-50 peer-disabled:pointer-events-none peer-focus:text-xs peer-focus:-translate-y-1.5 peer-focus:text-max-soft peer-[:not(:placeholder-shown)]:text-xs peer-[:not(:placeholder-shown)]:-translate-y-1.5 peer-[:not(:placeholder-shown)]:text-max-soft',
    ])>
        {{ $label }}
    </label>

    @error($name)
        <span class="text-xs text-red-500">{{ $message }}</span>
    @enderror

    <template x-if="'{{ $required }}'">
        <span class="absolute text-red-500 top-1 right-1">*</span>
    </template>

    <template x-if="'{{ $attributes->has('maxlength') }}'">
        <div x-show="counter" x-transition.opacity.duration.300ms>
            <span
                x-bind:class="$wire.{{ $name }}.length !== {{ $attributes['maxlength'] }} ? 'bg-max-soft' : 'bg-red-500'"
                class="absolute px-1 text-xs rounded -bottom-2 right-2 text-max-light">
                <span x-text="$wire.{{ $name }}.length + '/' + {{ $attributes['maxlength'] }}"></span>
            </span>
        </div>
    </template>

    @isset($button)
        <div class="absolute top-0 overflow-hidden end-0">
            <button {{ $button->attributes->class('text-sm text-max-text border-s border-max-dark bg-max-soft/25') }}>
                {{ $button }}
            </button>
        </div>
    @endisset
</div>
