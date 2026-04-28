<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('invoice_id')->nullable()->constrained()->nullOnDelete();
            $table->foreignId('client_id')->constrained()->restrictOnDelete();
            $table->enum('type', ['incoming', 'outgoing'])->default('incoming');
            $table->decimal('amount', 12, 2);
            $table->enum('method', ['cash', 'bank', 'card', 'online']);
            $table->string('reference')->nullable();
            $table->text('notes')->nullable();
            $table->timestamp('paid_at');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
