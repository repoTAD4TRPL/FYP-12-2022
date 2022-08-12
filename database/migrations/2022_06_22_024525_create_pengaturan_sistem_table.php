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
        Schema::create('pengaturan_sistem', function (Blueprint $table) {
            $table->id();
            $table->string('key',250)->nullable();
            $table->text('value',250)->nullable();
            $table->timestamp('created_at')->nullable();
            $table->string('created_by',250)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengaturan_sistem');
    }
};
