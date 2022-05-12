<!DOCTYPE html>
<html lang = "ru">

	<head>
		<title>
			Navigator
		</title>
		
		<meta charset="utf-8">	

		<link rel="stylesheet" href="/css/qwerty2.css" />
		<link rel="stylesheet" href="/css/media.css" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>


</html>

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
							</ul>
							
						</li>
						<li id = "Volonts"><a href="./Navi2">Волонтерам</a></li>
					</ul>
				</div>
			</div>
		</div>
		
		<div class = "bady">
			<div class = "Left">
				<p id = "nameLeft" style = "padding-bottom: 3vh;">
					Новости
				</p>

				@foreach ($news as $s)
					@if ($s->news_status == 1)
						<div class = "twoRight">
							<div class = "Teext" style = "padding-top:1.5vh;">
								{{$s->news_title}}
							</div>
							<div class = "sss" style = "padding-top:3vh; padding-right: 1vw; margin-bottom: 1.5vh;">
								{{$s->news_text}}
							</div>
						</div>
					@endif
				@endforeach
				
				<div style = 'margin-top: 3vh; width:0.9vh;'></div>
			</div>
			
			<div class = "Right">
			
				<p id = "nameRight" style = "padding-bottom: 3vh;">
					Объявления
				</p>
				
				@foreach ($ads as $q)
					@if ($q->ad_status == 1)
						<div class = "twoRight">
						<div class = "Teext" style = "padding-top:1.5vh;">
							{{$q->ad_title}}
						</div>
						<div class = "sss" style = "padding-top:3vh; padding-right: 1vw; margin-bottom: 1.5vh;">
							{{$q->ad_text}}
						</div>
					</div>
					@endif
				@endforeach
				
				<div style = 'margin-top: 3vh; width:0.9vh;'></div>
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
