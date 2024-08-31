<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('users')->insert([
            ['name' => 'Name1', 'email' => 'user1@example.com', 'role' => 'Any'],
            ['name' => 'Name2', 'email' => 'user2@example.com', 'role' => 'Any'],
        ]);
    }
    
}
