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
            PermissionsTableSeeder::class,
            UsersTableSeeder::class,
            RolesTableSeeder::class,
            ThanasTableSeeder::class,
            CountriesTableSeeder::class,
            DivisionsTableSeeder::class,
            DistrictsTableSeeder::class,
        ]);
    }
}
