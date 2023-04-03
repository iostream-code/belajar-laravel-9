<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['id' => 1, 'name' => 'Hafiyyan', 'score' => 85],
            ['id' => 2, 'name' => 'Dwika', 'score' => 95],
            ['id' => 3, 'name' => 'Arya', 'score' => 90],
        ];


        DB::table('students')->insert($data);
    }
}
