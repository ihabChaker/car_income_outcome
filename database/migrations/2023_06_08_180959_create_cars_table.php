<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('license_plate');
            $table->unsignedInteger('car_buyer_id');
            $table->integer('buy_price');
            $table->integer('repair_parts');
            $table->unsignedInteger('repair_parts_buyer_id');
            $table->integer('electricity');
            $table->unsignedInteger('electricity_buyer_id');
            $table->integer('mechanism');
            $table->unsignedInteger('mechanism_buyer_id');
            $table->integer('tole');
            $table->unsignedInteger('tole_buyer_id');
            $table->integer('selling_price');
            $table->unsignedInteger('payment_reciever_id');
            $table->timestamps();
            $table->foreign('car_buyer_id')->references('id')->on('employees');
            $table->foreign('repair_parts_buyer_id')->references('id')->on('employees');
            $table->foreign('electricity_buyer_id')->references('id')->on('employees');
            $table->foreign('mechanism_buyer_id')->references('id')->on('employees');
            $table->foreign('tole_buyer_id')->references('id')->on('employees');
            $table->foreign('payment_reciever_id')->references('id')->on('employees');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};