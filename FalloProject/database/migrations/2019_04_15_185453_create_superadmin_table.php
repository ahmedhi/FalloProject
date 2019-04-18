<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuperadminTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('superAdmin', function (Blueprint $table) {
          $table->integer('id')->references('id')->on('AllUser')primary();
          $table->string('user_Name')->unique;
          $table->string('mot_de_passe');
          $table->string('nom');
          $table->string('prenom');
          $table->string('mail')->reference('id')->on('AllUser');
          $table->string('tel')->unique;
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
        Schema::dropIfExists('superAdmin');
    }
}
