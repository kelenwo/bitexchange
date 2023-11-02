<?php

use App\Models\Users;
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
        $user = Users::firstOrNew(['email' => 'user@example.com']);
        if ($user) {
            $user->name = 'Admin';
            $user->username = 'admin';
            $user->email = 'admin@v9ai.de';
            $user->country = 'Germany';
            $user->admin = true;
            $user->password = bcrypt('Alimayorru1');

            $user->save();
        }

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
