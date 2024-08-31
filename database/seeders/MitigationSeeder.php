<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class MitigationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    DB::table('mitigations')->insert([
        ['mitigation_description' => 'cgjkljhgfdfghigfdfghjkigf', 'reassessment_date' => '2024-03-01', 'new_risk_score' => 65, 'risk_id' => 1],
        ['mitigation_description' => 'fghjopoihgfghjiugfdfghj', 'reassessment_date' => '2024-04-01', 'new_risk_score' => 55, 'risk_id' => 2],
    ]);
}

}
