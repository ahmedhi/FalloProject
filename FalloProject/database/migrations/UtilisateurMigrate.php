<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUtilisateurTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utilisateur', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_Name')->unique;
            $table->string('mot_de_passe');
            $table->string('nom');
            $table->string('prenom');
            $table->string('mail');
            $table->string('tel')->unique;
            //Image $table->string('img');
            $table->double('taille', 15, 8);
            $table->double('poids', 15, 8);
            $table->date('date_de_naissance');
            $table->string('sexe');
            $table->string('pays');
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
        Schema::dropIfExists('utilisateur');
    }
}
