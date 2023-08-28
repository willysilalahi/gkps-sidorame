<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persons', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('family_id')->nullable();
            $table->string('name', 100);
            $table->tinyInteger('gender');
            $table->string('place_of_birth')->nullable();
            $table->string('date_of_birth')->nullable();
            $table->tinyInteger('categorial')->nullable();
            $table->tinyInteger('baptis')->nullable();
            $table->tinyInteger('sidi')->nullable();
            $table->date('date_of_baptis')->nullable();
            $table->date('date_of_sidi')->nullable();
            $table->date('date_of_wedding')->nullable();
            $table->timestamps();

            $table->foreign('family_id')->references('id')->on('family')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('persons');
    }
}
