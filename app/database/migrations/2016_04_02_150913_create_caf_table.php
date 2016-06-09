<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCafTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cafs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('companies_id');
            $table->string('filename');
            $table->date('date');
            $table->integer('type');
            $table->integer('from');
            $table->integer('to');
            $table->integer('current');
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
        Schema::drop('cafs');
    }
}
