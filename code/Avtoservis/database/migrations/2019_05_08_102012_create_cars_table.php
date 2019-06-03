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
        Schema::defaultStringLength(191);
        Schema::create('cars', function (Blueprint $table) {
            $table->bigIncrements('id_avtomobila');

            $table->unsignedBigInteger('id_uporabnika');

            $table->string('znamka');
            $table->string('model');
            $table->text('opis')->nullable();
            $table->year('leto_prve_registracije');

            $table->boolean('is_active')->default(true);

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
