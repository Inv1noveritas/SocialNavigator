

@component('mail::message')
# Заявка к специалисту
<?php
$name_init=$return_array['name'];
$tokens = explode(" ", $name_init);
$first_name=$tokens[1];
 ?>

Добрый день, {{$first_name}}!<br>
Ваша заявка к специалисту: {{$return_array['doctor']}}  успешно подтверждена.<br>
<br>
Дата и время приема: {{$return_array['date']}}<br>
По адресу: {{$return_array['address']}}<br>

Для получения подробной информации посещайте наш веб-сервис.
@component('mail::button', ['url' => 'https://socialnavigator.petrsu.ru/'])
Social Navigator
@endcomponent

С уважением,<br>
отдел Социальной работы ПетрГУ
@endcomponent
