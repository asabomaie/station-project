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
        Schema::create('lines', function (Blueprint $table) {
            $table->integer('line_cd')->unique();
            $table->integer('company_cd');
            $table->string('line_name');
            $table->string('line_name_k')->nullable();
            $table->string('line_name_h')->nullable();
            $table->string('line_color_c')->nullable();
            $table->string('line_color_t')->nullable();
            $table->integer('line_type')->nullable();
            $table->integer('lon')->nullable();
            $table->integer('lat')->nullable();
            $table->integer('zoom')->nullable();
            $table->integer('e_status')->nullable();
            $table->integer('e_sort')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lines');
    }
};
