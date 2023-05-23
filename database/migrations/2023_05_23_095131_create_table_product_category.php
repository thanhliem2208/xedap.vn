<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableProductCategory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_product_category', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_parent');
            $table->string('name', 255);
            $table->string('desc', 255);
            $table->mediumText('content');
            $table->string('slug', 255);
            $table->string('image', 255);
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
        Schema::dropIfExists('table_product_category');
    }
}
