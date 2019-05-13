<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->bigIncrements('id_avtomobila');

            $table->unsignedBigInteger('id_uporabnika');

            $table->string('znamka', 191);
            $table->string('model', 191);
            $table->string('opis', 191)->nullable();
            $table->year('leto_prve_registracije');
            $table->timestamps();

            $table->foreign('id_uporabnika')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
}
