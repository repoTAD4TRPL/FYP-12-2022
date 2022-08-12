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
        Schema::create('invoice', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('toko_id')->unsigned();
            $table->bigInteger('pemesanan_id')->nullable();
            $table->bigInteger('total_harga')->nullable();
            $table->bigInteger('pajak')->nullable();
            $table->string('status_pembayaran',250)->nullable();
            $table->timestamp('created_at')->nullable();
            $table->string('created_by',250)->nullable();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('pemesanan_id')->references('id')->on('pemesanan');
            $table->foreign('toko_id')->references('id')->on('toko');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoice');
    }
};
