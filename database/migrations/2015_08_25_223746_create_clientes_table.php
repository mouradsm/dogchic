<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('clientes');

        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            //$table->integer('telefone_id')->unsigned();
            //$table->integer('endereco_id')->unsigned();
            $table->integer('animal_id')->unsigned();
            //$table->foreign('telefone_id')->references('id')->on('telefones');

        });

        Schema::table('clientes', function (Blueprint $table) {
            $table->foreign('animal_id')->references('id')->on('animals')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('clientes');
    }
}
