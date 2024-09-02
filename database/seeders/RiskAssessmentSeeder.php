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
            [
                'assessment_date' => '2024-01-10',
                'risk_score' => 75,
                'mitigation_status' => 'In Progress',
                'project_id' => 1,
                'form_data' => json_encode([
                    'risks' => [
                        [
                            'risk_type' => 'Type A',
                            'description' => 'High risk of falling objects',
                            'level' => 'High',
                            'mitigation_approach' => 'Use safety nets and helmets'
                        ],//change the risks whatever on the json, this is just example
                        [
                            'risk_type' => 'Type B',
                            'description' => 'Electrical hazard in wet areas',
                            'level' => 'Medium',
                            'mitigation_approach' => 'Install proper insulation and signage'
                        ]//change the risks whatever on the json, this is just example
                    ]
                ])
            ],
            [
                'assessment_date' => '2024-02-10',
                'risk_score' => 60,
                'mitigation_status' => 'In Progress',
                'project_id' => 2,
                'form_data' => json_encode([
                    'risks' => [
                        [
                            'risk_type' => 'Type C',
                            'description' => 'Chemical exposure risk',
                            'level' => 'Medium',
                            'mitigation_approach' => 'Provide PPE and proper ventilation'
                        ],//change the risks whatever on the json, this is just example
                        [
                            'risk_type' => 'Type D',
                            'description' => 'Slippery surfaces in work area',
                            'level' => 'Low',
                            'mitigation_approach' => 'Use anti-slip mats and warning signs'
                        ]//change the risks whatever on the json, this is just example
                    ]
                ])
            ]
        ]);
    }
}
