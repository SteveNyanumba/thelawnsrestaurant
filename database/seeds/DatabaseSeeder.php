<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $admin = new User();
        $admin->roles = 2;
        $admin->name = 'admin';
        $admin->password = Hash::make('password');
        $admin->email = 'admin@thelawnsrestaurant.co.ke';
        $admin->save();
        return http_response_code(200);

    }
}
