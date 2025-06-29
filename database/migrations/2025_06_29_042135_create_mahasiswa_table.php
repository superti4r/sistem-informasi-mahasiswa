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
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->id();
            $table->string('nim')->unique();
            $table->unsignedInteger('nik')->unique();
            $table->string('avatar_path')->nullable();
            $table->string('google_id')->nullable()->unique();
            $table->string('nama');
            $table->string('email')->unique();
            $table->string('password')->nullable();
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->enum('jenis_kelamin', ['Laki-Laki', 'Perempuan']);
            $table->longText('alamat');
            $table->unsignedInteger('nomor_handphone');
            $table->foreignId('jurusan_id')->constrained('jurusan')->onDelete('cascade');
            $table->foreignId('program_studi_id')->constrained('program_studi')->onDelete('cascade');
            $table->foreignId('angkatan_id')->constrained('angkatan')->onDelete('cascade');
            $table->foreignId('golongan_id')->constrained('golongan')->onDelete('cascade');
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
