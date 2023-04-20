<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        //teachers seed

        for ($i = 1; $i <= 5; $i++) {
            DB::table('teachers')->insert([
                'name' => $faker->name,
            ]);
        }

        //students seed

        for ($i = 1; $i <= 20; $i++) {
            DB::table('students')->insert([
                'name' => $faker->name,
                'score' => $faker->numberBetween(50, 100),
                'teacher_id' => $faker->numberBetween(1, 5)
            ]);
        }

        //contact seed

        // for ($i = 1; $i <= 20; $i++) {
        //     DB::table('students')->insert([
        //         'name' => $faker->name,
        //         'score' => $faker->numberBetween(50, 100),
        //         'teacher_id' => $faker->numberBetween(1, 5)
        //     ]);
        // }

        //activities seed

        // for ($i = 1; $i <= 20; $i++) {
        //     DB::table('students')->insert([
        //         'name' => $faker->name,
        //         'score' => $faker->numberBetween(50, 100),
        //         'teacher_id' => $faker->numberBetween(1, 5)
        //     ]);
        // }
    }
}
