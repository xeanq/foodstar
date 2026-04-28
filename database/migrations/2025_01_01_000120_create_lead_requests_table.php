<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // Входящие заявки с сайта и тг-бота до создания полноценного заказа
        Schema::create('lead_requests', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone', 20)->nullable();
            $table->string('email')->nullable();
            $table->text('message')->nullable();
            $table->enum('source', ['site', 'telegram', 'phone', 'whatsapp'])->default('site');
            $table->enum('status', ['new', 'in_progress', 'converted', 'rejected'])->default('new');
            $table->foreignId('client_id')->nullable()->constrained()->nullOnDelete();
            $table->foreignId('order_id')->nullable()->constrained()->nullOnDelete();
            $table->foreignId('manager_id')->nullable()->constrained('users')->nullOnDelete();
            $table->bigInteger('telegram_id')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('lead_requests');
    }
};
