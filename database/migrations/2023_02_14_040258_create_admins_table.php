<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('roles_id')->nullable();
            $table->string('name', 100);
            $table->string('username', 100);
            $table->text('profile_image_path')->nullable();
            $table->string('password');
            $table->tinyInteger('is_active');
            $table->string('token')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('roles_id')->references('id')->on('roles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admins');
    }
}
