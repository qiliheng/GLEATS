<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class AuditSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('audits')->insert([
            ['date' => '2024-05-01', 'author_name' => 'AuditorA', 'findings' => 'FindingA', 'scores' => 85, 'risk_assessment_id' => 1],
            ['date' => '2024-06-01', 'author_name' => 'AuditorB', 'findings' => 'FindindB', 'scores' => 90, 'risk_assessment_id' => 2],
        ]);
    }
    
}
