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
        Schema::create('joins', function (Blueprint $table) {
            $table->integer('line_cd')->nullable();
            $table->integer('station_cd1')->nullable();
            $table->integer('station_cd2')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('joins');
    }
};
