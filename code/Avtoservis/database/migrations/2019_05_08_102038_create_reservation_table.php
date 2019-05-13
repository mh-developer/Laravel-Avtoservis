<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::defaultStringLength(191);
        Schema::create('reservation', function (Blueprint $table) {
            $table->bigIncrements('id_rezervacije');

            $table->unsignedBigInteger('id_uporabnika');

            $table->string('ime');
            $table->string('priimek');
            $table->string('znamka');
            $table->string('model');
            $table->string('opis')->nullable();
            $table->year('leto_prve_registracije');
            $table->timestamps();

            $table->foreign('id_uporabnika')->references('id')->on('users');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservation');
    }
}
