<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblcontent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblcontent', function (Blueprint $table) {
            $table->increments('id')->autoIncrement();
            $table->string('page_title');
			$table->boolean('page_status');
			$table->text('content');
			$table->text('footer');
			$table->text('nav');
			$table->text('nav_admin');
			$table->dateTime('date_create');
			$table->string('category');
			$table->text('scripts');
						
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
        Schema::dropIfExists('tblcontent');
    }
}
