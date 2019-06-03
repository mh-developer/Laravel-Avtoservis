<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAvtoservisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::defaultStringLength(191);
        Schema::create('avtoservis', function (Blueprint $table) {
            $table->bigIncrements('id_avtoservis');
            $table->string('poslovalnica');
            $table->string('postna_stevilka');
            $table->string('naslov');
            $table->string('telefonska_stevilka');

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
        Schema::dropIfExists('avtoservis');
    }
}
