<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmploisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emplois', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->double('salaire');
            $table->date('expiration');
            $table->string('secteur');
            $table->string('pays');
            $table->string('ville');
            $table->string('contrat');
            $table->string('competence');
            $table->string('qualite');
            $table->string('prerequis');
            $table->string('apercu');
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
        Schema::dropIfExists('emplois');
    }
}
