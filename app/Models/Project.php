<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'location', 'start_date', 'end_date', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function swms()
    {
        return $this->hasMany(SWMS::class);
    }

    public function riskAssessments()
    {
        return $this->hasMany(RiskAssessment::class);
    }
}
