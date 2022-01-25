<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvenementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evenements', function (Blueprint $table) {
            $table->id();
            $table->string('typeEvent');
            $table->string('titre');
            $table->string('sousTitre');
            $table->string('lieu');
            $table->integer('duree');
            $table->date('date');
            $table->string('animateur');
            $table->boolean('speaker');
            $table->string('ville');
            $table->string('apercu');
            $table->string('participer');
            $table->string('prerequis');
            $table->string('certification');
            $table->string('type');
            $table->string('prix');
            $table->string('description');
            $table->string('image');
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
        Schema::dropIfExists('evenements');
    }
}
