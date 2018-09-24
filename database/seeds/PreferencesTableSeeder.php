<?php

use Illuminate\Database\Seeder;

class PreferencesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('preferences')->insert([
         
            [
                'name' => 'backend-theme',
                'value' => 'skin-blue',
                'description' => 'Change Top backend theme option.'
            ],
            [
                'name' => 'backend-layout',
                'value' => 'fixed',
                'description' => 'Change Top backend layout option.'
            ]
        ]);
    }
}
