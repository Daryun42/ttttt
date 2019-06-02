<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visites', function (Blueprint $table) {
            $table->bigIncrements('idVisite');
            $table->String('status')->nullable();
            $table->date('jourVisite');
            $table->time('heureVisite');
            $table->text('compteRendu')->nullable();
            $table->integer('idEchantillon')->unsigned();
            $table->foreign('idEchantillon')->references('idEchantillon')->on('echantillons');
            $table->integer('idPraticien')->unsigned();
            $table->foreign('idPraticien')->references('idPraticien')->on('praticiens');
            $table->integer('idVisiteur')->unsigned();
            $table->foreign('idVisiteur')->references('id')->on('visiteurs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('visites');
    }
}