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
        Schema::create('ganhos', function (Blueprint $table) {
            $table->id();
            $table->string('fonte');
            $table->float('ganho');
            $table->date('data');
            $table->timestamps();
//            $table->unsignedBigInteger('month_id');
//            $table->foreign('month_id')->references('id')->on('months_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ganhos');
    }
};
