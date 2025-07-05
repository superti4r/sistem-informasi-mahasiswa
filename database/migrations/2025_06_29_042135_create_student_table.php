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
        Schema::create('student', function (Blueprint $table) {
            $table->id();
            $table->string('nim')->unique();
            $table->unsignedInteger('nik')->unique();
            $table->string('avatar_path')->nullable();
            $table->string('google_id')->nullable()->unique();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password')->nullable();
            $table->string('place_of_birth');
            $table->date('date_of_birth');
            $table->enum('gender', ['Male', 'Female']);
            $table->longText('address');
            $table->unsignedInteger('number_phone');
            $table->foreignId('major_id')->constrained('major')->onDelete('cascade');
            $table->foreignId('study_program_id')->constrained('study_program')->onDelete('cascade');
            $table->foreignId('generation_id')->constrained('generation')->onDelete('cascade');
            $table->foreignId('group_id')->constrained('group')->onDelete('cascade');
            $table->foreignId('dosen_wali_id')->nullable()->constrained('users')->onDelete('set null');
            $table->foreignId('dosen_pembimbing_1_id')->nullable()->constrained('users')->onDelete('set null');
            $table->foreignId('dosen_pembimbing_2_id')->nullable()->constrained('users')->onDelete('set null');
            $table->foreignId('dosen_pembimbing_pkl_id')->nullable()->constrained('users')->onDelete('set null');
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswa');
    }
};
