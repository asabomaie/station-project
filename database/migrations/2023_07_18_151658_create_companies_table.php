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
        Schema::create('companies', function (Blueprint $table) {
            $table->integer('company_cd')->unique();
            $table->integer('rr_cd');
            $table->string('company_name');
            $table->string('company_name_k')->nullable();
            $table->string('company_name_h')->nullable();
            $table->string('company_name_r')->nullable();
            $table->string('company_url')->nullable();
            $table->integer('company_type')->nullable();
            $table->integer('e_status')->nullable();
            $table->integer('e_sort')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
