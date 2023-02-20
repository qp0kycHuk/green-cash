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
        Schema::create('yandex', function (Blueprint $table) {
            $table->id();
            $table->integer('balance')->nullable();
            $table->integer('money_in')->nullable();
            $table->integer('spending')->nullable();
            $table->integer('visits_total')->nullable();
            $table->integer('visits_new')->nullable();
            $table->integer('sales_quanity')->nullable();
            $table->integer('sales_sum')->nullable();
            $table->integer('sales_check')->nullable();
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
        Schema::dropIfExists('yandex');
    }
};
