<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_id')->constrained()->restrictOnDelete();
            $table->foreignId('manager_id')->nullable()->constrained('users')->nullOnDelete();
            $table->string('number')->unique();
            $table->enum('status', [
                'new',
                'in_progress',
                'confirmed',
                'shipped',
                'delivered',
                'cancelled',
            ])->default('new');
            $table->enum('source', ['site', 'telegram', 'phone', 'whatsapp'])->default('site');
            $table->decimal('total', 12, 2)->default(0);
            $table->text('comment')->nullable();
            $table->text('delivery_address')->nullable();
            $table->timestamp('delivered_at')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
