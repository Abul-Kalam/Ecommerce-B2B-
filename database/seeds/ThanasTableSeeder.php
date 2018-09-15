<?php

use Illuminate\Database\Seeder;

class ThanasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('thanas')->insert([
            [
                'id'           => 1,
                'slug'         => 'ramna',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'ramna'],
                    'bn'       => ['display_name' => 'রমনা']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 1,
            ],
            [
                'id'           => 2,
                'slug'         => 'motijheel',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'motijheel'],
                    'bn'       => ['display_name' => 'মতিঝিল']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 1,
            ],
            [
                'id'           => 3,
                'slug'         => 'kotwali',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'kotwali'],
                    'bn'       => ['display_name' => 'কোতোয়ালী']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 1,
            ],
            [
                'id'           => 4,
                'slug'         => 'dhanmondi',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'dhanmondi'],
                    'bn'       => ['display_name' => 'ধানমন্ডি']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 1,
            ],
            [
                'id'           => 5,
                'slug'         => 'mohammadpur',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'mohammadpur'],
                    'bn'       => ['display_name' => 'মোহাম্মদপুর']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 1,
            ],
            [
                'id'           => 6,
                'slug'         => 'sutrapur',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'sutrapur'],
                    'bn'       => ['display_name' => 'সুত্রাপুর']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 1,
            ],
            [
                'id'           => 7,
                'slug'         => 'tejgaon',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'tejgaon'],
                    'bn'       => ['display_name' => 'তেজগাঁও']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 1,
            ],
            [
                'id'           => 8,
                'slug'         => 'gulshan',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'gulshan'],
                    'bn'       => ['display_name' => 'গুলশান']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 1,
            ],
            
        ]);
    }
}
