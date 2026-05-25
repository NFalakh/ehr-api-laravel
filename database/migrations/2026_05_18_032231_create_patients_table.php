<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('identity_number', 50)->unique('idx_patients_identity_number');
            $table->string('name', 100);
            $table->date('date_of_birth');
            $table->enum('gender', ['male', 'female', 'other']);
            $table->string('phone', 20)->nullable();
            $table->string('email', 100)->nullable();
            $table->text('address')->nullable();
            $table->string('blood_type', 5)->nullable();
            $table->dateTime('created_at', 3)->nullable();
            $table->dateTime('updated_at', 3)->nullable();
            $table->dateTime('deleted_at', 3)->nullable()->index('idx_patients_deleted_at');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
