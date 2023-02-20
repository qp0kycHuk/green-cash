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
            $table->integer('payment_100_quanity')->nullable();
            $table->integer('payment_100_sum')->nullable();
            $table->integer('payment_50_quanity')->nullable();
            $table->integer('payment_50_sum')->nullable();
            $table->integer('preorder_quanity')->nullable();
            $table->integer('preorder_sum')->nullable();
            $table->integer('total_sales')->nullable();
            $table->integer('received')->nullable();
            $table->integer('pending')->nullable();
            $table->integer('check')->nullable();
            $table->enum('preorder_for', ['2023', '2024', '2025', '2026', '2027']);
            $table->integer('preorder_for_quanity')->nullable();
            $table->integer('preorder_for_sum')->nullable();
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
