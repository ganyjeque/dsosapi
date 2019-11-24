<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlbunsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('albuns', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->string('image', 1000);
			$table->string('titulo', 300);
			$table->string('genero', 100);
			$table->string('ano', 100);
            $table->string('descricao', 1000);
            $table->string('musico_bi')->references('bi')->on('musicos');
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
        Schema::dropIfExists('albuns');
    }
}
