<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SWMS extends Model
{
    use HasFactory;

    protected $fillable = ['description', 'job_description', 'steps_required', 'project_id'];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
