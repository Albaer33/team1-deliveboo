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
            $table->string('nome', 50);
            $table->string('slug', 60)->unique();
            $table->text('descrizione')->nullable();
            $table->decimal('prezzo', 5, 2);
            $table->text('ingredienti')->nullable();
            // NULLABLE AD RIMUOVERE
            $table->text('immagine')->nullable();
            $table->boolean('visibile')->nullable();
            $table->unsignedBigInteger('restaurant_id')->nullable();
            $table->timestamps();

            $table->foreign('restaurant_id')
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
