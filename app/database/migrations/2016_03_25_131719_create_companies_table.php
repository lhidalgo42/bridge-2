<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('rut')->unique();
            $table->string('business_name');
            $table->integer('status_id');
            $table->string('giro');
            $table->string('address');
            $table->string('commune');
            $table->string('city');
            $table->string('phone');
            $table->integer('acteco');
            $table->date('fechaRes');
            $table->integer('numRes');
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
        Schema::drop('companies');
    }
}
