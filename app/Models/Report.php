<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $table = 'reports';

    // Relasi dengan PrioritizedResult
    public function prioritizedResult()
    {
        return $this->hasOne(PrioritizedResults::class, 'report_id');
    }

    /**
     * Get reports with accepted status ordered by TOPSIS score.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public static function getAcceptedReportsOrderedByScore()
    {
        return self::where('status', 'Diterima')
            ->with(['prioritizedResult' => function ($query) {
                $query->orderByDesc('topsis_score');
            }])
            ->orderByDesc(PrioritizedResults::select('topsis_score')
            ->whereColumn('prioritized_results.report_id', 'reports.id')
            ->limit(1))
            ->get();
    }
}
