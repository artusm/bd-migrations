<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1,10) as $index) {
            DB::table('employees')->insert([
                'full_name' => $faker->name,
                'sex' =>  $faker->randomElement(['male', 'female']),
                'birthday_at' => $faker->date(),
                'start_work_at' => $faker->date(),
                'position_id' => $faker->randomElement([2,3,4,5]),
                'login' => $faker->lastName,
                'password' => bcrypt('password'),
            ]);
        }
    }
}
