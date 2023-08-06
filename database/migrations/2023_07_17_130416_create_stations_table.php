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
        Schema::create('stations', function (Blueprint $table) {
            $table->integer('station_cd')->unique();
            $table->integer('station_g_cd');
            $table->string('station_name');
            $table->string('station_name_k')->nullable();
            $table->string('station_name_r')->nullable();
            $table->integer('line_cd');
            $table->integer('pref_cd')->nullable();
            $table->string('post')->nullable();
            $table->text('add')->nullable();
            $table->string('lon')->nullable();
            $table->string('lat')->nullable();
            $table->date('open_ymd')->nullable();
            $table->date('close_ymd')->nullable();
            $table->integer('e_status')->nullable();
            $table->integer('e_sort')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stations');
    }
};
