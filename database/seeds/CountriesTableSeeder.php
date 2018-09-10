<?php

use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->insert([
            [
                'slug' => 'bangladesh',
                'iso2' => 'bd',
                'localization' => json_encode([
                    'en' => ['display_name' => 'Bangladesh'],
                    'bn' => ['display_name' => 'বাংলাদেশ']
                ], JSON_UNESCAPED_UNICODE),
                'image_url' => [
                    'logo' => '#',
                ]
            ],
            
        ]);
    }
}
