<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCollectivesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collectives', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('reg-no');
            $table->string('industry');
            $table->string('country');
            $table->string('position');
            $table->string('city');
            $table->string('province');
            $table->string('website')->nullable();
            $table->string('firstName');
            $table->string('lastName');
            $table->string('email');
            $table->string('phone');
            $table->string('job-title');
            $table->string('representatives');
            $table->string('logo');
            $table->string('fFirstName');
            $table->string('fLastName');
            $table->string('fEmail');
            $table->string('fPhone');
            $table->string('fJob-title');
            $table->string('fullname');
            $table->string('positions');
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
        Schema::dropIfExists('collectives');
    }
}
