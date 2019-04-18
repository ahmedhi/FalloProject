<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUtilisateursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utilisateur', function (Blueprint $table) {
            $table->integer('id')->references('id')->on('AllUser')->primary();
            $table->string('user_Name')->unique;
            $table->string('mot_de_passe');
            $table->string('nom');
            $table->string('prenom');
            $table->string('mail')->reference('id')->on('AllUser');
            $table->string('tel')->unique;
            $table->string('img');
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