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
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->dateTime('date');
            $table->integer('payment_100_quanity');
            $table->integer('payment_100_amount');
            $table->integer('payment_50_quanity');
            $table->integer('payment_50_amount');
            $table->integer('preorder_quanity');
            $table->integer('preorder_amount');
            $table->integer('total_sales');
            $table->integer('received');
            $table->integer('pending');
            $table->integer('check');
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
        Schema::dropIfExists('sales');
    }
};
