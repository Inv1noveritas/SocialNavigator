<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InsertActivitiesInTblactivities extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('tblactivities')->insert(
				['activity_time' => '2022-05-04 14:00:00',	//  4 мая 2022 года с 14.00 до 16.00
				'activity_description' => 'Ярмарка вакансий деловой программы Чемпионата «Абилимпикс»',
				'activity_location' => 'Центр «Точка кипения»: пр. Ленина, 31',
				'necessary_help' => 'Волонтёры для помощи студентам с ОВЗ',
				'number_of_vacansion' => '3',
				'activity_status' => '1'
				]
			); 
		
		DB::table('tblactivities')->insert(
				['activity_time' => '2022-04-28 14:00:00',	//  28 апреля в 14:00
				'activity_description' => 'Профориентационный марафон "Твоя профессиональная перспектива" для абитуриентов с ОВЗ и инвалидностью',
				'activity_location' => 'Онлайн-формат',
				'necessary_help' => 'Волонтёры для помощи студентам с ОВЗ',
				'number_of_vacansion' => '1',
				'activity_status' => '1'
				]
			);
		
		DB::table('tblactivities')->insert(
				['activity_time' => '2022-04-27 12:00:00',	//  27 апреля 2022 г
				'activity_description' => 'Церемония открытия чемпионата «Абилимпикс» по профессиональному мастерству среди инвалидов и лиц с ограниченными возможностями здоровья',
				'activity_location' => 'Петрозаводский лесотехнический техникум',
				'necessary_help' => 'Волонтёры для помощи студентам с ОВЗ',
				'number_of_vacansion' => '12',
				'activity_status' => '1'
				]
			);
		
		DB::table('tblactivities')->insert(
				['activity_time' => '2021-12-13 9:00:00',	// 13 декабря 2021 г. в 9.00
				'activity_description' => 'Тренинг по социальному предпринимательству для лиц с ОВЗ',
				'activity_location' => 'Центр «Точка кипения – Петрозаводск» (пр.Ленина, 31)',
				'necessary_help' => 'Волонтёры для помощи студентам с ОВЗ',
				'number_of_vacansion' => '3',
				'activity_status' => '1'
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
        DB::table('tblactivities')->where('activity_description', '=' ,'Ярмарка вакансий деловой программы Чемпионата «Абилимпикс»')->delete();
		DB::table('tblactivities')->where('activity_description', '=' ,'Профориентационный марафон "Твоя профессиональная перспектива" для абитуриентов с ОВЗ и инвалидностью')->delete();
		DB::table('tblactivities')->where('activity_description', '=' ,'Церемония открытия чемпионата «Абилимпикс» по профессиональному мастерству среди инвалидов и лиц с ограниченными возможностями здоровья')->delete();
		DB::table('tblactivities')->where('activity_description', '=' ,'Тренинг по социальному предпринимательству для лиц с ОВЗ')->delete();
    }
}

