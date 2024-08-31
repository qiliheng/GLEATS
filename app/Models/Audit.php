<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Audit extends Model
{
    use HasFactory;

    protected $fillable = ['date', 'author_name', 'findings', 'scores', 'risk_assessment_id'];

    public function riskAssessment()
    {
        return $this->belongsTo(RiskAssessment::class);
    }
}
