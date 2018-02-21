@component('mail::message')
# ОБРАТНАЯ СВЯЗЬ

Имя: {{$name}}<br>
Email: {{$email}}<br>
Сообщение: {{$text}}<br>

{{--@component('mail::button', ['url' => ''])--}}
{{--Button Text--}}
{{--@endcomponent--}}


@endcomponent