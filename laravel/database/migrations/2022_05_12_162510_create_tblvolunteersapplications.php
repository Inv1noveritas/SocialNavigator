<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblvolunteersapplications extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblvolunteersapplications', function (Blueprint $table) {
            $table->increments('id')->autoIncrement();
			$table->dateTime('activity_time')->nullable($value = true);
			$table->string('volonteer_name');
			$table->string('volonteer_email', 200);
			$table->string('volonteer_institute')->nullable($value = true);
			$table->char('volonteer_phone_number',17)->nullable($value = true);
			$table->char('volonteer_cours',2)->nullable($value = true);
			$table->char('volonteer_group',10)->nullable($value = true);
			$table->integer('id_activities')->unsigned();
			$table->foreign('id_activities')->references('id')->on('tblactivities');
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
        Schema::dropIfExists('tblvolunteersapplications');
    }
}
