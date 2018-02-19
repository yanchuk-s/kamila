@component('mail::message')
# Заказано обратный звонок

Имя: {{$name}}<br>
Номер телефона: {{$phone}}<br>

{{--@component('mail::button', ['url' => ''])--}}
{{--Button Text--}}
{{--@endcomponent--}}


@endcomponent
