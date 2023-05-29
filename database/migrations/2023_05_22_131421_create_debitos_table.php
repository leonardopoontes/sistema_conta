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
        Schema::create('debitos', function (Blueprint $table) {
            $table->id();
            $table->string('origem');
            $table->string('descricao');
            $table->float('valor');
            $table->date('vencimento');
            $table->timestamps();

            $table->foreignId('month_id')->constrained('months');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('debitos');
    }
};
