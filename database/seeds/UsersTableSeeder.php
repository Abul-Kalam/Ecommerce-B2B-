<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name'         => 'admin',
                'first_name'   => 'admin',
                'last_name'    => 'admin',
                'email'        => 'admin@gmail.com',
                'password'     => bcrypt('123456'),
                'localization' => json_encode([
                    'en'       => ['display_name' => 'admin'],
                    'bn'       => ['display_name' => 'admin']
                ], JSON_UNESCAPED_UNICODE),
                'shipping_address' => json_encode([
                    'zip'       => '15',
                    'line_1'       => 'dhaka',
                    'line_2'       => 'dhaka',
                    'thana_id'       => '2',
                    'country_id'       => '1',
                    'district_id'       => '1',
                    'division_id'       => '1',
                ]),
                'billing_address' => json_encode([
                    'zip'       => '15',
                    'line_1'       => 'dhaka',
                    'line_2'       => 'dhaka',
                    'thana_id'       => '2',
                    'country_id'       => '1',
                    'district_id'       => '1',
                    'division_id'       => '1',
                ])
            ]
        ]);
    }
}