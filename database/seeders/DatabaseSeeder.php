<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(TeacherTableSeeder::class);
        $this->call(AdminTableSeeder::class);
        $this->call(StudentTableSeeder::class);
    }
}
