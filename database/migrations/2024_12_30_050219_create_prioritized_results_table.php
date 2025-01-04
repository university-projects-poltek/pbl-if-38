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
        Schema::create('prioritized_results', function (Blueprint $table) {
            $table->id(); // Kolom id
            $table->unsignedBigInteger('report_id'); // Kolom untuk menyimpan ID laporan
            $table->float('topsis_score'); // Kolom untuk menyimpan skor TOPSIS
            $table->string('priority'); // Kolom untuk menyimpan prioritas
            $table->timestamps(); // Kolom created_at dan updated_at

            // Menambahkan foreign key constraint
            $table->foreign('report_id')->references('id')->on('reports')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prioritized_results');
    }
};
