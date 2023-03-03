<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->integer('total_price');
            $table->date('order_date')->nullable();
            $table->boolean('status');
            $table->unsignedBigInteger('users_id')->nullable();
            $table->foreign('users_id')->references('id')->on('users');
            $table->unsignedBigInteger('address_id')->nullable();
            $table->foreign('address_id')->references('id')->on('address');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
