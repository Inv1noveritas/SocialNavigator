<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InsertTblcontent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('tblcontent')->insert(
			['page_title' => 'Полезные ресурсы',
			 'page_status' => true,
			 'content' => '
		<div>
			<div class = "Left" style = "margin-right: 5vw; padding-left: 3vw; padding-bottom: 3vh;">
				<p id = "nameLeft">
					<b>Полезные ссылки</b>
				</p>
					<p class = "Teext">
						1. Сектор социальной работы
					</p>
					<a href="https://petrsu.ru/structure/428/otdelsotsialnojrabot" class ="sss">Нажми для перехода на страницу</a>
			
					<p class = "Teext">
						2. Центр адаптивной физической культуры

					</p>
					<a href="https://petrsu.ru/page/soc-service-view?id=241" class ="sss">Нажми для перехода на страницу</a>

					<p class = "Teext">
						3. Санаторий-профилакторий 
					</p>
					<a href="https://petrsu.ru/page/soc-service-view?id=19" class ="sss">Нажми для перехода на страницу</a>
			
					<p class = "Teext">
						4. Юридическая клиника ПетрГУ
					</p>
					<a href="https://petrsu.ru/page/soc-service-view?id=6" class ="sss">Нажми для перехода на страницу</a>

					<p class = "Teext">
						5. Первичная профсоюзная организация обучающихся ПетрГУ
					</p>
					<a href="https://petrsu.ru/structure/655/profkom-stud " class ="sss">Нажми для перехода на страницу</a>
					<a href="https://vk.com/profcom.petrsu" class ="sss">Нажми для перехода на страницу в VK</a>
			
					<p class = "Teext">
						6. Бесплатные психологические консультации для студентов ( ЦПЗ ЦЕНТР ПСИХОЛОГИЧЕСКОГО ЗДОРОВЬЯ И ЭМОЦИОНАЛЬНОГО БЛАГОПОЛУЧИЯ)
					</p>
					<a href="https://petrsu.ru/notices/2020/87120/besplatnye-psihologi" class ="sss">Нажми для перехода на страницу</a>

					<p class = "Teext">
						7. Бассейн "Онего" ПетрГУ
					</p>
					<a href="https://petrsu.ru/structure/412/onego" class ="sss">Нажми для перехода на страницу</a>
					<a href="https://vk.com/public128407212" class ="sss">Нажми для перехода на страницу в VK</a>
			
					<p class = "Teext">
						8. Для студентов с ограниченными возможностями здоровья
					</p>
					<a href="https://petrsu.ru/page/students/ovz" class ="sss">Нажми для перехода на страницу</a>

					<p class = "Teext">
						9. Создание и развитие инклюзивной деятельности студенческого объединения "Преодоление"
					</p>
					<a href="https://petrsu.ru/page/socio/ovz/preodolenie" class ="sss">Нажми для перехода на страницу</a>
			
					<p class = "Teext">
					10. Спортивный комплекс
					</p>
					<a href="https://petrsu.ru/structure/441/sportivnyjkompleks" class ="sss">Нажми для перехода на страницу</a>

					<p class = "Teext">
						11. Спортивно-оздоровительный лагерь "Шотозеро"
					</p>
					<a href=" https://petrsu.ru/structure/351/solshotozerokartotek" class ="sss">Нажми для перехода на страницу</a>
			
					<p class = "Teext">
						12. Карточные программы
					</p>
					<a href="https://petrsu.ru/page/socio/cards" class ="sss">Нажми для перехода на страницу</a>

					<p class = "Teext">
						13. Компенсации и льготы
					</p>
					<a href="https://petrsu.ru/page/socio/compens" class ="sss">Нажми для перехода на страницу</a>
					<p class = "Teext">
						14. Центр социальной и воспитательной работы ПетрГУ
					</p>
					<a href="https://vk.com/socotdel.petrsu" class ="sss">Нажми для перехода на страницу в VK </a>

					<p class = "Teext">
						15. Здравпункт ПетрГУ
					</p>
					<a href="https://petrsu.ru/structure/1261/zdravpunkt" class ="sss">Нажми для перехода на страницу</a>
					<a href="https://vk.com/club206811942" class ="sss">Нажми для перехода на страницу в VK </a>

			</div>
		</div>',
			 'footer' => '<div class = "footer"> 			<div class = "number"> 				8*********9 - Copyright 			</div> 			 			<div class = "copy"> 				Copyright ©2021 			</div> 		</div>',
			 'nav' => '<body class = "Grid"> 	 		<div class = "hat" > 			 			<div class = "mops"> 				<a href = "/"> 					<img src = "/images/petrsu.png" style = "width: 4vw;"  alt = "symbol" id = "img_1"> 				</a> 			</div> 			 			<div class = "stroke"> 				 				<div class = "PetrSU"> 					ПетрГУ 				</div> 						 				<div class = "Sn"> 					Социальный навигатор 				</div> 			</div> 			 			<div class = "nav"> 				<div class = "nav-container"> 					<ul> 						<li id = "Main"><a href="./">Главная страница</a></li> 						<li id = "Students"><a href="#">Студентам</a> 							<ul> 								<li><a href="./Navi1">Запись к врачу</a></li> 								<li><a href="./1">Полезные ресурсы</a></li> 								<li><a href="./2">Оснащение корпусов ПетрГУ</a></li> 							</ul> 							 						</li> 						<li id = "Volonts"><a href="./Navi2">Волонтерам</a></li> 					</ul> 				</div> 			</div> 		</div>',
			 'nav_admin' => '<body class = "Grid"> 	 		<div class = "hat" > 			 			<div class = "mops"> 				<a href = "./Navi_edit"> 					<img src = "/images/petrsu.png" style = "width: 4vw;"  alt = "symbol" id = "img_1"> 				</a> 			</div> 			 			<div class = "stroke"> 				 				<div class = "PetrSU"> 					ПетрГУ 				</div> 						 				<div class = "Sn"> 					Социальный навигатор 				</div> 			</div> 			 			<div class = "nav"> 				<div class = "nav-container"> 					<ul> 						<li id = "Main"><a href="#">Администратор</a> 							<ul> 								<li id = "Main"><a href="./Navi_edit">Главная страница</a></li> 								<li><a href="./profile">Заявки</a></li> 								<li><a href="./quit">Выход</a></li> 							</ul> 						</li> 						 						<li id = "Students"><a href="#">Студентам</a> 							<ul> 								<li><a href="./Navi1_edit">Запись к врачу</a></li> 								<li><a href="./href_edit_1">Полезные ресурсы</a></li> 								<li><a href="./href_edit_2">Оснащение корпусов ПетрГУ</a></li> 							</ul> 							 						</li> 						<li id = "Volonts"><a href="./Navi2_edit">Волонтерам</a></li> 					</ul> 				</div> 			</div> 		</div>',
			 'date_create' => '2021-12-07 00:00:00',
			 'category' => 'static',
			 'scripts' => '<link rel="stylesheet" href="/css/qwerty.css">
<link rel="stylesheet" href="/css/media.css" />'
			 ]
	);

        DB::table('tblcontent')->insert(
			['page_title' => 'Оснащение корпусов ПетрГУ',
			 'page_status' => true,
			 'content' => '
		<div class = "bady">
		<div class = "for_form" style="margin-top:-100px">
			<form action="#" name="my_form" id="form">
			
			<p style="margin-left:0px; margin-top:10Svh; font-family: 'Gardens'; font-size:30px;"><b>Первый корпус ПетрГУ</b></p>
			
			<div class = "form_grid" style = "margin-top: 10vh;">
			
			<div class = "form_left" style = "">
			
			<div>
				<label for="phone">Телефон.................88142711053</label>
			</div>
			
			<div>
				<label for="address">Адрес....................г.Петрозаводск,ул.Анохина,д.20</label>
			</div>
			
			<div style="margin-top: 10vh; white-space: nowrap;">
				<label for="desc">Описание оснащения</label>
				
	
			</div>
			
			
			</div>
			
			<div class = "form_right" style = "margin-left:-5vw;">
			
			<div>
				<img src="/images/building1.jpg" align="right" style="width: 350px; height: 350px" id="hp">
			</div>
			
			</div>
		</form>
		</div>
		</div>
		
		<div class = "bady">
		<div class = "for_form">
			<form action="#" name="my_form" id="form">
			
			<p style="margin-left:0px; margin-top:-4Svh; font-family: 'Gardens'; font-size:30px;"><b>Второй корпус ПетрГУ</b></p>
			
			<div class = "form_grid" style = "margin-top: 10vh;">
			
			<div class = "form_left" style = "">
			
			<div>
				<label for="phone">Телефон.................88142711053</label>
			</div>
			
			<div>
				<label for="address">Адрес....................г.Петрозаводск,ул.Анохина,д.20</label>
			</div>
			
			<div style="margin-top: 10vh; white-space: nowrap;">
				<label for="desc">Описание оснащения</label>
				
	
			</div>
			
			
			</div>
			
			<div class = "form_right" style = "margin-left:-5vw;">
			
			<div>
				<img src="/images/building2.jpg" align="right" style="width: 350px; height: 350px" id='hp'>
			</div>
			
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
		
	</body>',
			 'footer' => '<div class = "footer"> 			<div class = "number"> 				8*********9 - Copyright 			</div> 			 			<div class = "copy"> 				Copyright ©2021 			</div> 		</div>',
			 'nav' => '<body class = "Grid"> 	 		<div class = "hat" > 			 			<div class = "mops"> 				<a href = "/"> 					<img src = "/images/petrsu.png" style = "width: 4vw;"  alt = "symbol" id = "img_1"> 				</a> 			</div> 			 			<div class = "stroke"> 				 				<div class = "PetrSU"> 					ПетрГУ 				</div> 						 				<div class = "Sn"> 					Социальный навигатор 				</div> 			</div> 			 			<div class = "nav"> 				<div class = "nav-container"> 					<ul> 						<li id = "Main"><a href="./">Главная страница</a></li> 						<li id = "Students"><a href="#">Студентам</a> 							<ul> 								<li><a href="./Navi1">Запись к врачу</a></li> 								<li><a href="./1">Полезные ресурсы</a></li> 								<li><a href="./2">Оснащение корпусов ПетрГУ</a></li> 							</ul> 							 						</li> 						<li id = "Volonts"><a href="./Navi2">Волонтерам</a></li> 					</ul> 				</div> 			</div> 		</div>',
			 'nav_admin' => '<body class = "Grid"> 	 		<div class = "hat" > 			 			<div class = "mops"> 				<a href = "./Navi_edit"> 					<img src = "/images/petrsu.png" style = "width: 4vw;"  alt = "symbol" id = "img_1"> 				</a> 			</div> 			 			<div class = "stroke"> 				 				<div class = "PetrSU"> 					ПетрГУ 				</div> 						 				<div class = "Sn"> 					Социальный навигатор 				</div> 			</div> 			 			<div class = "nav"> 				<div class = "nav-container"> 					<ul> 						<li id = "Main"><a href="#">Администратор</a> 							<ul> 								<li id = "Main"><a href="./Navi_edit">Главная страница</a></li> 								<li><a href="./profile">Заявки</a></li> 								<li><a href="./quit">Выход</a></li> 							</ul> 						</li> 						 						<li id = "Students"><a href="#">Студентам</a> 							<ul> 								<li><a href="./Navi1_edit">Запись к врачу</a></li> 								<li><a href="./href_edit_1">Полезные ресурсы</a></li> 								<li><a href="./href_edit_2">Оснащение корпусов ПетрГУ</a></li> 							</ul> 							 						</li> 						<li id = "Volonts"><a href="./Navi2_edit">Волонтерам</a></li> 					</ul> 				</div> 			</div> 		</div>',
			 
			 'date_create' => '2021-12-07 00:00:00',
			 'category' => 'static',
			 'scripts' => '<link rel="stylesheet" href="/css/qwerty.css">
<link rel="stylesheet" href="/css/media.css" />
		<style>
		
		.nav-container {
			margin-left: 10vw;
		}
		
		.for_form {
			border: 1px solid #CDCDCD;
			width: 90%;
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
			width: 300px;
			box-sizing: border-box;
		
			/* Стилизуем границы полей */
			border: 1px solid #999;
			
			padding: 10px;
			margin:20px 0; // add top and bottom margin
			border:0;
			box-shadow:0 0 15px 4px rgba(0,0,0,0.1);
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
			width: 20%;
			text-align: left;
		}

		.form_right label {
			width: 35%;
		}

		#hp{
		margin: -60px 100px 100px 0px;	
		}

		</style>'
		 ]
		);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('tblContent')->where('page_title', '=' ,'Полезные ресурсы')->delete();
		DB::table('tblContent')->where('page_title', '=' ,'Оснащение корпусов ПетрГУ')->delete();
    }
}
