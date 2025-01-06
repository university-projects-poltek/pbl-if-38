<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrioritizedResult extends Model
{
    use HasFactory;

    protected $table = 'prioritized_result';

    protected $fillable = [
        'report_id',
        'topsis_score',
        'priority',
    ];

    // Relasi dengan model Report
    public function Report()
    {
        return $this->belongsTo(Report::class, 'report_id');
    }
}