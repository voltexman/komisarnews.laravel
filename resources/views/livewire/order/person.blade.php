<div class="flex flex-col w-full gap-y-5">
    <x-form.select :label="$order->goal ? $order->goal : 'Вкажіть ціль заявки'">
        @foreach (App\Enums\Order\Goals::cases() as $goal)
            <x-form.select.item wire:click="$set('order.goal', '{{ $goal->getLabel() }}')" icon="{{ $goal->getIcon() }}">
                <x-slot:label>
                    {{ $goal->getLabel() }}
                </x-slot>
                <x-slot:description>
                    {{ $goal->getDescription() }}
                </x-slot>
            </x-form.select.item>
        @endforeach
    </x-form.select>

    <x-form.input label="Ваше ім'я" icon="user" maxlength="40" name="order.name" />

    <x-form.input label="Місто" icon="map-pin" maxlength="30" name="order.city" required />

    <x-form.input label="Електронна пошта" icon="mail" maxlength="40" name="order.email" />

    <x-form.input label="Номер телефону" icon="phone" maxlength="15" name="order.phone" required />
</div>
