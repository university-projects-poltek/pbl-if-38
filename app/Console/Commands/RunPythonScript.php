<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class RunPythonScript extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'run:python-script';
    // protected $signature = 'app:run-python-script';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // Menjalankan skrip Python menggunakan shell
        // $output = shell_exec('python3 C:\Users\user\AppData\Local\Programs\Python\Python312\python.exe');
        // $this->info("Skrip Python telah dijalankan: " . $output);

    // Menentukan path ke skrip Python yang ingin dijalankan
    $pythonPath = 'C:\Users\user\AppData\Local\Programs\Python\Python312\python.exe'; // Lokasi Python
    $scriptPath = 'C:\Users\user\Documents\PBL\pbl-if-38\app\Services\topsis_ahp.py'; // Lokasi skrip Python

    // Menjalankan skrip Python menggunakan shell
    $output = shell_exec("$pythonPath $scriptPath");
    
    // Menampilkan hasil
    $this->info("Skrip Python telah dijalankan: " . $output);
    }
}
