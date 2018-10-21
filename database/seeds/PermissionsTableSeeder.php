<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert([
            [
                'id'           => 1,
                'name' => 'view-dashboard',
                'display_name' => 'View Dashboard',
            ],
            [
                'id'           => 2,
                'name' => 'manage-users',
                'display_name' => 'Manage Users',
            ],
            [
                'id'           => 3,
                'name' => 'manage-places',
                'display_name' => 'Manage Places',
            ],
            [
                'id'           => 4,
                'name' => 'manage-shops',
                'display_name' => 'Manage Shops',
            ],
            [
                'id'           => 5,
                'name' => 'manage-taxonomy',
                'display_name' => 'Manage Taxonomy',
            ],
            [
                'id'           => 6,
                'name' => 'manage-brands',
                'display_name' => 'Manage Brands',
            ],
            [
                'id'           => 7,
                'name' => 'manage-media',
                'display_name' => 'Manage Media',
            ],
            [
                'id'           => 8,
                'name' => 'manage-setting',
                'display_name' => 'Manage Setting',
            ],
            [
                'id'           => 9,
                'name' => 'manage-product',
                'display_name' => 'Manage Prosuct',
            ]
        ]);
    }
}
