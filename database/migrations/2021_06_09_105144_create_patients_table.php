<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->bigIncrements('id_patient');
            $table->date('date');
            $table->longText('image_patient')->nullable();
            $table->string('nom_patient');
            $table->string('prenom_patient');
            $table->string('nee');
            $table->string('tel');
            $table->string('adresse');
            $table->string('lieu');
            $table->string('nom_prenom_med');
            $table->string('tel_med');
            $table->string('specialite_med');
            $table->string('vaccin');
            $table->string('email_user')->nullable();
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
        Schema::dropIfExists('patients');
    }
}
