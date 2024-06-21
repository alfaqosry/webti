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
        Schema::create('perpustakaans', function (Blueprint $table) {
            $table->id();
            $table->string('judul_buku');
            $table->string('penulis');
            $table->string('tahun_buku');
            $table->string('penerbit_buku')->nullable();
            $table->foreignId('kategori_buku_id')->references('id')->on('kategori_bukus')->onDelete('cascade');
            $table->string('nisbn');
            $table->string('src_buku')->nullable();
            $table->string('foto_sampul');
            $table->string('pdf_buku')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('perpustakaans');
    }
};
