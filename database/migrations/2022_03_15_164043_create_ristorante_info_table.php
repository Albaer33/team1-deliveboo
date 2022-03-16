<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRistoranteInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ristorante_info', function (Blueprint $table) {
            $table->id();
            $table->string('nome_attivita', 30);
            $table->string('P_IVA', 50);
            $table->string('tipologia', 20);
            $table->string('telefono', 15);
            $table->string('indirizzo', 50);
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')
                ->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ristorante_info');
    }
}
