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
        Schema::create('produks', function (Blueprint $table) {
            $table->id();
            $table->string('nm_produk','150');
            $table->string('img');
            $table->unsignedBigInteger('merek_id');
            $table->foreign('merek_id')
            ->references('id')
            ->on('mereks')
            ->onUpdate('cascade')
            ->onDelete('restrict');
            $table->unsignedBigInteger('kategori_id');
            $table->foreign('kategori_id')
            ->references('id')
            ->on('kategoris')
            ->onUpdate('cascade')
            ->onDelete('restrict');
            $table->text('deskripsi');
            $table->string('harga');
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
        Schema::dropIfExists('produks');
    }
};
