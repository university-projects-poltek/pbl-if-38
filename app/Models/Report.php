<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $table = 'reports';

    // Relasi dengan HasilPrioritas
    public function PrioritizedResult()
    {
        // return $this->hasMany(PrioritizedResult::class, 'report_id');
        return $this->hasOne(PrioritizedResult::class, 'report_id');
    }
}
