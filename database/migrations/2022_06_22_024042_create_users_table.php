<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('role_id')->unsigned();
            $table->bigInteger('gereja_id')->unsigned();
            $table->boolean('is_registered_as_seller')->nullable();
            $table->string('email',250);
            $table->string('username',250);
            $table->string('password',250);
            $table->string('no_telepon',250);
            $table->string('jenis_kelamin',250);
            $table->string('foto_profil',250);
            $table->timestamp('created_at')->nullable();
            $table->string('created_by',250)->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('updated_by',250)->nullable();

            $table->foreign('role_id')->references('id')->on('role');
            $table->foreign('gereja_id')->references('id')->on('gereja');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
