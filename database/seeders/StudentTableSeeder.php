<?php

namespace Database\Seeders;

use App\Models\Student;
use Faker\Factory as FakerFactory;
use Illuminate\Database\Seeder;

class StudentTableSeeder extends Seeder
{
    public function run()
    {
        $faker_en = FakerFactory::create('en_US');

        for ($i = 0; $i < 100; $i++) {
            Student::create([
                'name' => $faker_en->firstName,
                'sname' => $faker_en->lastName,
                'gender' => 'female' or 'male',
                'teacher_id' => $faker_en->numberBetween(1, 20),
                'age' => $faker_en->numberBetween(18, 65),
                'email' => $faker_en->email,
                'class_age' => $faker_en->numberBetween(1, 12),
                'password' => $faker_en->password,
            ]);
        }
    }
}
