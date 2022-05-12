

@component('mail::message')
# Заявка на прием студента
<?php
$name_init=$return_array['doctor'];
$tokens = explode(" ", $name_init);
$first_name=$tokens[1];
$sec_name=$tokens[2];
 ?>

Добрый день, {{$first_name}} {{$sec_name}}!<br>
Получена новая заявка на прием.<br>

Студент: {{$return_array['name']}}<br>
Дата и время приема: {{$return_array['date']}}<br>
По адресу: {{$return_array['address']}}<br>

Для получения подробной информации обратитись к администратору веб-сервиса.
@component('mail::button', ['url' => 'https://socialnavigator.petrsu.ru/'])
Social Navigator
@endcomponent

С уважением,<br>
отдел Социальной работы ПетрГУ
@endcomponent
