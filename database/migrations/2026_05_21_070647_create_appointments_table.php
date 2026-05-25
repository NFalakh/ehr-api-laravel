<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id')->constrained('patients');
            $table->foreignId('doctor_id')->constrained('users');
            $table->dateTime('appointment_date', 3);
            $table->enum('status', ['scheduled', 'completed', 'cancelled', 'no_show'])->default('scheduled');
            $table->text('reason')->nullable();
            $table->text('notes')->nullable();
            $table->dateTime('created_at', 3)->nullable();
            $table->dateTime('updated_at', 3)->nullable();
            $table->dateTime('deleted_at', 3)->nullable()->index('idx_appointments_deleted_at');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
