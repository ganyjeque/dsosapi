<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlocarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alocars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('data');
            $table->string('vendedor_nuit')->references('nuit')->on('vendedors');
            $table->string('musico_bi')->references('bi')->on('musicos');
            $table->string('albuns_id')->references('id')->on('albuns');
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
        Schema::dropIfExists('alocars');
    }
}
