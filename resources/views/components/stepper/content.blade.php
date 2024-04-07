@props(['step'])

<div data-hs-stepper-content-item='{
    "index": {{ $step }}
}' class="space-y-5">
    {{ $slot }}
</div>
