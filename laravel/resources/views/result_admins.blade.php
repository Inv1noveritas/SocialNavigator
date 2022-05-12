<!DOCTYPE html>
<html lang = "ru">

	<head>
		<title>
			Navigator
		</title>
		
		<meta charset="utf-8">	

		<link rel="stylesheet" href="/css/qwerty.css" />
		<link rel="stylesheet" href="/css/media.css" />
		<style>
		@media (max-width: 1280px) {
			.nav-container { margin-left: 10vw; }
			.stroke { margin-left: -1vw; }
		}
		.notification {
			margin-left: 2vw;
		}
		h1 {
			font-family: 'Gardens';
		}
		h2 {
			font-family: 'Gardens';
		}
		p {
			font-family: 'Gardens';
			font-size: 18px;
		}
		.baton {
			font-size:20px; 
			font-family: 'Gardens'; 
			color: black;
			/*width: 90%;*/
			padding: 2vh 2vw 2vh 2vw;
			border: 1px solid rgba(0, 0, 0, 0.2);
			border-radius:30px;
			margin-left: 40%;
			background: rgba(0, 203, 132, 0.2);
			width: 200px;
			outline: none;
			text-decoration: none;
			box-shadow: 0 0 5px 2px rgba(0, 0, 0, 0.1);
		}		
		.baton:hover {
			background: rgba(0, 203, 132, 0.4);
		}
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
		<div>
			<div class='notification' style = "margin-top: 5%;">
				
				<p style = "font-size: 27px; margin-left: 39.5%;">Добро пожаловать, </p>
				<p style = "font-size: 30px; margin-left: 45%;">{{ $name }}</p>
				<div style = "margin-top: 10%;"> <a href="./profile" class = "baton">Открыть профиль</a> </div>
				
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