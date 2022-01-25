<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventRegistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_registers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('evenement_id')->references('id')->on('evenements');
            $table->string('name');
            $table->string('email');
            $table->string('pays');
            $table->string('phone');
            $table->string('province');
            $table->string('company');
            $table->string('departement');
            $table->string('position');
            $table->string('industrie');
            $table->string('phoneBureau');
            $table->boolean('status');
            $table->string('ref');
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
        Schema::dropIfExists('event_registers');
    }
}
