<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Risk extends Model
{
    use HasFactory;

    protected $fillable = ['risk_type', 'description', 'level', 'mitigation_approach', 'risk_assessment_id'];

    public function riskAssessment()
    {
        return $this->belongsTo(RiskAssessment::class);
    }
}
