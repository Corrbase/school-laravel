<?php

namespace Database\Seeders;

use App\Models\admin;
use Faker\Factory as FakerFactory;
use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    public function run()
    {
        $faker_en = FakerFactory::create('en_US');

            admin::create([
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'password' => 'wSqYDrUB5rrVnsqktssNkehdvZVg8RWtlhN9o8PDkJlUe3fRMwlDW',
            ]);

    }
}
