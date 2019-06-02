<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePraticiensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('praticiens', function (Blueprint $table) {
            $table->bigIncrements('idPraticien');
            $table->string('nom');
            $table->string('prenom');
            $table->string('ville');
            $table->integer('cpostal');
            $table->string('rue');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('praticiens');
    }
}
