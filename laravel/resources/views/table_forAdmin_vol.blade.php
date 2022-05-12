<!DOCTYPE html>
<html lang = "ru">
	<head>
		<title>
			Оснащение ПетрГУ
		</title>
		
		<meta charset="utf-8">
		
		<link rel="stylesheet" href="/css/qwerty2.css" />
		<link rel="stylesheet" href="/css/media.css" />
		<style>
/* Стили таблицы (IKSWEB) */
table.iksweb{text-decoration: none;border-collapse:collapse;width:95%;text-align:center; margin-left: 2.5%}
table.iksweb th{font-weight:normal;font-size:14px; color:#000000;background-color:#ffffff;}
table.iksweb td{font-size:13px;color:#000000;}
table.iksweb td,table.iksweb th{white-space:pre-wrap;padding:10px 5px;line-height:13px;vertical-align: middle;border: 2px solid #c9c9c9;}
table.iksweb tr:hover{background-color:#f9fafb}
table.iksweb tr:hover td{color:#000000;cursor:default;}
		
		*, *:before, *:after {
			box-sizing: border-box;
		}

		
		input, textarea, select {
			/* Убедимся, что все поля имеют одинаковые настройки шрифта
			По умолчанию в textarea используется моноширинный шрифт */
			font: 1em sans-serif;

			/* Определим размер полей */
			width: 300px;
			box-sizing: border-box;
		
			/* Стилизуем границы полей */
			border: 1px solid #999;
			
			padding: 10px;
			margin:20px 0; // add top and bottom margin
			border:0;
			box-shadow:0 0 15px 4px rgba(0,0,0,0.1);
			border-radius:20px;
		}

		input:focus, textarea:focus, select:focus {
			/* Дополнительная подсветка для элементов в фокусе */
			border-color: #000;
		}

		textarea {
			/* Выравним многострочные текстовые поля с их текстами-подсказками */
			vertical-align: top;

			/* Предоставим пространство для ввода текста */
			height: 5em;
		}
		label {
			font-family: 'Gardens'; 
			font-size:18px;
			/* Определим размер и выравнивание */
			display: inline-block;
			width: 20%;
			text-align: left;
		}

		.form_right label {
			width: 35%;
		}

		#hp{
		margin: -60px 100px 100px 0px;	
		}

		</style>
	</head>

	<body class = "Grid">
	
		<div class = "hat" >
			
			<div class = "mops">
				<a href = "./Navi_edit">
					<img src = "/images/petrsu.png" style = "width: 4vw;"  alt = "symbol" id = "img_1">
				</a>
			</div>
			
			<div class = "stroke">
				
				<div class = "PetrSU">
					ПетрГУ
				</div>
						
				<div class = "Sn">
					Социальный навигатор
				</div>
			</div>
			
			<div class = "nav">
				<div class = "nav-container">
					<ul>
						<li id = "Main"><a href="#">Администратор</a>
							<ul>
								<li id = "Main"><a href="./Navi_edit">Главная страница</a></li>
								<li><a href="./profile">Заявки</a></li>
								<li><a href="./quit">Выход</a></li>
							</ul>
						</li>
						
						<li id = "Students"><a href="#">Студентам</a>
							<ul>
								<li><a href="./Navi1_edit">Запись к врачу</a></li>
								<li><a href="./href_edit_1">Полезные ресурсы</a></li>
								<li><a href="./href_edit_2">Оснащение корпусов ПетрГУ</a></li>
							</ul>
							
						</li>
						<li id = "Volonts"><a href="./Navi2_edit">Волонтерам</a></li>
					</ul>
				</div>
			</div>
		</div>
		
		<div>
			

<div style="margin-top: 5%">
		<table class="iksweb">
	<tbody>
		<tr>
			<th colspan="11">Заявки на мероприятия</th>
		</tr>
		<tr>
			<td>Мероприятие №</td>
			<td>Дата</td>
			<td>ФИО</td>
			<td>Курс</td>
			<td>Институт</td>
			<td>Группа</td>
			<td>Телефон</td>
			<td>Почта</td>
			<td>Дата создания заявки</td>
			<td>Дата редактирования заявки</td>
			<td>Edit | Delete</td>
		</tr>
		@foreach ($appl as $app)
		<tr>
		
			<td>{{$app->id_activities}}</td>
			<td>{{$app->activity_time}}</td>
			<td>{{$app->volonteer_name}}</td>
			<td>{{$app->volonteer_cours}}</td>
			<td>{{$app->volonteer_institute}}</td>
			<td>{{$app->volonteer_group}}</td>
			<td>{{$app->volonteer_phone_number}}</td>
			<td>{{$app->volonteer_email}}</td>
			<td>{{$app->created_at}}</td>
			<td>{{$app->updated_at}}</td>
			<td></td>
		</tr>
		@endforeach
		
	</tbody>
</table>

</div>


		</div>
		
		<div class = "footer">
			<div class = "number">
				8*********9 - Copyright
			</div>
			
			<div class = "copy">
				Copyright &#169;2021
			</div>
		</div>
		
	</body>

</html>