<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCategoriaIdToPiattiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('piatti', function (Blueprint $table) {
            
            $table->unsignedBigInteger('categoria_id')->after('ristorante_id');

            $table->foreign('categoria_id')
                ->references('id')
                ->on('categorie');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('piatti', function (Blueprint $table) {
            $table->dropForeign('piatti_categoria_id_foreign');
            $table->dropColumn('categoria_id');
        });
    }
}
