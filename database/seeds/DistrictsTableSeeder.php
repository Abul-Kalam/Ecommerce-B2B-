<?php

use Illuminate\Database\Seeder;

class DistrictsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('districts')->insert([
            [
                'slug' => 'tangail',
                'localization' => json_encode([
                    'en' => ['display_name' => 'Tangail'],
                    'bn' => ['display_name' => 'Tangail']
                ], JSON_UNESCAPED_UNICODE),
                'division_id' => 1,
            ],
            [
                'slug' => 'shariatpur',
                'localization' => json_encode([
                    'en' => ['display_name' => 'Shariatpur'],
                    'bn' => ['display_name' => 'Shariatpur']
                ], JSON_UNESCAPED_UNICODE),
                'division_id' => 1,
            ],
            [
                'slug' => 'Dajbari',
                'localization' => json_encode([
                    'en' => ['display_name' => 'Rajbari'],
                    'bn' => ['display_name' => 'Rajbari']
                ], JSON_UNESCAPED_UNICODE),
                'division_id' => 1,
            ],
            
        ]);
    }
}
