<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report; // Pastikan ini ada
use App\Models\PrioritizedResult;
use Illuminate\Support\Facades\DB;
use App\Jobs\CalculateTopsisJob;

class OfficerController extends Controller
{
    public function indexOfficer()
    {
        // $data = officer::all();
        return view('officer.dashboard');
    }

    public function profile()
    {
        return view('officer.profileOfficer');
    }

    public function officersTable()
    {
        session(['namePage' => 'officer']);
        return view('officer.officersTable');
    }

    public function addOfficer()
    {
        session(['namePage' => 'officer']);
        return view('officer.addOfficer');
    }

    public function reportsTable()
    {
        // Ambil laporan dari database
        $reports = Report::all();
        $laporanDiterima = Report::getAcceptedReportsOrderedByScore();;
        $laporanDiproses = Report::where('status', 'Diproses')->get();
        $laporanSelesai = Report::where('status', 'Selesai')->get();

        // return response()->json($laporanDiterima);
        return view('officer.reportsTable', compact('laporanDiterima', 'laporanDiproses', 'laporanSelesai'));
    }

    // public function calculateTopsisForReport(Report $report)
    // {
    //     // Dispatch job untuk menghitung TOPSIS
    //     CalculateTopsisJob::dispatch($report);
    // }

    public function showPrioritizedReports()
    {
        // Ambil data prioritas laporan dengan relasi ke laporan
        $prioritizedReports = PrioritizedResult::with('reports')->get();
        
        // Kirim data ke view
        return view('prioritized_reports', compact('prioritizedReports'));
    }

    public function editReport($id)
    {
        // Ambil laporan berdasarkan ID
        $reports = Report::findOrFail($id);

        return view('officer.editReport', compact('reports'));
    }

    public function updateReportStatus(Request $request, $id, $status)
    {
        // Validasi input status (untuk memastikan hanya status yang valid)
        $request->validate([
            'status' => 'required|in:Diproses,Selesai', // Pastikan status yang diterima hanya "Di Proses" atau "Selesai"
        ]);

        // Ambil laporan berdasarkan ID
        $report = Report::findOrFail($id);
        $report->status = $status;  // Set status baru

        if ($status === 'Diterima') {
            CalculateTopsisJob::dispatch($report); // Dispatch job penghitungan TOPSIS
        }
        // Cek jika statusnya berubah menjadi Diproses atau Selesai
        if ($report->status !== $request->input('status')) {
            // Hapus data terkait di prioritized_results jika status berubah menjadi Diproses atau Selesai
            if (in_array($request->input('status'), ['Diproses', 'Selesai'])) {
                // Menghapus entri terkait dari tabel prioritized_results
                // $report->prioritizedResult()->delete();
                DB::table('prioritized_results')->where('report_id', $report->id)->delete();
            }

            // Update status laporan
            $report->status = $request->input('status');
            $report->save(); // Simpan perubahan status ke database
        }

        // Redirect kembali ke halaman laporan dengan pesan sukses
        return redirect()->route('reportsTable', $report->id)->with('success', 'Status laporan berhasil diubah.');
    }

}
