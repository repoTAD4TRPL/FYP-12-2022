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
        Schema::create('gereja', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('resort_id')->unsigned();
            $table->string('nama_gereja',250);
            $table->timestamp('created_at')->nullable();
            $table->string('created_by',250)->nullable();

            $table->foreign('resort_id')->references('id')->on('resort');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gereja');
    }
};
