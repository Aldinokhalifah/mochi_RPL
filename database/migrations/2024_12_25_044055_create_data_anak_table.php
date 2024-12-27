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
        Schema::create('data_anak', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // Relasi ke tabel users
            $table->string('nama_anak');
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
            $table->integer('usia');
            $table->decimal('berat', 5, 2); // Format angka dengan dua desimal untuk berat
            $table->decimal('tinggi', 5, 2); // Format angka dengan dua desimal untuk tinggi
            $table->text('keluhan')->nullable();
            $table->text('pertanyaan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_anak');
    }
};
