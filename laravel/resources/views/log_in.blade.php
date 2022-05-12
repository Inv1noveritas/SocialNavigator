<!DOCTYPE html>
<html lang = "ru">
	<head>
		<title>
			Вход в административный раздел сайта
		</title>
		
		<meta charset="utf-8">
		
		<link rel="stylesheet" href="/css/qwerty.css">
		<link rel="stylesheet" href="/css/log.css">
		<link rel="stylesheet" href="/css/media.css">
		<style>
		
		</style>
	</head>

	<body class = "Grid">
	
		<div class = "hat" >
			
			<div class = "mops">
				<a href = "#">
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
			<div id = "forma">
				<form action="/result_admins" method = "post" name = "form_admins">
				@csrf
					<legend id = "legend">Вход в административный раздел сайта</legend><br>
					
					<div class = "grg">
					
						<div><br></div>
					
						<div class = "1">
							<label class = "ll" for="login">Логин</label><br>
								<input type="text" id="login" name="admin_login" autofocus required>	
						</div>	
						<div><br></div>
						<div><br></div>
						<div class = "2">
							<label class = "ll" for="password">Пароль</label><br>
								<input type="password" id="password" name="admin_password" required>
						</div>
						<div><br></div>
						<div><br></div>
						<div><br></div>
						<div><br></div>
						<div><br></div>
						<input type="submit" value="Вход" id = "loggin">
					</div>
					
					
				</form>
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