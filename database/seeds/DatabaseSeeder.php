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
            //LaratrustSeeder::class,
            UsersTableSeeder::class,
            RolesTableSeeder::class,
            PermissionsTableSeeder::class,
            User_role_permissionTableSeeder::class,
            ThanasTableSeeder::class,
            CountriesTableSeeder::class,
            DivisionsTableSeeder::class,
            DistrictsTableSeeder::class,
        ]);
    }
}
