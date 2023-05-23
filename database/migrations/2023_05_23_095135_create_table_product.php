<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_product', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_category');
            $table->integer('id_color');
            $table->integer('id_size');
            $table->string('image', 255)->nullable();
            $table->string('slug', 255);
            $table->string('name', 255);
            $table->mediumText('desc')->nullable();
            $table->mediumText('content')->nullable();
            $table->string('code', 255)->nullable();
            $table->double('price');
            $table->double('price_sale');
            $table->integer('discount');
            $table->integer('quantity');
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
        Schema::dropIfExists('table_product');
    }
}
