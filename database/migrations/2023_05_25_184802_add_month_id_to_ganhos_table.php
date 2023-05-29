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
        Schema::table('ganhos', function (Blueprint $table) {
            $table->foreignId('month_id')->constrained('months');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ganhos', function (Blueprint $table) {
            $table->dropForeign(['month_id']);
            $table->dropColumn('month_id');
        });

    }
};