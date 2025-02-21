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
        Schema::table('roles', function (Blueprint $table) {
            $table->string('display_name')->default('');
        });

        DB::table('roles')
          ->where('id', 5)
          ->update([
            'display_name' => 'Project owner',
          ]);

        DB::table('roles')
          ->where('id', 6)
          ->update([
            'display_name' => 'Administrator',
          ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
