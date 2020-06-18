<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class UsersTableTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'admin@thelawnsrestaurant.co.ke',
                'password'       => Hash::make('password'),
                'remember_token' => null,
            ],
            [
                'id'             => 2,
                'name'           => 'TestUser',
                'email'          => 'user@users.com',
                'password'       => Hash::make('user1'),
                'remember_token' => null,
            ],
        ];

        User::insert($users);
    }
}
