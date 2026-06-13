<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('user_id')->unique()->constrained()->cascadeOnDelete();
            $table->string('document_type', 2);
            $table->string('document_number', 15)->unique();
            $table->date('birth_date');
            $table->string('gender', 50)->nullable();
            $table->string('address', 255);
            $table->string('phone', 20);
            $table->string('blood_type', 3)->nullable();
            $table->string('eps_name', 100)->nullable();
            $table->string('eps_code', 10)->nullable();
            $table->string('student_code', 20)->unique();
            $table->string('institutional_email', 100)->nullable();
            $table->string('photo_path', 255)->nullable();
            $table->date('enrollment_date')->nullable();
            $table->string('attendant_name', 100);
            $table->string('attendant_relationship', 50);
            $table->string('attendant_phone', 20);
            $table->string('attendant_email', 100)->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->unique(['document_type', 'document_number'], 'idx_students_document');
            $table->index('student_code', 'idx_students_code');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
