<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('medical_records', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id')->constrained('patients')->onDelete('cascade');
            $table->text('diagnosis');
            $table->string('treatment', 255)->nullable();
            $table->text('prescription')->nullable();
            $table->date('visit_date');
            $table->text('notes')->nullable();
            $table->dateTime('created_at', 3)->nullable();
            $table->dateTime('updated_at', 3)->nullable();
            $table->foreignId('doctor_id')->constrained('users');
            $table->text('chief_complaint');
            $table->text('treatment_plan')->nullable();
            $table->dateTime('deleted_at', 3)->nullable()->index('idx_medical_records_deleted_at');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('medical_records');
    }
};
