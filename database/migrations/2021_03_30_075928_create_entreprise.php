<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntreprise extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entreprise', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom_entreprise');
            $table->string('domaine_entreprise');
            $table->string('adresse_entreprise');
            $table->integer('nombre_stagiaire_entreprise');
            $table->string('zipcode_entreprise');
            $table->string('pays_entreprise');
            $table->string('mail_entreprise');
            $table->float('confiance_entreprise');
            $table->float('note_entreprise')->nullable();
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
        Schema::dropIfExists('entreprise');
    }
}
