@props(['options', 'label'])

<div x-data="{ isOpen: false }" @keydown.esc.window="isOpen = false" class="relative">

    <!-- Toggle Button -->
    <button type="button" @click="isOpen = !isOpen"
        class="flex justify-between w-full p-4 text-sm border rounded-lg peer placeholder:text-transparent focus:border-max-soft focus:ring-max-soft disabled:opacity-50 disabled:pointer-events-none bg-max-soft/20 border-max-soft/20 text-max-dark"
        :class="isOpen ? '' : ''" :aria-expanded="isOpen" aria-haspopup="true">
        {{ $label }}
    </button>

    <!-- Dropdown Menu -->
    <div x-cloak x-show="isOpen" x-transition @click.outside="isOpen = false, openedWithKeyboard = false"
        @keydown.down.prevent="$focus.wrap().next()" @keydown.up.prevent="$focus.wrap().previous()"
        class="absolute top-16 flex w-full min-w-[12rem] flex-col overflow-hidden rounded-xl bg-max-dark z-30"
        role="menu">

        <!-- Dropdown Section -->
        <div class="flex flex-col py-1.5">
            {{ $slot }}
        </div>
    </div>
</div>
