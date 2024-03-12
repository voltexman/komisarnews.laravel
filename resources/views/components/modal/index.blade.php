<div x-data="{ modalOpen: false }" x-on:show-modal.window="modalOpen = true" x-on:close-modal.window="modalOpen = false">
    {{ $slot }}
</div>
