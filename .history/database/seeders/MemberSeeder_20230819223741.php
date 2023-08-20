<?php

namespace Database\Seeders;

use App\Models\Member;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for($i=1; $i<=20; $i++) {
            $member = new Member();
            $member->name = $faker->name;
            $member->email = $faker->email;
            $member->address = $faker->address;
            $member->contact = $faker->contact;
            $member->family = $faker->family;
            $member->image = $faker->imgae;
            $member->save();
        }
    }
}
