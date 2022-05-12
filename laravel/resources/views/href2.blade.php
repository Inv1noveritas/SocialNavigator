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
			#zatemnenie:target {
				display: block;
			}

			#zatemnenie {
				background: rgba(102, 102, 102, 0.68);
				width: 100%;
				height: 100%;
				position: fixed;
				top: 0;
				left: 0;
			}

			.window {
				position: absolute;
				border-radius: 25px;
				font-family: 'Gardens';
				top: 50%;
				left: 50%;
				width: 400px;
				border: 1px solid #00B274;
				padding: 50px 20px 50px 50px;
				transform: translate(-50%,-50%);
				background-color: #85FFD5;
			}
			
			a.close_window {
				position: absolute;
				font-family: 'Gardens';
				right: 15px;
				top: 8px;
				border: none;
				outline: none;
				text-decoration: none;
				font-size: 20px;
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
			
			<div class = "nav">
				<div class = "nav-container">
					<ul>
						<li id = "Main"><a href="./">Главная страница</a></li>
						<li id = "Students"><a href="#">Студентам</a>
							<ul>
								<li><a href="./Navi1">Запись к врачу</a></li>
								<li><a href="./1">Полезные ресурсы</a></li>
								<li><a href="./2">Оснащение корпусов ПетрГУ</a></li>
								<li><a href="./login">1</a></li>
							</ul>
							
						</li>
						<li id = "Volonts"><a href="./Navi2">Волонтерам</a></li>
					</ul>
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
	
	<div id="zatemnenie">
		<div class="window">
			<a href="/{{$id}}" class="close_window">X</a>
			Введенные вами данные были изменены :) <br>
		</div>
	</div>
</body>
</html>
