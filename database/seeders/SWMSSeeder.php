<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class SWMSSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    DB::table('swms')->insert([
        ['description' => 'SWMS 1', 'job_description' => 'JobA', 'steps_required' => 'Step 1', 'project_id' => 1],
        ['description' => 'SWMS 2', 'job_description' => 'JobB', 'steps_required' => 'Step 2', 'project_id' => 2],
    ]);
}

}
