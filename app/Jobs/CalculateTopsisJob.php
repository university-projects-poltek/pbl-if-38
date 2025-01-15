<?php

namespace App\Jobs;

use App\Models\Report;
use App\Models\PrioritizedResult;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Illuminate\Support\Facades\Log;

class CalculateTopsisJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $report;

    /**
     * Create a new job instance.
     *
     * @param \App\Models\Report $report
     */
    public function __construct(Report $report)
    {
        $this->report = $report; // Menyimpan objek report yang diteruskan
        Log::info('Job created for report ID: ' . $report->id);
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        // Path ke file python
        $pythonPath = 'C:\\Users\\user\\AppData\\Local\\Microsoft\\WindowsApps\\python3.exe';
        // Path ke file topsis.py
        $scriptPath = 'C:/Users/user/Documents/IF 3/PBL/pbl-if-38/app/Services/topsis_ahp.py';

        Log::info('Starting TOPSIS calculation for report ID: ' . $this->report->id);

        // Jalankan perhitungan TOPSIS
        $process = new Process([$pythonPath, $scriptPath]);
        $process->run();

        // Cek apakah proses berhasil dijalankan
        if (!$process->isSuccessful()) {
            Log::error('TOPSIS calculation failed for report ID: ' . $this->report->id);
            throw new ProcessFailedException($process);
        }

        // Ambil output dari proses
        $output = $process->getOutput();
        Log::info('Python Output: ' . $output);

        // Decode hasil output (misalnya berupa JSON)
        $topsisScores = json_decode($output, true);

        // Pastikan output berupa array dan memiliki 'topsis_score'
        if (isset($topsisScores['topsis_score'])) {
            // Simpan hasil penghitungan TOPSIS ke tabel prioritized_results
            PrioritizedResult::create([
                'report_id' => $this->report->id, // ID laporan terkait
                'topsis_score' => $topsisScores['topsis_score'],
                // Anda bisa menambahkan data lain dari $topsisScores jika perlu
            ]);
            Log::info('TOPSIS score saved to database for report ID: ' . $this->report->id);
        } else {
            // Tangani error jika TOPSIS score tidak ditemukan
            Log::error('TOPSIS calculation failed or result is missing.');
        }
    }
}

