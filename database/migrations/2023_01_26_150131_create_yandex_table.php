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
            $table->integer('consumption')->nullable();
            $table->integer('visits_total')->nullable();
            $table->integer('visits_new')->nullable();
            $table->integer('sales_quanity')->nullable();
            $table->integer('sales_amount')->nullable();
            $table->integer('sales_check')->nullable();
            $table->integer('ROMI')->nullable();
            $table->integer('CPS')->nullable();
            $table->integer('CRS')->nullable();
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
