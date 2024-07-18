<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        $firstNames = ['John', 'Jane', 'Alice', 'Bob', 'Charlie'];
        $lastNames = ['Smith', 'Doe', 'Brown', 'Johnson', 'Williams'];

        for ($i = 0; $i < 100; $i++) {
            $name = $faker->randomElement($firstNames) . ' ' . $faker->randomElement($lastNames);
            $email = $faker->unique()->userName . '@gmail.com';
            $password = Hash::make('hehe');

            User::create([
                'name' => $name,
                'email' => $email,
                'password' => $password,
            ]);
        }
    }
}
