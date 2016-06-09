<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDtesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dtes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('type');
            $table->integer('folio');
            $table->integer('sender_id');
            $table->date('fecha');
            $table->integer('receiver_id');
            $table->string('rut');
            $table->integer('neto');
            $table->integer('exento');
            $table->integer('iva');
            $table->integer('descuento');
            $table->integer('total');
            $table->integer('ivanoret');
            $table->integer('ivarc');
            $table->integer('status');
            $table->integer('sended_sii');
            $table->integer('verificate_sii');
            $table->integer('sended_receiver');
            $table->integer('token_sii');
            $table->smallInteger('tipo')->comment("1 indica Enviado,2 Recibido");
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
        Schema::drop('dtes');
    }
}
