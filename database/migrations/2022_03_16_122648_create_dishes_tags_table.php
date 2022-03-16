<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDishesTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dishes_tags', function (Blueprint $table) {
            $table->unsignedBigInteger('dishes_id');
            $table->foreign('dishes_id')->references('id')->on('dishes');

            $table->unsignedBigInteger('tags_id');
            $table->foreign('tags_id')->references('id')->on('tags');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dishes_tags');
    }
}
