<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UsersTableTableSeeder::class,
            PermissionsTableSeederTableSeeder::class,
            RoleTableSeeder::class,
            RoleUserTableSeeder::class,
            PermissionRoleTableSeeder::class,

        ]);
    }
}
