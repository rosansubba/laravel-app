<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class courses extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([
            'courseName' => 'Learn Node.js',
            'courseDescription' => 'This is online course',
        ]);
        DB::table('courses')->insert([
            'courseName' => 'Learn React',
            'courseDescription' => 'This is front end course',
        ]);
    }
}
