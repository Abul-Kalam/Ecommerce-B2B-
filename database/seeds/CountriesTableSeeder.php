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
                'iso2'                     => 'bd',
                'buy_status'               => 1,
                'sell_status'              => 1,
                'localization'             => json_encode([
                    'en'                   => ['display_name' => 'Bangladesh'],
                    'bn'                   => ['display_name' => 'Bangladesh']
                ], JSON_UNESCAPED_UNICODE),
                'image_urls'               => json_encode([
                    'currency_local'       => '#',
                    'currency_global'      => '#',
                    'currency_alternative' => '#'
                ]),
                'currency'                 => json_encode([
                    'local'                => '#',
                    'global'               => '#',
                    'alternative'          => '#'
                ])
            ],
        ]);
    }
}
