<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class RiskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    DB::table('risks')->insert([
        ['risk_type' => 'A', 'description' => 'A', 'level' => 'High', 'mitigation_approach' => 'Approach A', 'risk_assessment_id' => 1],
        ['risk_type' => 'B', 'description' => 'B', 'level' => 'Medium', 'mitigation_approach' => 'Approach B', 'risk_assessment_id' => 2],
    ]);
}

}
