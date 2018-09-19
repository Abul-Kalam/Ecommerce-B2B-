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
                'name' => 'superadmin',
                'display_name' => 'superadmin',
            ],
            [
                'name' => 'administrator',
                'display_name' => 'administrator',
            ],
            [
                'name' => 'editor',
                'display_name' => 'editor',
            ],
            [
                'name' => 'author',
                'display_name' => 'author',
            ],
            [
                'name' => 'contributor',
                'display_name' => 'contributor',
            ],
            [
                'name' => 'subscriber',
                'display_name' => 'subscriber',
            ],
        ]);
    }
}
