<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Database\Seeders\MemberSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Manish Lama',
            'email' => 'lamamanish234@gmail.com',
            'password' => Hash::make('manish@123'),
        ]);

        $this->call(MemberSeeder::class);
    }
}
