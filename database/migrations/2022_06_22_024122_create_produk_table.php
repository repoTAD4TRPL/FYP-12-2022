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
        Schema::create('produk', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('kategori_produk_id')->unsigned();
            $table->string('nama_produk',250);
            $table->text('deskripsi_produk')->nullable();
            $table->text('spesifikasi_produk')->nullable();
            $table->string('gambar_produk',250)->nullable();
            $table->bigInteger('harga_produk');
            $table->float('rating');
            $table->timestamp('created_at')->nullable();
            $table->string('created_by',250)->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('updated_by',250)->nullable();

            $table->foreign('kategori_produk_id')->references('id')->on('kategori_produk');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produk');
    }
};
