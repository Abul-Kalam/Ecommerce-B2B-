<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            [
                'id'    => 1,
                'name' => 'superadmin',
                'display_name' => 'superadmin',
            ],
            [
                'id'    => 2,
                'name' => 'administrator',
                'display_name' => 'administrator',
            ],
            [
                'id'    => 3,
                'name' => 'editor',
                'display_name' => 'editor',
            ],
            [
                'id'    => 4,
                'name' => 'author',
                'display_name' => 'author',
            ],
            [
                'id'    => 5,
                'name' => 'contributor',
                'display_name' => 'contributor',
            ],
            [
                'id'    => 6,
                'name' => 'subscriber',
                'display_name' => 'subscriber',
            ],
        ]);
    }
}
