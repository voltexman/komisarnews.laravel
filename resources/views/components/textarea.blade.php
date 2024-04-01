@props(['label', 'name', 'required' => false])

<div>
    <div x-data="{ counter: false }" class="relative">
        <textarea wire:model.blur='{{ $name }}'
            {{ $attributes->merge(['class' => 'peer p-4 block w-full border-gray-200 rounded-lg text-sm placeholder:text-transparent focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none focus:pt-6 focus:pb-2 [&:not(:placeholder-shown)]:pt-6 [&:not(:placeholder-shown)]:pb-2 autofill:pt-6 autofill:pb-2']) }}
            id="hs-floating-{{ $attributes['name'] }}" placeholder={{ $attributes }} x-on:focus="counter = true"
            x-on:blur="counter = false" style="resize: none"></textarea>

        <label for="hs-floating-{{ $attributes['name'] }}"
            class="absolute top-0 start-0 p-4 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent peer-disabled:opacity-50 peer-disabled:pointer-events-none peer-focus:text-xs peer-focus:-translate-y-1.5 peer-focus:text-max-soft peer-[:not(:placeholder-shown)]:text-xs peer-[:not(:placeholder-shown)]:-translate-y-1.5 peer-[:not(:placeholder-shown)]:text-max-soft">
            {{ $label }}
        </label>

        @error($name)
            <span class="text-xs text-red-500">{{ $message }}</span>
        @enderror

        <template x-if="'{{ isset($required) }}'">
            <span class="absolute top-0 text-lg text-red-500 right-1">*</span>
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
    </div>
</div>
