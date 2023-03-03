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
        Schema::create('keywords', function (Blueprint $table) {
            $table->id();
            $keywords = $table->string('keywords',150);
            $table->unsignedBigInteger('responses_id')->nullable();
            $table->foreign('responses_id')->references('id')->on('responses');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('keywords');
    }
};
