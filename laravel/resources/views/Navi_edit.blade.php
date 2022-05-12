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
		/* Для временной кнопки. Потом удалить весь style.*/
		input, textarea, select, button {
			/* Убедимся, что все поля имеют одинаковые настройки шрифта
			По умолчанию в textarea используется моноширинный шрифт */
			font: 1em sans-serif;

			/* Определим размер полей */
			width: 1050px;
			box-sizing: border-box;
		
			/* Стилизуем границы полей */
			border: 1px solid #999999;
			
			padding: 10px;
			margin:0px 0; // add top and bottom margin
			border:0;
			box-shadow:0 0 15px 4px rgba(0,0,0,0.1);
			border-radius:20px;
		}

		input:focus, textarea:focus, select:focus, button:focus {
			/* Дополнительная подсветка для элементов в фокусе */
			border-color: #000000;
		}
		
		.button {
			font-size:14px; 
			font-family: 'Gardens'; 
			margin-left: 24vw;
			margin-top: -2vh; 
			margin-bottom: 0vh;
			background: rgba(0, 203, 132, 0.2);
			width: 16vw;
		}
		
		.confirmation {
			background: rgba(102, 102, 102, 0.5);
			width: 100%;
			height: 100%;
			position: absolute;
			top: 0;
			left: 0;
			display: none;
      }
	  .confirmation:target {
		  display: block;
		}
		
      .okno {
        width: 360px;
        height: 85px;
        text-align: center;
        padding: 15px;
        border: 1px solid #999999;
        border-radius: 10px;
        color: #000000;
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        margin: auto;
        background: #fff;
      }
      
		
		.button_comfirm {
			box-sizing: border-box;
		
			border: 1px solid #999999;
			
			padding: 10px;
			margin:0px 0; // add top and bottom margin
			border:0;
			box-shadow:0 0 15px 4px rgba(0,0,0,0.1);
			border-radius:20px;
			
			font-size:16px; 
			font-family: 'Gardens'; 
			background: rgba(0, 203, 132, 0.2);
			/*width: 8vw;*/
			display: inline-block;
			color: #000000;
			margin: 5px;
			text-decoration: none;
			cursor:pointer;
		}
		
		.button_comfirm {
			width: 8vw;
		}
		
		.button_comfirm:hover {
			background: rgba(0, 203, 132, 0.4);
		}
		
		button {
			font-size:14px; 
			font-family: 'Gardens'; 
			margin-left: 24vw;
			margin-top: 1vh; 
			margin-bottom: 0vh;
			background: rgba(0, 203, 132, 0.2);
			
			width: 2.5vw;
			height: 2.5vw;
			margin-right: 1vw;
			float: right;
			
			padding: 0px 0px 0px 0px;
			border-radius:30px;
		}
		
		.twoRight{
			min-height: 24vh;
		}
		
		button:hover {
			/* Дополнительная подсветка для элементов в фокусе */
			background: rgba(0, 203, 132, 0.4);
		}
		
		</style>
	</head>


</html>

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
			
			<div class = "nav">
				<div class = "nav-container">
					<ul>
						<li id = "Main"><a href="#">Администратор</a>
							<ul>
								<li id = "Main"><a href="./Navi_edit">Главная страница</a></li>
								<li><a href="./profile">Заявки</a></li>
								<li><a href="./quit">Выход</a></li>
							</ul>
						</li>
						
						<li id = "Students"><a href="#">Студентам</a>
							<ul>
								<li><a href="./Navi1_edit">Запись к врачу</a></li>
								<li><a href="./href_edit_1">Полезные ресурсы</a></li>
								<li><a href="./href_edit_2">Оснащение корпусов ПетрГУ</a></li>
							</ul>
							
						</li>
						<li id = "Volonts"><a href="./Navi2_edit">Волонтерам</a></li>
					</ul>
				</div>
			</div>
		</div>
		
		<div class = "bady">
			<div class = "Left">
				<p id = "nameLeft" style = "padding-bottom: 3vh;">
					Новости
				</p>
				
				<form action="/Add_news">
					<!-- <p><input id="button_add" class="button" type="submit" value="Добавить новость"></p> -->
					<button style = "float: right; margin-top: -10vh;"><img src = "/images/plus.png" style = "width: 1.2vw;" alt = "symbol"></button>
				</form>

				@foreach ($news as $s)
					@if ($s->news_status == 1)
					<div class = "twoRight">
						<div class = "Teext" style = "padding-top:1.5vh;">
							{{$s->news_title}}
							
							<form action="/Edit_news_{{$s->id}}">
								<button style = "margin-top: -3vh;"><img src = "/images/pencil.png" style = "width: 1.2vw;" alt = "symbol"></button>
							</form>
							<form action="#confirmation_news_{{$s->id}}">
								<button><img src = "/images/bin.png" style = "width: 1.2vw;" alt = "symbol"></button>
							</form>
							<div id="confirmation_news_{{$s->id}}" class="confirmation">
							  <div class="okno">
								Вы точно хотите удалить новость?
								<p>
									<a href="/result_deleting_news_{{$s->id}}" class="button_comfirm">Да</a>
									<a href="/Navi_edit" class="button_comfirm">Нет</a>
								</p>
							  </div>
							</div>
							
						</div>			
						
						<div class = "sss" style = "padding-top:3vh; padding-right: 1vw; margin-bottom: 2vh;">
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
				
				<form action="/Add_ads">
					<!-- <p><input id="button_add_ad" class="button" type="submit" value="Добавить объявление"></p> -->	
					<button style = "float: right; margin-top: -10vh;"><img src = "/images/plus.png" style = "width: 1.2vw;" alt = "symbol"></button>
				</form>
				
				<div id="result_confirmation" class="confirmation">
				  <div class="okno">
					<?php $notification_type = ""; $for_notification = ""; ?>
					{{ $notification_type }} успешно {{ $for_notification }}
					<p>
						<a href="/" class="button_comfirm">Готово</a>
					</p>
				  </div>
				</div>
				
				
				@foreach ($ads as $q)
					@if ($q->ad_status == 1)
						<div class = "twoRight">
						<div class = "Teext" style = "padding-top:1.5vh;">
							{{$q->ad_title}}
							
							<form action="/Edit_ads_{{$q->id}}">
								<button style = "margin-top: -3vh;"><img src = "/images/pencil.png" style = "width: 1.2vw;" alt = "symbol"></button>
							</form>
							<form action="#confirmation_ads_{{$q->id}}">
								<button><img src = "/images/bin.png" style = "width: 1.2vw;" alt = "symbol"></button>
							</form>
							
							<div id="confirmation_ads_{{$q->id}}" class="confirmation">
							  <div class="okno">
								Вы точно хотите удалить объявление?
								<p>
									<a href="/result_deleting_ads_{{$q->id}}" class="button_comfirm">Да</a>
									<a href="/" class="button_comfirm">Нет</a>
								</p>
							  </div>
							</div>
							
						</div>
						<div class = "sss" style = "padding-top:3vh; padding-right: 1vw; margin-bottom: 2vh;">
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
