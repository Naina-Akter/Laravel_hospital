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
        Schema::create('addmission', function (Blueprint $table) {
            $table->id();
            $table -> string('patient_name');
            $table->string('seat');
            $table->string('department');
            $table->string('addmission_date');
            $table->string('release_date');
            $table->string('total_bill');
            $table->string('status')->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('addmission');
    }
};
