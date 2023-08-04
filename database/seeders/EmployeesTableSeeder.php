<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Employee;
use Faker\Factory as Faker;
class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i = 0; $i < 50; $i++) {
            Employee::create([
                'Name'=>$faker->word(2),
                'Address'=>$faker->address(),
                'Salary'=>$faker->numberBetween(1,100)
            ]);
        }
    }
}
