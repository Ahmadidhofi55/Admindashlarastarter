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
        Schema::create('pembayarans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_order');
            $table->foreign('id_order')
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
            $table->integer('total_pembayaran');
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
        Schema::dropIfExists('pembayarans');
    }
};
