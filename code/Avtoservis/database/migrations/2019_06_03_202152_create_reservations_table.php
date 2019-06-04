<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('reservations', function (Blueprint $table) {
            $table->bigIncrements('id_rezervacije');

            $table->unsignedBigInteger('id_uporabnika');
            $table->unsignedBigInteger('id_storitve');
            $table->unsignedBigInteger('id_avtoservis');
            $table->unsignedBigInteger('id_avtomobila');

            $table->dateTime('termin');
            $table->text('dodatni_opis');

            $table->boolean('is_confirm')->default(false);
            $table->timestamps();

            $table->foreign('id_uporabnika')->references('id')->on('users');
            $table->foreign('id_storitve')->references('id_storitve')->on('services');
            $table->foreign('id_avtoservis')->references('id_avtoservis')->on('avtoservis');
            $table->foreign('id_avtomobila')->references('id_avtomobila')->on('cars');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservations');
    }
}
