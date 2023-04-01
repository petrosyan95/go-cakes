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
            $table->string('name_en')->nullable();
            $table->string('name_se')->nullable();
            $table->string('email');
            $table->string('phone number');
            $table->json('images')->nullable();
            $table->text('description_en')->nullable();
            $table->text('description_se')->nullable();
            $table->string('price');
            $table->string('taste')->nullable();
            $table->string('design')->nullable();
            $table->foreignId('product_id')->constrained('products')->cascadeOnDelete();
            $table->foreignId('product_categories_id')->constrained('product_categories')->cascadeOnDelete();
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
