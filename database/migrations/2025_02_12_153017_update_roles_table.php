<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('roles', function (Blueprint $table) {
            $table->string('name')->default('');
            $table->dropColumn('role');
        });

        DB::table('roles')->insert([
            'name' => 'administrator',
        ]);
        DB::table('roles')->insertGetId([
            'name' => 'project_owner',
        ]);

        Schema::table('users', function (Blueprint $table) {
            $table->foreignId('role_id')->default(6)->change();
            $table->boolean('active')->default(true)->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
