<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $faker = FakerFactory::create();

        foreach(range(1,20) as $index) {
            DB::table('members')->insert([
                'name' => $faker->name,
                'email' => $faker->unique()
            ]);
        }
    }
}
