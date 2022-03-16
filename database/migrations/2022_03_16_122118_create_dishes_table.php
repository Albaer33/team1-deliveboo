<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDishesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dishes', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 15);
            $table->string('slug', 15)->unique();
            $table->text('descrizione');
            $table->decimal('prezzo', 5, 2);
            $table->text('immagine');
            $table->boolean('visibile');
            $table->unsignedBigInteger('restaurants_id');
            $table->timestamps();

            $table->foreign('restaurants_id')
                ->references('id')
                ->on('restaurants');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dishes');
    }
}
