<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('medications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('medical_record_id')->constrained('medical_records');
            $table->string('name', 100);
            $table->string('dosage', 50);
            $table->string('frequency', 50);
            $table->string('duration', 50)->nullable();
            $table->text('notes')->nullable();
            $table->dateTime('created_at', 3)->nullable();
            $table->dateTime('updated_at', 3)->nullable();
            $table->dateTime('deleted_at', 3)->nullable()->index('idx_medications_deleted_at');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('medications');
    }
};
