<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('vital_signs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('medical_record_id')->constrained('medical_records');
            $table->string('blood_pressure', 20)->nullable();
            $table->bigInteger('heart_rate')->nullable();
            $table->double('temperature')->nullable();
            $table->bigInteger('respiratory_rate')->nullable();
            $table->bigInteger('oxygen_saturation')->nullable();
            $table->double('weight')->nullable();
            $table->double('height')->nullable();
            $table->dateTime('recorded_at', 3);
            $table->dateTime('created_at', 3)->nullable();
            $table->dateTime('updated_at', 3)->nullable();
            $table->dateTime('deleted_at', 3)->nullable()->index('idx_vital_signs_deleted_at');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('vital_signs');
    }
};
