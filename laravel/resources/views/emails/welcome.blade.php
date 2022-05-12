
@component('mail::message')
# Заявка на волонтерство
<?php
$name_init=$return_array['name'];
$tokens = explode(" ", $name_init);
$first_name=$tokens[1];
 ?>

Добрый день, {{$first_name}}!<br>
Ваша заявка на мероприятие "{{$return_array['activity']}}" успешно подтверждена.<br>
<br>
Дата и время проведения: {{$return_array['activity_time']}}<br>
Место проведения: {{$return_array['activity_location']}}<br>

Для получения подробной информации посещайте наш веб-сервис.
@component('mail::button', ['url' => 'https://socialnavigator.petrsu.ru/'])
Social Navigator
@endcomponent

С уважением,<br>
отдел Социальной работы ПетрГУ
@endcomponent
