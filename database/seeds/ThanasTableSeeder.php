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
            [
                'id'           => 9,
                'slug'         => 'dohar',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'dohar'],
                    'bn'       => ['display_name' => 'দোহার']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 1,
            ],
            [
                'id'           => 10,
                'slug'         => 'keraniganj',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'keraniganj'],
                    'bn'       => ['display_name' => 'কেরানীগঞ্জ']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 1,
            ],
            [
                'id'           => 11,
                'slug'         => 'dhamrai',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'dhamrai'],
                    'bn'       => ['display_name' => 'ধামরাই']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 1,
            ],
            [
                'id'           => 12,
                'slug'         => 'nawabganj',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'nawabganj'],
                    'bn'       => ['display_name' => 'নওয়াবগঞ্জ']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 1,
            ],
            [
                'id'           => 13,
                'slug'         => 'savar',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'savar'],
                    'bn'       => ['display_name' => 'সাভার']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 1,
            ],
            [
                'id'           => 14,
                'slug'         => 'lalbagh',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'lalbagh'],
                    'bn'       => ['display_name' => 'লালবাগ']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 1,
            ],
            [
                'id'           => 15,
                'slug'         => 'mirpur',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'mirpur'],
                    'bn'       => ['display_name' => 'মিরপুর']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 1,
            ],
            [
                'id'           => 16,
                'slug'         => 'pallabi',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'pallabi'],
                    'bn'       => ['display_name' => 'পল্লবী']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 1,
            ],
            [
                'id'           => 17,
                'slug'         => 'sabujbag',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'sabujbag'],
                    'bn'       => ['display_name' => 'সবুজবাগ']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 1,
            ],
            [
                'id'           => 18,
                'slug'         => 'cantonment',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'cantonment'],
                    'bn'       => ['display_name' => 'ক্যান্টনমেন্ট']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 1,
            ],
            [
                'id'           => 19,
                'slug'         => 'demra',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'demra'],
                    'bn'       => ['display_name' => 'ডেমরা']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 1,
            ],
            [
                'id'           => 20,
                'slug'         => 'hazaribagh',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'hazaribagh'],
                    'bn'       => ['display_name' => 'হাজারীবাগ']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 1,
            ],
            [
                'id'           => 21,
                'slug'         => 'shyampur',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'shyampur'],
                    'bn'       => ['display_name' => 'শ্যামপুর']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 1,
            ],
            [
                'id'           => 22,
                'slug'         => 'badda',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'badda'],
                    'bn'       => ['display_name' => 'বাড্ডা']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 1,
            ],
            [
                'id'           => 23,
                'slug'         => 'kafrul',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'kafrul'],
                    'bn'       => ['display_name' => 'কাফরুল']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 1,
            ],
            [
                'id'           => 24,
                'slug'         => 'kamringir',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'kamringir'],
                    'bn'       => ['display_name' => 'কামরাঙ্গীর']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 1,
            ],
            [
                'id'           => 25,
                'slug'         => 'khilgaon',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'khilgaon'],
                    'bn'       => ['display_name' => 'খিলগাঁও']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 1,
            ],
            [
                'id'           => 26,
                'slug'         => 'uttara',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'uttara'],
                    'bn'       => ['display_name' => 'উত্তরা']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 1,
            ],
            [
                'id'           => 27,
                'slug'         => 'shah',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'shah'],
                    'bn'       => ['display_name' => 'শাহ']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 1,
            ],
            [
                'id'           => 28,
                'slug'         => 'biman',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'biman'],
                    'bn'       => ['display_name' => 'বিমান']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 1,
            ],
            [
                'id'           => 29,
                'slug'         => 'biman-bandar',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'biman bandar'],
                    'bn'       => ['display_name' => 'বিমান বন্দর']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 1,
            ],
            [
                'id'           => 30,
                'slug'         => 'paltan',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'paltan'],
                    'bn'       => ['display_name' => 'পল্টন']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 1,
            ],
            [
                'id'           => 31,
                'slug'         => 'adabar',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'adabar'],
                    'bn'       => ['display_name' => 'আদাবর']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 1,
            ],
            [
                'id'           => 32,
                'slug'         => 'darus-salam',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'darus salam'],
                    'bn'       => ['display_name' => 'দারুস সালাম']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 1,
            ],
            [
                'id'           => 33,
                'slug'         => 'uttarkhan',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'uttarkhan'],
                    'bn'       => ['display_name' => 'উত্তরখান']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 1,
            ],
            [
                'id'           => 34,
                'slug'         => 'kamrangirchar',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'kamrangirchar'],
                    'bn'       => ['display_name' => 'কামরাঙ্গীরচর']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 1,
            ],
            [
                'id'           => 35,
                'slug'         => 'kadamtoli',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'kadamtoli'],
                    'bn'       => ['display_name' => 'কদমতলী']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 1,
            ],
            [
                'id'           => 36,
                'slug'         => 'gendaria',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'gendaria'],
                    'bn'       => ['display_name' => 'গেন্ডারিয়া']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 1,
            ],
            [
                'id'           => 37,
                'slug'         => 'chalkbazar',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'chalkbazar'],
                    'bn'       => ['display_name' => 'চকবাজার']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 1,
            ],
            [
                'id'           => 38,
                'slug'         => 'tejgaon_industria',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'tejgaon industria'],
                    'bn'       => ['display_name' => 'তেজগাঁও শিল্পাঞ্চল']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 1,
            ],
            [
                'id'           => 39,
                'slug'         => 'turag',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'turag'],
                    'bn'       => ['display_name' => 'তুরাগ']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 1,
            ],
            [
                'id'           => 40,
                'slug'         => 'dakhinkhan',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'dakhinkhan'],
                    'bn'       => ['display_name' => 'দক্ষিণখান']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 1,
            ],
            [
                'id'           => 41,
                'slug'         => 'bangshal',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'bangshal'],
                    'bn'       => ['display_name' => 'বংশাল']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 1,
            ],
            [
                'id'           => 42,
                'slug'         => 'bhashantek',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'bhashantek'],
                    'bn'       => ['display_name' => 'বংশাল']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 1,
            ],
            [
                'id'           => 43,
                'slug'         => 'rampura',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'rampura'],
                    'bn'       => ['display_name' => 'রামপুরা']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 1,
            ],
            [
                'id'           => 44,
                'slug'         => 'bhatara',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'bhatara'],
                    'bn'       => ['display_name' => 'ভাটারা']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 1,
            ],
            [
                'id'           => 45,
                'slug'         => 'jatrabari',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'jatrabari'],
                    'bn'       => ['display_name' => 'যাত্রাবাড়ী']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 1,
            ],
            [
                'id'           => 46,
                'slug'         => 'rupnagar',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'rupnagar'],
                    'bn'       => ['display_name' => 'রূপনগর']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 1,
            ],
            [
                'id'           => 47,
                'slug'         => 'sherebangla-nagar',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'sherebangla nagar'],
                    'bn'       => ['display_name' => 'শেরেবাংলা নগর']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 1,
            ],
            [
                'id'           => 48,
                'slug'         => 'shahjahanpur',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'shahjahanpur'],
                    'bn'       => ['display_name' => 'শাহজাহানপুর']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 1,
            ],
            
        ]);
    }
}
