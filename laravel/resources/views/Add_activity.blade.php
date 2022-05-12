<!DOCTYPE html>
<html lang = "ru">
	<head>
		<title>
			Добавление мероприятия
		</title>		
		<meta charset="utf-8">		
		<link rel="stylesheet" href="/css/qwerty2.css" />
		<link rel="stylesheet" href="/css/media.css" />
		<style>
		form {
			margin-left: 5%;	
		}		
		.form_grid{
			display: grid;
			grid-template-columns: 1fr 1fr;
			margin-top: 2vh;
		}		
		fieldset {
			border: 1px solid #CDCDCD;
			width: 90%;
			margin-left: 2%;
			margin-right: 5%;
			margin-top: 1.0%;
			height: 70vh;
			border-radius:20px;
			padding-top: 10vh;
			padding-left: 15vh;
		}		
		*, *:before, *:after {
			box-sizing: border-box;
		}
		.bady {
			grid-template-columns: 1fr;
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
			margin:20px; // add top and bottom margin
			border:0;
			box-shadow:0 0 15px 4px rgba(0,0,0,0.06);
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
			margin-top: 0vh; 
		}

		.form_right {
			margin-left: 2vw;
		}		
		#button {
			font-size:20px; 
			font-family: 'Gardens'; 
			background: rgba(0, 203, 132, 0.2);
			width: 20vw;
			margin-left: 37%;
			margin-top: 3vh;
		}		
		#button:hover {
			background: rgba(0, 203, 132, 0.4);
		}
		legend {
			font-size:26px; 
			margin-left: 0vw; /*Надо поменять для более большого экрана*/
			margin-top: 1vh; 
			font-family: 'Gardens';
		}
		
		.field {
			margin-bottom: 2vh; 
		}

		@media (max-height: 580px) {
			input, textarea, select { margin:10px 0; }
			fieldset { padding-top: 4vh; }
			/*#button { margin-top: -0.8vh; }*/
		}
		@media (max-width: 1280px) {
			fieldset { padding-left: 10vh; }
			/*#button { margin-left: 58%; }*/
			.stroke { margin-left: -1vw; }
			.nav-container { margin-left: 10vw; }
			/*legend { margin-left: 56vw; }*/
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
		
		<div >
			<form action="/result_adding_activity" method="post" name="my_form" id="form">
			@csrf
			<fieldset>
			<legend>Добавить мероприятие</legend><br>			
				<div class = "form_grid">			
					<div class = "form_left">			
						<div class="field">
							<label for="description">Название мероприятия*:</label>
							<input type="text" id="description" name="activity_description" autofocus required>
						</div>
						
						<div class="field">
							<label for="time">Дата и время проведения*:</label>
							<input type="datetime-local" id="time" name="activity_time" required>
						</div>				

						<div class="field">
							<label for="location">Место проведения*:</label>
							<input type="text" id="location" name="activity_location" required>
						</div>						
					</div>
			
					<div class = "form_right">			
						<div class="field">
							<label for="help">Необходимая помощь*:</label>
							<input type="text" id="help" name="necessary_help" required>
						</div>
			
						<div class="field">
							<label for="number">Количество мест*:</label>
							<input type="number" id="number" name="number_of_vacansion" value="" min="0" max="100" step="1" required>
						</div>
					</div>	
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