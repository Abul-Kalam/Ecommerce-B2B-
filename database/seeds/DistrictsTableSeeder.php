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
                'slug' => 'comilla',
                'localization' => json_encode([
                    'en' => ['display_name' => 'Comilla'],
                    'bn' => ['display_name' => 'Comilla']
                ], JSON_UNESCAPED_UNICODE),
                'division_id' => 1,
            ],
            
        ]);
    }
}
