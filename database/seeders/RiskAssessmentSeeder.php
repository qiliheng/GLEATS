<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class RiskAssessmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    DB::table('risk_assessments')->insert([
        ['assessment_date' => '2024-01-10', 'risk_score' => 75, 'mitigation_status' => 'In Progress', 'project_id' => 1],
        ['assessment_date' => '2024-02-10', 'risk_score' => 60, 'mitigation_status' => 'In Progress', 'project_id' => 2],
    ]);
}

}
