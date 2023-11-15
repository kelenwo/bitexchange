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

        Schema::table('plans', function (Blueprint $table) {
            $table->integer('duration');
            $table->string('frequency');
            $table->integer('min');
            $table->integer('max');
            $table->integer('roi');

        });


    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('plans', function (Blueprint $table) {
            $table->dropColumn('frequency');
            $table->dropColumn('min');
            $table->dropColumn('max');
        });
    }
};
