<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableOrderDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_order_detail', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_order');
            $table->integer('id_product');
            $table->integer('quantity');
            $table->string('name', 255);
            $table->string('code_product', 255);
            $table->double('price');
            $table->double('price_sale');
            $table->string('color', 255);
            $table->string('size', 255);
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
        Schema::dropIfExists('table_order_detail');
    }
}
