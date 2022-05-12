<!DOCTYPE html>
<html lang = "ru">

	<head>
		<title>
			Navigator
		</title>
		
		<meta charset="utf-8">	

		<link rel="stylesheet" href="/css/qwerty2.css" />
		<link rel="stylesheet" href="/css/media.css" />
		<style>
		@media (max-width: 1280px) {
			.nav-container { margin-left: 10vw; }
			.stroke { margin-left: -1vw; }
		}
		.notification {
			margin-left: 2vw;
			margin-top: 2vh;
		}
		h1 {
			font-family: 'Gardens';
		}
		h2 {
			font-family: 'Gardens';
		}
		p {
			font-family: 'Gardens';
			font-size: 24px;
		}
		
		/* Для временной кнопки. Потом удалить весь style.*/
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
			margin:0px 0; // add top and bottom margin
			border:0;
			box-shadow:0 0 15px 4px rgba(0,0,0,0.1);
			border-radius:20px;
		}

		input:focus, textarea:focus, select:focus {
			/* Дополнительная подсветка для элементов в фокусе */
			border-color: #000;
		}
		
		#button {
			font-size: 20px; 
			font-family: 'Gardens'; 
			margin-left: 0vw;
			margin-top: 0vh; 
			margin-bottom: -2vh;
			background: rgba(0, 203, 132, 0.2);
			width: 16vw;
		}
		</style>
	</head>

	<body class = "Grid">
	
		<div class = "hat" >
			
			<div class = "mops">
				<a href = "/Navi_edit">
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
			<div class='notification' style = "margin-top: 5%; margin-left: 2%;">
				<p style = "">{{ $notification_type }} успешно {{ $for_notification }}</p>
				<div style = " margin-top: 3%;">
					<form action="/{{ $for_res_link }}">
						<input id="button" type="submit" value="Готово">
					</form>
				</div>
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