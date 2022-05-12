<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblnews extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblnews', function (Blueprint $table) {
            $table->increments('id')->autoIncrement();
            $table->string('news_title');
			$table->text('news_text');
			$table->string('news_added_files')->nullable($value = true);
			$table->string('news_links')->nullable($value = true);
			$table->boolean('news_status');
			$table->dateTime('news_date_of_creation');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tblnews');
    }
}
