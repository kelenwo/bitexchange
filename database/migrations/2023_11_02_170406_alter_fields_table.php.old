<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('fields', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
        });

        Schema::table('fields', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->nullable()->change();
            $table->boolean('settings');
        });

        Schema::table('fields', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('fields', function (Blueprint $table) {
            $table->string('user_id')->change();
            $table->dropColumn('settings');
        });
    }
};
