<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblads extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblads', function (Blueprint $table) {
            $table->increments('id')->autoIncrement();
            $table->string('ad_title');
            $table->text('ad_text');
			$table->string('ad_added_files')->nullable($value = true);
			$table->string('ad_links')->nullable($value = true);
			$table->boolean('ad_status');			
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
        Schema::dropIfExists('tblads');
    }
}
