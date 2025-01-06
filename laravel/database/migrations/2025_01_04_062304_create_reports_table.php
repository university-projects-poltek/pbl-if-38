
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
        Schema::create('reports', function (Blueprint $table) {
            $table->id(); // Kolom id
            $table->string('photo'); // Kolom foto
            $table->string('location'); // Kolom lokasi
            $table->string('description'); // Kolom deskripsi
            $table->text('impact'); // Kolom deskripsi dampak
            $table->string('vehicle_type'); // Kolom jenis kendaraan
            $table->string('area'); // Kolom area
            $table->string('weather'); // Kolom cuaca
            $table->date('report_date'); // Kolom tanggal laporan
            $table->string('status'); // Kolom status laporan
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reports');
    }
};
