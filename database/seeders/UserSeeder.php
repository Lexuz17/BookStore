<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Jason',
                'email' => 'jason@gmail.com',
                'password' => 'admin',
                'role' => 'Admin',
            ],
            [
                'name' => 'Yeji',
                'email' => 'Yeji@gmail.com',
                'password' => 'Yejison',
                'role' => 'User',
            ]
        ];

        foreach($users as $user){
            $newUser = User::create([
                'name' => $user['name'],
                'email' => $user['email'],
                'password' => bcrypt($user['password']),
                'role' => $user['role'],
            ]);
        }
    }
}
