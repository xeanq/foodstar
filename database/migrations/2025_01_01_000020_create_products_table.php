<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained()->cascadeOnDelete();
            $table->string('name');
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->text('composition')->nullable();
            $table->decimal('price', 10, 2)->nullable();
            $table->decimal('price_old', 10, 2)->nullable();
            $table->string('unit')->default('кг');
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->boolean('is_hit')->default(false);
            $table->boolean('is_new')->default(false);
            $table->boolean('is_sale')->default(false);
            $table->integer('sort_order')->default(0);
            $table->decimal('proteins', 6, 2)->nullable();
            $table->decimal('fats', 6, 2)->nullable();
            $table->decimal('carbohydrates', 6, 2)->nullable();
            $table->decimal('calories', 7, 2)->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
