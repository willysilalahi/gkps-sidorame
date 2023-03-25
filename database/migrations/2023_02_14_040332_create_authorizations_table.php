<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuthorizationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('authorizations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('roles_id')->nullable();
            $table->unsignedBigInteger('menus_id')->nullable();
            $table->unsignedBigInteger('authorization_types_id')->nullable();

            $table->foreign('roles_id')->references('id')->on('roles')->onDelete('cascade');
            $table->foreign('menus_id')->references('id')->on('menus')->onDelete('cascade');
            $table->foreign('authorization_types_id')->references('id')->on('authorization_types')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('authorizations');
    }
}
