<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('lab_results', function (Blueprint $table) {
            $table->id();
            $table->foreignId('medical_record_id')->constrained('medical_records');
            $table->string('test_name', 100);
            $table->string('result', 255);
            $table->string('unit', 50)->nullable();
            $table->string('reference_range', 100)->nullable();
            $table->dateTime('test_date', 3);
            $table->text('remarks')->nullable();
            $table->dateTime('created_at', 3)->nullable();
            $table->dateTime('updated_at', 3)->nullable();
            $table->dateTime('deleted_at', 3)->nullable()->index('idx_lab_results_deleted_at');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('lab_results');
    }
};
