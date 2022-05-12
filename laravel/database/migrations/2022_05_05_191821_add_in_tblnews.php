<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class AddInTblNews extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {		
        DB::table('tblnews')->insert(
			['news_title' => 'Май синема, выбирай!',
			 'news_text' => 'Наступила весна, а вместе с ней и пора ходить в кино без шапки по Пушкинской карте. Выбирай понравившийся фильм и наслаждайся просмотром!',
			 'news_added_files' => 'NULL',
			 'news_links' => 'https://vk.com/profcom.petrsu',
			 'news_status' => '1',
                   'news_date_of_creation' => '2022-05-05 15:45:44',
                   'created_at' => '2022-05-05 15:45:44',
                    'updated_at' => '2022-05-05 15:45:44'
			]
		);

        DB::table('tblnews')->insert(
			['news_title' => 'Абилимпикс в ПетрГУ!',
			 'news_text' => 'ПетрГУ принял участие в торжественной церемонии открытия чемпионата по профессиональному мастерству среди инвалидов и лиц с ограниченными возможностями здоровья.Абилимпикс пройдет и в ПетрГУ в компетенции Адаптивной физической культуры.',
			 'news_added_files' => 'NULL',
			 'news_links' => 'https://vk.com/socotdel.petrsu',
			 'news_status' => '1',
                   'news_date_of_creation' => '2022-05-05 15:45:44',
                   'created_at' => '2022-05-05 15:45:44',
                    'updated_at' => '2022-05-05 15:45:44'
			]
		);
   DB::table('tblnews')->insert(
			['news_title' => 'Твоя профессиональная перспектива!',
			 'news_text' => 'ПетрГУ - участник Профориентационного марафона "Твоя профессиональная перспектива" для абитуриентов с ограниченными возможностями здоровья и инвалидностью из числа школьников 6-11 классов, студентов СПО.',
			 'news_added_files' => 'NULL',
			 'news_links' => 'https://vk.com/socotdel.petrsu',
			 'news_status' => '1',
                   'news_date_of_creation' => '2022-05-05 15:45:44',
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
        DB::table('tblnews')->where('news_title', '=' ,'Май синема! Выбирай')->delete();
        DB::table('tblnews')->where('news_title', '=' ,'Абилимпикс в ПетрГУ!')->delete();
        DB::table('tblnews')->where('news_title', '=' ,'Твоя профессиональная перспектива!')->delete();
    }
}