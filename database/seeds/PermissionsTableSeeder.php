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
                'name' => 'create-users',
                'display_name' => 'Create Users',
            ],
            [
                'name' => 'read-users',
                'display_name' => 'Read Users',
            ],
            [
                'name' => 'update-users',
                'display_name' => 'Update Users',
            ],
            [
                'name' => 'delete-users',
                'display_name' => 'Delete Users',
            ],
            [
                'name' => 'create-article',
                'display_name' => 'Create Article',
            ],
            [
                'name' => 'read-article',
                'display_name' => 'Read Article',
            ],
            [
                'name' => 'update-article',
                'display_name' => 'Update Article',
            ],
            [
                'name' => 'delete-article',
                'display_name' => 'Delete Article',
            ],
            [
                'name' => 'read-profile',
                'display_name' => 'Read Profile',
            ],
            [
                'name' => 'update-profile',
                'display_name' => 'Update Profile',
            ],
            [
                'name' => 'delete-profile',
                'display_name' => 'Delete Profile',
            ],
            [
                'name' => 'create-profile',
                'display_name' => 'Create Profile',
            ]
        ]);
    }
}
