@props(['label', 'required' => false, 'icon'])

<div x-data="{ counter: false }" class="relative">

    @isset($icon)
        @svg('lucide-' . $icon, 'absolute w-5 h-5 top-4 left-4 text-max-soft opacity-90')
    @endisset

    <input
        {{ $attributes->class([
            'pl-12' => isset($icon),
            'peer p-4 block w-full rounded-lg text-sm placeholder:text-transparent focus:border-max-soft focus:ring-max-soft disabled:opacity-50 disabled:pointer-events-none focus:pt-6 focus:pb-2 [&:not(:placeholder-shown)]:pt-6 [&:not(:placeholder-shown)]:pb-2 autofill:pt-6 autofill:pb-2 outline-none',
        ]) }}
        id="input-{{ Str::slug($label) }}" placeholder="{{ $label }}" x-on:focus="counter = true"
        x-on:blur="counter = false">

    <label for="input-{{ Str::slug($label) }}"
        class="{{ isset($icon) ? 'pl-12' : '' }} {{ $required ? 'required' : '' }} w-full absolute top-0 start-0 p-4 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent peer-disabled:opacity-50 peer-disabled:pointer-events-none peer-focus:text-xs peer-focus:-translate-y-1.5 peer-focus:text-max-soft peer-[:not(:placeholder-shown)]:text-xs peer-[:not(:placeholder-shown)]:-translate-y-1.5 peer-[:not(:placeholder-shown)]:text-max-soft">
        {{ $label }}
    </label>

    {{-- TODO: вказати name поля --}}
    <template x-if="'{{ $attributes->has('maxlength') }}'">
        <div x-show="counter" x-transition.opacity.duration.300ms>
            <span
                x-bind:class="$wire.order.name.length !== {{ $attributes['maxlength'] }} ? 'bg-max-soft' : 'bg-red-500'"
                class="absolute px-1 text-xs rounded -bottom-2 right-2 text-max-light">
                <span x-text="$wire.order.name.length + '/' + {{ $attributes['maxlength'] }}"></span>
            </span>
        </div>
    </template>
</div>
