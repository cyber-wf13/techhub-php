<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductCharactersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_characters', function (Blueprint $table) {
            $table->id();
            $table->integer('product_article', false, true);
            $table->string('processor', 50);
            $table->integer('memory');
            $table->integer('ram');
            $table->string('videocard', 50)->nullable(true);
            $table->string('battery', 50)->nullable(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_characters');
    }
}
