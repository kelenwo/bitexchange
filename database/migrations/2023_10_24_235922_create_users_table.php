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
        if (!Schema::hasTable('users')) {
            Schema::create('users', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('username')->unique();
                $table->string('email')->unique();
                $table->string('country');
                $table->string('password');
                $table->string('usdt')->nullable();
                $table->string('eth')->nullable();
                $table->string('btc')->nullable();
                $table->string('bnb')->nullable();
                $table->string('trx')->nullable();
                $table->boolean('admin');
                $table->date('created')->nullable();
                $table->date('last_login')->nullable();
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
