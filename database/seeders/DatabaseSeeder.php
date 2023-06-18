<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Super Admin',
                'username' => 'superAdmin',
                'password' => bcrypt('123'),
                'role_id' => 1,
            ],
            [
                'name' => 'Admin ',
                'username' => 'ad',
                'password' => bcrypt('123'),
                'role_id' => 2,
            ],
           

        ];

        foreach ($users as $v) {
            User::create([
                'name' => $v['name'],
                'username' => $v['username'],
                'password' => $v['password'],
                'role_id' => $v['role_id'],
            ]);
        }
    }
}
