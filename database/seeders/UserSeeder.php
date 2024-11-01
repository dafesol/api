<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            // Test users
            [
                User::NAME => ' SuperAdmin',
                User::EMAIL => 'admin@zeusbyllyc.com',
            ],
        ];

        foreach ($users as $user) {
            User::factory()->create($user);
        }
    }
}
