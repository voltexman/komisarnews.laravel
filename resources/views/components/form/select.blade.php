@props(['options', 'label'])

<div class="relative">
    <select {{$attributes}}
            data-hs-select='{
            "placeholder": "{{ $label }}",
            "toggleTag": "<button type=\"button\"><span class=\"me-2\" data-icon></span><span class=\"py-1\" data-title></span></button>",
            "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 text-max-dark relative py-3 px-4 pe-9 flex items-center text-nowrap w-full cursor-pointer border bg-max-soft/20 border-max-soft/20 rounded-lg text-start text-sm focus:border-max-soft focus:ring-blue-500 before:absolute before:inset-0 before:z-[1]",
            "dropdownClasses": "mt-2 z-50 w-full max-h-72 p-1 space-y-0.5 bg-white border border-max-soft/30 rounded-lg overflow-hidden overflow-y-auto",
            "optionClasses": "py-2 px-4 w-full text-sm text-max-dark cursor-pointer hover:bg-max-soft/20 transition rounded-lg focus:outline-none focus:bg-gray-100",
            "optionTemplate": "<div><div class=\"flex items-center\"><div class=\"\" data-icon></div><div class=\"font-semibold text-max-soft\" data-title></div></div><div class=\"text-sm text-max-dark\" data-description></div></div>"
        }'
            class="hidden">
        <option value="">Choose</option>

        {{ $slot }}

    </select>

    <div class="absolute -translate-y-1/2 top-1/2 end-3">
        <x-lucide-chevrons-up-down class="w-4 h-4 text-max-soft"/>
    </div>
</div>
