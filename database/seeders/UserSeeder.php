<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'User01',
                'email' => 'user01@mail.fr',
                'password' => bcrypt('password'),
                'role' => 'user'
            ],
            [
                'name' => 'User02',
                'email' => 'user02@mail.fr',
                'password' => bcrypt('password'),
                'role' => 'user'
            ],
            [
                'name' => 'User03',
                'email' => 'user03@mail.fr',
                'password' => bcrypt('password'),
                'role' => 'writer'
            ],
            [
                'name' => 'User04',
                'email' => 'user04@mail.fr',
                'password' => bcrypt('password'),
                'role' => 'writer'
            ],
            [
                'name' => 'User05',
                'email' => 'user05@mail.fr',
                'password' => bcrypt('password'),
                'role' => 'admin'
            ],
        ];

        foreach ($users as $user) {
            DB::table('users')->insert([
                'name' => $user['name'],
                'email' => $user['email'],
                'password' => $user['password'],
            ]);
        }
    }
}
