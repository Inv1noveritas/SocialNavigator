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
			@foreach ($doctor as $s)
			
					<div class = "Left">
						<p id = "nameLeft">
							{{$s->doctor_speciality}}
						</p>
						
						<div>
							<a href="./Form_doctor_{{$s->id}}" class = "baton">Записаться</a>
						</div>
						
						<div>
							<h2>{{$s->doctor_name}}</h2>
						</div>
						
						<div>
							<br>
						</div>
						
						<div>
							<p>
							@if ($s->doctor_phone_number != "")
								Контактный телефон..............................................{{$s->doctor_phone_number}}<br>
							@endif
							
							@if ($s->doctor_email != "")
								Контактные email....................................................{{$s->doctor_email}}<br>
							@endif
							
							Адрес........................................................................{{$s->doctor_job}}<br>
							</p>
						</div>
					</div>
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