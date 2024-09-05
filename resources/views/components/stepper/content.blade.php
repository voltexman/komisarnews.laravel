@props(['step'])

<div {{ $attributes->class('space-y-5 mt-5') }} x-show="step == {{ $step }}">
    {{ $slot }}
</div>
