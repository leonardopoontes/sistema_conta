<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('debitos', function (Blueprint $table) {
            $table->foreignId('month_id')->constrained('months');
        });
    }

    public function down()
    {
        Schema::table('debitos', function (Blueprint $table) {
            $table->dropForeign(['month_id']);
            $table->dropColumn('month_id');
        });
    }
};
