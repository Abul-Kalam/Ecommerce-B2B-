<?php

use Illuminate\Database\Seeder;

class DivisionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('divisions')->insert([
            [
                'slug' => 'dhaka',
                'localization' => json_encode([
                    'en' => ['display_name' => 'Dhaka'],
                    'bn' => ['display_name' => 'ঢাকা']
                ], JSON_UNESCAPED_UNICODE),
                'country_id' => 1,
            ],
            [
                'slug' => 'barisal',
                'localization' => json_encode([
                    'en' => ['display_name' => 'Dhaka'],
                    'bn' => ['display_name' => 'বরিশাল']
                ], JSON_UNESCAPED_UNICODE),
                'country_id' => 1,
            ],
            [
                'slug' => 'sylhet',
                'localization' => json_encode([
                    'en' => ['display_name' => 'Sylhet'],
                    'bn' => ['display_name' => 'সিলেট']
                ], JSON_UNESCAPED_UNICODE),
                'country_id' => 1,
            ],
            
        ]);
    }
}
