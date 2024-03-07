@props(['class' => ''])

<div x-data="{
    setActiveAccordion(id) {
            this.activeAccordion = (this.activeAccordion == id) ? '' : id
        },
        isActive(id) {
            return this.activeAccordion == id;
        }
}"
    class="relative w-full mx-auto overflow-hidden text-sm font-normal border rounded-lg shadow-md border-max-dark/10 bg-maxsoft shadow-max-dark/20">

    {{ $slot }}

</div>
