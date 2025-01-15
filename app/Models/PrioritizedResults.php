<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrioritizedResults extends Model
{
    use HasFactory;

    protected $table = 'prioritized_results';

    // Relasi dengan Report
    public function report()
    {
        return $this->belongsTo(Report::class, 'report_id');
    }
}
