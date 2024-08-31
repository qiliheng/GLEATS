<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiskAssessment extends Model
{
    use HasFactory;

    protected $fillable = ['assessment_date', 'risk_score', 'mitigation_status', 'project_id'];

    public function risks()
    {
        return $this->hasMany(Risk::class);
    }
}
