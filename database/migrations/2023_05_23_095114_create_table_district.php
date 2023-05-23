<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableDistrict extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_district', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_city');
            $table->string('name', 255);
            $table->string('code', 3);
            $table->string('lever', 255);
            $table->integer('numb');
            $table->string('status', 255);
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
        Schema::dropIfExists('table_district');
    }
}
