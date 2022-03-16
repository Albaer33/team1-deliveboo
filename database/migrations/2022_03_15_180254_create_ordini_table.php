<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdiniTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordini', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 15);
            $table->string('indirizzo', 50);
            $table->text('dettaglio');
            $table->string('carta', 20);
            $table->decimal('totale', 5, 2);
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
        Schema::dropIfExists('ordini');
    }
}
