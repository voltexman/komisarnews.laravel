<div>
    <div class="flex flex-row mb-4 overflow-hidden border rounded-lg bg-max-soft/10 border-max-soft/10">
        <div class="flex px-3 py-2 border-e pe-2 bg-max-soft/20 border-max-soft/10">
            <i data-lucide="info" class="self-center w-4 h-4"></i>
        </div>
        <span class="px-4 py-2 text-xs leading-4 text-gray-600">
            Можете вказати будь-яку додаткову інформацію, яку вважаєте важливою, для майстра.
        </span>
    </div>
    <x-textarea label="Додатковий опис" rows="12" class="border bg-max-soft/20 border-max-soft/20"
        wire:model='$parent.order.description' maxlength="1000" />
</div>
