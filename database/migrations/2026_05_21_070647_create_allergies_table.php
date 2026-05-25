<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('allergies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id')->constrained('patients');
            $table->string('allergen', 100);
            $table->enum('severity', ['mild', 'moderate', 'severe']);
            $table->string('reaction', 255)->nullable();
            $table->date('noted_date')->nullable();
            $table->dateTime('created_at', 3)->nullable();
            $table->dateTime('updated_at', 3)->nullable();
            $table->dateTime('deleted_at', 3)->nullable()->index('idx_allergies_deleted_at');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('allergies');
    }
};
