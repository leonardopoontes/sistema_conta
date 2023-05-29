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
//        Schema::table('debitos', function (Blueprint $table) {
//            $table->unsignedBigInteger('month_id');
//            $table->foreign('month_id')->references('id')->on('add_month_id');
//        });
//
//        Schema::table('ganhos', function (Blueprint $table) {
//            $table->unsignedBigInteger('month_id');
//            $table->foreign('month_id')->references('id')->on('add_month_id');
//        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('debitos', function (Blueprint $table) {
            //
        });
    }
};
