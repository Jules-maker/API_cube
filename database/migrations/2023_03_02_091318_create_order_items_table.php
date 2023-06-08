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
        Schema::create('order_items', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('quantity')->default(1);
            $table->integer('price')->randomFloat(2, 10, 500)->default(0);
            $table->unsignedBigInteger('orders_id')->nullable();
            $table->foreign('orders_id')->references('id')->on('orders');
            $table->unsignedBigInteger('products_id')->nullable();
            $table->foreign('products_id')->references('id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_items');
    }
};
