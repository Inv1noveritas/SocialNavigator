<!DOCTYPE html>
<html lang = "ru">

	<head>
		<title>
			Navigator
		</title>
		
		<meta charset="utf-8">
		
		<link rel="stylesheet" href="/css/qwert2.css">
		<link rel="stylesheet" href="/css/media.css" />
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
							</ul>
							
						</li>
						<li id = "Volonts"><a href="./Navi2">Волонтерам</a></li>
					</ul>
				</div>
			</div>
		</div>
		
		<div class = "bady">
			@foreach ($vols as $s)
				@if ($s->number_of_vacansion > 0)
					
						<div class = "Left">
							<h2 id = "nameLeft">
								{{$s->activity_description}}
							</h2>
							
							<div>
								<a class="baton" href="./Form_activities_{{$s->id}}">Записаться</a>
							</div>
							
							<div>
								<p>
									Время проведения.......................................................................{{$s->activity_time}}</br>
								
									Место проведения.......................................................................{{$s->activity_location}}</br>
								
									Кто требуется...............................................................................{{$s->necessary_help}}</br>
								
									Количество мест..........................................................................{{$s->number_of_vacansion}}</br>
								</p>
							</div>
						</div>
					
						
					
				@endif
			@endforeach
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