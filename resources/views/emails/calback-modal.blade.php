@component('mail::message')
# Анкета

Имя: {{$name}}<br>
Email: {{$email}}<br>
Номер телефона: {{$phone}}<br>

{{--@component('mail::button', ['url' => ''])--}}
{{--Button Text--}}
{{--@endcomponent--}}


@endcomponent
