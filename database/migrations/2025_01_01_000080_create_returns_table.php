<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('returns', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->constrained()->restrictOnDelete();
            $table->foreignId('client_id')->constrained()->restrictOnDelete();
            $table->foreignId('manager_id')->nullable()->constrained('users')->nullOnDelete();
            $table->string('number')->unique();
            $table->enum('status', [
                'created',
                'approved',
                'rejected',
                'goods_received',
                'refunded',
            ])->default('created');
            $table->text('reason');
            $table->decimal('amount', 12, 2);
            $table->enum('refund_method', ['cash', 'bank', 'card'])->nullable();
            $table->timestamp('refunded_at')->nullable();
            $table->string('pdf_path')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('returns');
    }
};
