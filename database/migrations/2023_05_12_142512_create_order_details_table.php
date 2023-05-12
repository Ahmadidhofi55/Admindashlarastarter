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
        Schema::create('order_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('order_id');
            $table->foreign('order_id')
            ->references('id')
            ->on('orders')
            ->onUpdate('cascade')
            ->onDelete('NO ACTION');
            $table->unsignedBigInteger('id_metode');
            $table->foreign('id_metode')
            ->references('id')
            ->on('metode_pembayarans')
            ->onUpdate('cascade')
            ->onDelete('NO ACTION');
            $table->unsignedBigInteger('id_produk');
            $table->foreign('id_produk')
            ->references('id')
            ->on('produks')
            ->onUpdate('cascade')
            ->onDelete('NO ACTION');
            $table->integer('jumlah');
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
        Schema::dropIfExists('order_details');
    }
};
