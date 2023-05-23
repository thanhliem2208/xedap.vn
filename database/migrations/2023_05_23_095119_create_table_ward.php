<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableWard extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_ward', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_city');
            $table->integer('id_district');
            $table->string('name', 255);
            $table->string('code', 5);
            $table->string('lever', 100);
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
        Schema::dropIfExists('table_ward');
    }
}
