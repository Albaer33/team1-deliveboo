<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePiattiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('piatti', function (Blueprint $table) {
            //da sistemare le categorie dei dati
            $table->id();
            $table->string('nome', 15);
            $table->string('slug', 15)->unique();
            $table->text('descrizione');
            $table->decimal('prezzo', 5, 2);
            $table->text('immagine');
            $table->boolean('visibile');
            $table->unsignedBigInteger('ristorante_id');
            $table->timestamps();

            $table->foreign('ristorante_id')
                ->references('id')
                ->on('ristorante_info');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('piatti');
    }
}
