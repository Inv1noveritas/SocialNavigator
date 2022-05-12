<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class AddInTblads extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {		
        DB::table('tblads')->insert(
			['ad_title' => 'Приём материальной помощи в мае',
			 'ad_text' => 'Даты приёма заявлений: 4, 5, 6, 11, 12, 13, 16 - 20 мая. По всем вопросам можете обращаться в сообщения группы: https://vk.com/profcom.petrsu или по телефону 78-12-28.',
			 'ad_added_files' => 'NULL',
			 'ad_links' => 'https://vk.com/profcom.petrsu',
			 'ad_status' => '1',
                   'created_at' => '2022-05-05 15:45:44',
                    'updated_at' => '2022-05-05 15:45:44'
			]
		);
  DB::table('tblads')->insert(
			['ad_title' => 'День Победы в ПетрГУ',
			 'ad_text' => 'В преддверии празднования Дня Победы студенты ПетрГУ подготовили интересную программу для творческого вечера, который пройдет 6 мая в Актовом зале ПетрГУ. Тебя ждут:• 18:00 — Показ документального фильма от «Морошки» • 18:30 — Выступление Академического хора • 19:00 — Спектакль «Завтра была война». Вход на все мероприятия свободный, поэтому с радостью ждем тебя!',
			 'ad_added_files' => 'NULL',
			 'ad_links' => 'https://vk.com/profcom.petrsu',
			 'ad_status' => '1',
                   'created_at' => '2022-05-05 15:45:44',
                    'updated_at' => '2022-05-05 15:45:44'
			]
		);

  DB::table('tblads')->insert(
			['ad_title' => 'Молодежный форум "Берег"',
			 'ad_text' => 'Молодёжный образовательный форум «Берег» ждёт, когда именно ты подашь заявку. Знакомства, знания, отдых на природе, экскурсия в горный парк "Рускеала", о чём ты ещё мечтал?
Ссылка на регистрацию тут 👉🏻 https://myrosmol.ru/event/92675.
До встречи с 16 по 20 мая в городе Сортавала!',
			 'ad_added_files' => 'NULL',
			 'ad_links' => 'https://myrosmol.ru/event/92675',
			 'ad_status' => '1',
                   'created_at' => '2022-05-05 15:45:44',
                    'updated_at' => '2022-05-05 15:45:44'
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
        DB::table('tblads')->where('ad_title', '=' ,'День Победы в ПетрГУ')->delete();
 DB::table('tblads')->where('ad_title', '=' ,'Приём материальной помощи в мае')->delete();
 DB::table('tblads')->where('ad_title', '=' ,'Молодежный форум "Берег"')->delete();
       
    }
}