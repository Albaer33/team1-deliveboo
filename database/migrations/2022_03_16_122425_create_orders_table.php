<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 25);
            $table->string('indirizzo', 50);
            $table->text('dettaglio');
            $table->string('codice_transazione', 30)->nullable();
            $table->decimal('totale', 5, 2);
            $table->string('email', 30);
            $table->string('telefono', 15);
            $table->boolean('pagato')->nullable();
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
        Schema::dropIfExists('orders');
    }
}
