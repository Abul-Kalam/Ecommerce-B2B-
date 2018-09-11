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
            // RolesTableSeeder::class,

           // CountriesTableSeeder::class,
            DivisionsTableSeeder::class,
            DistrictsTableSeeder::class,
        ]);
    }
}
