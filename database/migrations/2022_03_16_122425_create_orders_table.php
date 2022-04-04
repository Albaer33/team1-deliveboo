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
            $table->string('restaurant_id');
            $table->string('indirizzo', 50);
            $table->text('dettaglio');
            $table->text('codice_transazione')->nullable();
            $table->decimal('totale', 5, 2);
            $table->string('email', 50);
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
