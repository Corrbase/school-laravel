<?php

namespace Database\Seeders;

use App\Models\teacher;
use Faker\Factory as FakerFactory;
use Illuminate\Database\Seeder;

class TeacherTableSeeder extends Seeder
{
    public function run()
    {
        $faker_en = FakerFactory::create('en_US');

        for ($i = 0; $i < 20; $i++) {
            teacher::create([
                'name' => $faker_en->firstName,
                'sname' => $faker_en->lastName,
                'gender' => 'female',
                'age' => $faker_en->numberBetween(18, 65),
                'email' => $faker_en->email,
                'password' => $faker_en->password,
            ]);
        }
    }
}
