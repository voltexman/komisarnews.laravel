<div class="flex justify-between">

    <div class="self-center font-semibold uppercase text-">
        {{ $this->getTitle() }}
    </div>

    <div class="space-x-2">
        {{ $this->getAction('create') }}
        {{ $this->getAction('updateMeta') }}
    </div>
</div>
