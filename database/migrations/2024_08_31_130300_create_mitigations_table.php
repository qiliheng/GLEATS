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
        Schema::create('mitigations', function (Blueprint $table) {
            $table->id();
            $table->string('mitigation_description');
            $table->date('reassessment_date');
            $table->integer('new_risk_score');
            $table->foreignId('risk_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mitigations');
    }
};
