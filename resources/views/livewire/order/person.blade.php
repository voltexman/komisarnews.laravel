<div class="flex w-full flex-col gap-y-5">
    <x-form.select name="$parent.order.purpose">
        @foreach (App\Enums\Order\OrderPurpose::cases() as $option)
            <option value="{{ $option->value }}">
                {{ $option->title() }}
            </option>
        @endforeach
    </x-form.select>

    <x-form.input label="Ваше ім'я" icon="user" maxlength="40" name="$parent.order.name" />
    <x-form.input label="Місто" icon="map-pin" maxlength="30" name="$parent.order.city" required />
    <x-form.input label="Електронна пошта" icon="mail" maxlength="40" name="$parent.order.email" />
    <x-form.input label="Номер телефону" icon="phone" maxlength="15" name="$parent.order.phone" required />
</div>
