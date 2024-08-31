<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('projects')->insert([
            ['name' => 'ProjectA', 'location' => 'A', 'start_date' => '2024-01-01', 'end_date' => '2024-12-31', 'user_id' => 1],
            ['name' => 'ProjectB', 'location' => 'B', 'start_date' => '2024-02-01', 'end_date' => '2024-12-30', 'user_id' => 2],
        ]);
    }
    
}
