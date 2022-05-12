<!DOCTYPE html>
<html lang = "ru">
	<head>
		<title>
			Редактирование новостей
		</title>
		
		<meta charset="utf-8">
		
		<link rel="stylesheet" href="/css/qwerty2.css" />
		<link rel="stylesheet" href="/css/media.css" />
		
		<style>

		fieldset {
			border: 1px solid #CDCDCD;
			width: 90%;
			margin-left: 2%;
			margin-right: 5%;
			margin-top: 1.5%;
			height:69vh;
			border-radius:20px;
			padding-top: 2vh;
			padding-left: 4vw;
			padding-right: 4vw;
		}
		legend {
			font-size:26px; 
			margin-left: 0vw; /*Надо поменять для более большого экрана*/
			margin-top: 1vh; 
			font-family: 'Gardens';
		}
		
		form {
			margin-left: 5%;	
		}
		
		*, *:before, *:after {
			box-sizing: border-box;
		}
		
		.bady {

		}
		
		input, textarea, select {
			/* Убедимся, что все поля имеют одинаковые настройки шрифта
			По умолчанию в textarea используется моноширинный шрифт */
			font: 1em sans-serif;

			/* Определим размер полей */
			width: 1050px;
			box-sizing: border-box;
		
			/* Стилизуем границы полей */
			border: 1px solid #999;
			
			padding: 10px;
			margin:10px 0; // add top and bottom margin
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
			width: 30%;
			text-align: left;
		}
		
		#button {
			font-size:20px; 
			font-family: 'Gardens'; 
			margin-left: 30vw;
			margin-top: 8vh; 
			background: rgba(0, 203, 132, 0.2);
			width: 20vw;
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
			

		</div>
		
		<div>
			<form action="/{{ $for_link }}" method="post" name="my_form" id="form">
			@csrf
			<fieldset>
			<legend>{{ $for_legend }}</legend><br>
									
			<div>
				<label for="name">Заголовок {{ $for_label }}:</label>
				<input style = "width: 100%" type="text" id="name" name="edit_title" value="{{ $title }}" autofocus required><br>
			</div><br>
			
			<div>
				<label for="Tekst">Текст {{ $for_label }}:</label>
				<textarea style = "width: 100%; resize: vertical;" rows = "7" type="text" id="tekst" name="edit_text" required>{{ $text }}</textarea><br>
			</div>
			<input id="button" type="submit" value="Сохранить">
			
			</fieldset>
		</form>
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