@props(['label', 'required', 'icon'])

<div x-data="{ count: 0, active: false }" class="relative">
    @isset($icon)
        {{-- {{ $icon }} --}}
    @endisset
    <input
        {{ $attributes->class([
            'pl-9' => isset($icon),
            'peer p-4 block w-full rounded-lg text-sm placeholder:text-transparent focus:border-max-soft focus:ring-max-soft disabled:opacity-50 disabled:pointer-events-none focus:pt-6 focus:pb-2 [&:not(:placeholder-shown)]:pt-6 [&:not(:placeholder-shown)]:pb-2 autofill:pt-6 autofill:pb-2 outline-none',
        ]) }}
        id="hs-floating-input-{{ Str::slug($label) }}" placeholder="{{ $label }}" x-ref="textInput"
        x-on:input="count = $refs.textInput.value.length" x-on:focus="active = true" x-on:blur="active = false">

    <label for="hs-floating-input-{{ Str::slug($label) }}"
        class="{{ isset($icon) ? 'pl-9' : '' }} absolute top-0 start-0 p-4 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent peer-disabled:opacity-50 peer-disabled:pointer-events-none peer-focus:text-xs peer-focus:-translate-y-1.5 peer-focus:text-max-soft peer-[:not(:placeholder-shown)]:text-xs peer-[:not(:placeholder-shown)]:-translate-y-1.5 peer-[:not(:placeholder-shown)]:text-max-soft">
        {{ $label }}
    </label>

    <template x-if="'{{ isset($required) }}'">
        <span class="absolute top-0 right-1 text-red-500 text-lg">*</span>
    </template>

    <template x-if="'{{ $attributes['maxlength'] }}' && active">
        <span x-bind:class="count !== {{ $attributes['maxlength'] }} ? 'bg-max-soft' : 'bg-red-500'"
            class="absolute -bottom-2 right-2 text-xs rounded px-1 text-max-light">
            <span x-text="count"></span>/<span x-text="{{ $attributes['maxlength'] }}"></span>
        </span>
    </template>
</div>
