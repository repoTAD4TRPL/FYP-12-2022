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
        Schema::create('detail_invoice', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('invoice_id')->unsigned();
            $table->bigInteger('produk_id')->unsigned();
            $table->bigInteger('jumlah')->nullable();
            $table->string('status_pembayaran',225)->nullable();
            $table->timestamp('created_at')->nullable();
            $table->string('created_by',250)->nullable();

            $table->foreign('invoice_id')->references('id')->on('invoice');
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
        Schema::dropIfExists('detail_invoice');
    }
};
