<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mitigation extends Model
{
    use HasFactory;

    protected $fillable = ['mitigation_description', 'reassessment_date', 'new_risk_score', 'risk_id'];

    public function risk()
    {
        return $this->belongsTo(Risk::class);
    }
}
