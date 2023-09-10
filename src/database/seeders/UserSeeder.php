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
            [
                'name' => 'May Thin Lwin',
                'email' => 'maythin@gmail.com',
                'password' => bcrypt('12345678')
            ],
            [
                'name' => 'May',
                'email' => 'may@gmail.com',
                'password' => bcrypt('12345678'),
            ]
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
