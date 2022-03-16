<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePiattiOrdiniTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('piatti_ordini', function (Blueprint $table) {
            
            $table->unsignedBigInteger('piatti_id');
            $table->foreign('piatti_id')->references('id')->on('piatti');

            $table->unsignedBigInteger('ordini_id');
            $table->foreign('ordini_id')->references('id')->on('ordini');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('piatti_ordini');
    }
}
