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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('invoice_number')->unique();
            $table->string('customer_name');
            $table->text('customer_address');
            $table->string('customer_email')->nullable();
            $table->string('customer_phone')->nullable();
            $table->date('invoice_date');
            $table->date('due_date');
            $table->decimal('total_amount', 10, 2);
            $table->string('status')->default('pending'); // E.g., pending, paid, overdue
            $table->decimal('discount_value', 8, 2)->default(0.00);
            $table->string('discount_type')->default('none'); // E.g., none, fixed, percentage
            $table->decimal('tax_rate', 5, 2)->nullable();
            $table->decimal('tax_amount', 10, 2)->nullable();
            $table->string('currency')->default('USD');
            $table->text('notes')->nullable();
            $table->string('payment_method')->nullable(); // E.g., credit card, bank transfer
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
