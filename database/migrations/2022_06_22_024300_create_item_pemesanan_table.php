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
        Schema::create('item_pemesanan', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('pemesanan_id')->unsigned();
            $table->bigInteger('produk_id')->unsigned();
            $table->bigInteger('jumlah')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->string('created_by',250)->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('updated_by',250)->nullable();

            $table->foreign('pemesanan_id')->references('id')->on('pemesanan');
            $table->foreign('produk_id')->references('id')->on('produk');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('item_pemesanan');
    }
};
