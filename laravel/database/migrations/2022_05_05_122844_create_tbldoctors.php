<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbldoctors extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbldoctors', function (Blueprint $table) {
            $table->increments('id')->autoIncrement();
            $table->string('doctor_name');
            $table->string('doctor_speciality');
			$table->string('doctor_phone_number', 15)->nullable($value = true);
			$table->string('doctor_email')->nullable($value = true);
			$table->string('doctor_job');		
			$table->boolean('doctor_status');
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
        Schema::dropIfExists('tbldoctors');
    }
}

