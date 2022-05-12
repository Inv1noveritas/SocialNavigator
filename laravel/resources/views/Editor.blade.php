<!DOCTYPE html>
<html>
 <head>
  <title>Editor</title>
  <meta charset="utf-8">		
		<link rel="stylesheet" href="/css/qwerty2.css" />
		<link rel="stylesheet" href="/css/media.css" />
		<style>
			
			.stroke {
			margin-left: -1vw;
		}
		.nav-container {
			margin-left: 10vw;
		}
		
		.for_form {
			border: 1px solid #CDCDCD;
			width: 80%;
			margin-left: 5%;
			margin-right: 5%;
			margin-top: 1.5%;
			height:69vh;
			border-radius:20px;
			padding-top: 3vh;
		}
		form {
			margin-left: 5%;	
		}
		
		.form_grid{
			display: grid;
			grid-template-columns: 1fr 1fr;
		}
		
		fieldset {
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
			width: 1000px;
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
	margin-top: 5vh;
    background: #ffffff; /* Цвет фона */
    border: 2px solid rgba(0, 203, 132, 0.5); /* Параметры рамки */
    padding: 10px; /* Поля */
    width: 95%; /* Ширина */
    height: 415px; /* Высота */
    box-sizing: border-box; /* Алгоритм расчёта ширины */
    font-size: 14px; /* Размер шрифта */
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
			
		.btn{
			font-size:20px; 
			font-family: 'Gardens'; 
			color: black;
			padding: 2vh 2vw 2vh 2vw;
			border: 1px solid rgba(0, 0, 0, 0.2);
			border-radius:30px; 
			background: rgba(0, 203, 132, 0.2);
			margin-left: 35%;
			width: 300px;
			outline: none;
			text-decoration: none;
			box-shadow: 0 0 5px 2px rgba(0, 0, 0, 0.1);
		}
			
			textarea::-webkit-scrollbar {
				width: 20px;
			}

			textarea::-webkit-scrollbar-thumb {
				background-color: rgba(0, 0, 0, 0);
			}
			textarea::-webkit-scrollbar-thumb:hover {
				background-color: rgba(0, 203, 132, 0.5);
			}
			
		</style>
	</head>

	<body class = "Grid">
	
		<div class = "hat" >
			
			<div class = "mops">
				<a href = "/">
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
		
		<div class = "bady">
		
			<form action="/href2_{{$content->id}}" method="post">
			@csrf
				<textarea name="text" >{!!$content->content!!}</textarea>
				<input class = "btn" type="submit" value="Сохранить">  
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
