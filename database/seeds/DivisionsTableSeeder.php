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
            [   'id'   => 1,
                'slug' => 'dhaka',
                'localization' => json_encode([
                    'en' => ['display_name' => 'dhaka'],
                    'bn' => ['display_name' => 'ঢাকা']
                ], JSON_UNESCAPED_UNICODE),
                'country_id' => 1,
            ],
            [
                'id'   => 2,
                'slug' => 'barisal',
                'localization' => json_encode([
                    'en' => ['display_name' => 'barisal'],
                    'bn' => ['display_name' => 'বরিশাল']
                ], JSON_UNESCAPED_UNICODE),
                'country_id' => 1,
            ],
            [
                'id'   => 3,
                'slug' => 'sylhet',
                'localization' => json_encode([
                    'en' => ['display_name' => 'sylhet'],
                    'bn' => ['display_name' => 'সিলেট']
                ], JSON_UNESCAPED_UNICODE),
                'country_id' => 1,
            ],
            [
                'id'   => 4,
                'slug' => 'khulna',
                'localization' => json_encode([
                    'en' => ['display_name' => 'khulna'],
                    'bn' => ['display_name' => 'খুলনা']
                ], JSON_UNESCAPED_UNICODE),
                'country_id' => 1,
            ],
            [
                'id'   => 5,
                'slug' => 'chattagram',
                'localization' => json_encode([
                    'en' => ['display_name' => 'chattagram'],
                    'bn' => ['display_name' => 'চট্টগ্রাম']
                ], JSON_UNESCAPED_UNICODE),
                'country_id' => 1,
            ],
            [
                'id'   => 6,
                'slug' => 'mymensingh',
                'localization' => json_encode([
                    'en' => ['display_name' => 'mymensingh'],
                    'bn' => ['display_name' => 'ময়মনসিংহ']
                ], JSON_UNESCAPED_UNICODE),
                'country_id' => 1,
            ],
            [
                'id'   => 7,
                'slug' => 'rajshahi',
                'localization' => json_encode([
                    'en' => ['display_name' => 'rajshahi'],
                    'bn' => ['display_name' => 'রাজশাহী']
                ], JSON_UNESCAPED_UNICODE),
                'country_id' => 1,
            ],
            [
                'id'   => 8,
                'slug' => 'rangpur',
                'localization' => json_encode([
                    'en' => ['display_name' => 'rangpur'],
                    'bn' => ['display_name' => 'রংপুর']
                ], JSON_UNESCAPED_UNICODE),
                'country_id' => 1,
            ],
            
        ]);
    }
}
