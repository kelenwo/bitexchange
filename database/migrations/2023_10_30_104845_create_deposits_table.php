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
        Schema::create('deposits', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('gateway_id');
            $table->unsignedBigInteger('plan_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('gateway_id')->references('id')->on('gateways');
            $table->foreign('plan_id')->references('id')->on('plans');
            $table->decimal('amount', 10, 2);
            $table->decimal('profit', 10, 2);
            $table->string('hash');
            $table->string('receipt')->nullable();
            $table->string('transaction_id');
            $table->string('status');
            $table->timestamp('profit_updated_at');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deposits');
    }
};
