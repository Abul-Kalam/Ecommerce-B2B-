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

            //dhaka district thana  
            
            [
                'id'           => 49,
                'slug'         => 'faridpur-sadar',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'faridpur sadar'],
                    'bn'       => ['display_name' => 'ফরিদপুর সদর']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 2,
            ],
            [
                'id'           => 50,
                'slug'         => 'bhanga',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'bhanga'],
                    'bn'       => ['display_name' => 'ভাঙ্গা']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 2,
            ],
            [
                'id'           => 51,
                'slug'         => 'madhukhali',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'madhukhali'],
                    'bn'       => ['display_name' => 'মধুখালী']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 2,
            ],
            [
                'id'           => 52,
                'slug'         => 'sadarpur',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'sadarpur'],
                    'bn'       => ['display_name' => 'সদরপুর']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 2,
            ],
            [
                'id'           => 53,
                'slug'         => 'alfadanga',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'alfadanga'],
                    'bn'       => ['display_name' => 'আলফাডাঙ্গা']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 2,
            ],
            [
                'id'           => 54,
                'slug'         => 'boalmari',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'boalmari'],
                    'bn'       => ['display_name' => 'বোয়ালমারী']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 2,
            ],
            [
                'id'           => 55,
                'slug'         => 'charbhadrasan',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'charbhadrasan'],
                    'bn'       => ['display_name' => 'চরভদ্রাসন']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 2,
            ],
            [
                'id'           => 56,
                'slug'         => 'nagarkanda',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'nagarkanda'],
                    'bn'       => ['display_name' => 'নগরকান্দা']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 2,
            ],
            [
                'id'           => 57,
                'slug'         => 'shaltha',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'shaltha'],
                    'bn'       => ['display_name' => 'সালথা']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 2,
            ],

            //faridpur district thana  

            [
                'id'           => 58,
                'slug'         => 'gazipur-sadar',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'gazipur sadar'],
                    'bn'       => ['display_name' => 'গাজীপুর সদর']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 3,
            ],
            [
                'id'           => 59,
                'slug'         => 'kapasia',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'kapasia'],
                    'bn'       => ['display_name' => 'কাপাসিয়া']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 3,
            ],
            [
                'id'           => 60,
                'slug'         => 'tongi-town',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'tongi town'],
                    'bn'       => ['display_name' => 'টঙ্গী শহর']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 3,
            ],
            [
                'id'           => 61,
                'slug'         => 'sripur',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'sripur'],
                    'bn'       => ['display_name' => 'শ্রীপুর']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 3,
            ],
            [
                'id'           => 62,
                'slug'         => 'kaliganj',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'kaliganj'],
                    'bn'       => ['display_name' => 'কালিগঞ্জ']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 3,
            ],
            [
                'id'           => 63,
                'slug'         => 'kaliakior',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'kaliakior'],
                    'bn'       => ['display_name' => 'কালিয়াকৈর']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 3,
            ],
             //Gazipur district thana  

             [
                'id'           => 64,
                'slug'         => 'gopalganj-sadar',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'gopalganj sadar'],
                    'bn'       => ['display_name' => 'গোপালগঞ্জ সদর']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 4,
            ],
            [
                'id'           => 65,
                'slug'         => 'tungipara',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'tungipara'],
                    'bn'       => ['display_name' => 'টুংগীপাড়া']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 4,
            ],
            [
                'id'           => 66,
                'slug'         => 'kotalipara',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'kotalipara'],
                    'bn'       => ['display_name' => 'কোটালীপাড়া']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 4,
            ],
            [
                'id'           => 67,
                'slug'         => 'kashiani',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'kashiani'],
                    'bn'       => ['display_name' => 'কাশিয়ানী']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 4,
            ],
            [
                'id'           => 68,
                'slug'         => 'muksudpur',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'muksudpur'],
                    'bn'       => ['display_name' => 'মুকসুদপুর']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 4,
            ],

            //Gopalganj district thana  
            [
                'id'           => 69,
                'slug'         => 'austagram ',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'austagram '],
                    'bn'       => ['display_name' => 'অষ্টগ্রাম']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 5,
            ],
            [
                'id'           => 70,
                'slug'         => 'bajitpur',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'bajitpur'],
                    'bn'       => ['display_name' => 'বাজিতপুর']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 5,
            ],
            [
                'id'           => 71,
                'slug'         => 'bhairab',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'bhairab'],
                    'bn'       => ['display_name' => 'ভৈরববাজার']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 5,
            ],
            [
                'id'           => 72,
                'slug'         => 'hossainpur',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'hossainpur'],
                    'bn'       => ['display_name' => 'হোসেনপুর']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 5,
            ],
            [
                'id'           => 73,
                'slug'         => 'itna',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'itna'],
                    'bn'       => ['display_name' => 'ইটনা']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 5,
            ],
            [
                'id'           => 74,
                'slug'         => 'karimganj',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'karimganj'],
                    'bn'       => ['display_name' => 'করিমগঞ্জ']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 5,
            ],
            [
                'id'           => 75,
                'slug'         => 'katiadi',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'katiadi'],
                    'bn'       => ['display_name' => 'কটিয়াদি']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 5,
            ],
            [
                'id'           => 76,
                'slug'         => 'kishoreganj-sadar',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'kishoreganj sadar'],
                    'bn'       => ['display_name' => 'কিশোরগঞ্জ সদর']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 5,
            ],
            [
                'id'           => 77,
                'slug'         => 'kuliarchar',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'kuliarchar'],
                    'bn'       => ['display_name' => 'কুলিয়ারচর']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 5,
            ],
            [
                'id'           => 78,
                'slug'         => 'mithamain',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'mithamain'],
                    'bn'       => ['display_name' => 'মিটামইন']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 5,
            ],
            [
                'id'           => 79,
                'slug'         => 'nikli',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'nikli'],
                    'bn'       => ['display_name' => 'নিকলি']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 5,
            ],
            [
                'id'           => 80,
                'slug'         => 'pakundia',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'pakundia'],
                    'bn'       => ['display_name' => 'পাকুন্দিয়া']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 5,
            ],
            [
                'id'           => 81,
                'slug'         => 'tarail',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'tarail'],
                    'bn'       => ['display_name' => 'নিকলি']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 5,
            ],
            //kishoreganj district all thanas
            [
                'id'           => 82,
                'slug'         => 'madaripur-sadar',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'madaripur-sadar'],
                    'bn'       => ['display_name' => 'মাদারীপুর সদর']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 6,
            ],
            [
                'id'           => 83,
                'slug'         => 'shibchar',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'shibchar'],
                    'bn'       => ['display_name' => 'শিবচর']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 6,
            ],
            [
                'id'           => 84,
                'slug'         => 'kalkini',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'kalkini'],
                    'bn'       => ['display_name' => 'কালকিনি']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 6,
            ],
            [
                'id'           => 85,
                'slug'         => 'rajoir',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'rajoir'],
                    'bn'       => ['display_name' => 'রাজৈর']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 6,
            ],
            //madaripur district all thanas
            [
                'id'           => 86,
                'slug'         => 'manikganj-sadar',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'manikganj sadar'],
                    'bn'       => ['display_name' => 'মানিকগঞ্জ সদর']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 7,
            ],
            [
                'id'           => 87,
                'slug'         => 'singair',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'singair'],
                    'bn'       => ['display_name' => 'সিংগাইর']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 7,
            ],
            [
                'id'           => 88,
                'slug'         => 'daulatpur',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'daulatpur'],
                    'bn'       => ['display_name' => 'দৌলতপুর']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 7,
            ],
            [
                'id'           => 89,
                'slug'         => 'saturia',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'saturia'],
                    'bn'       => ['display_name' => 'সাটুরিয়া']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 7,
            ],
            [
                'id'           => 90,
                'slug'         => 'ghior',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'ghior'],
                    'bn'       => ['display_name' => 'গিওর']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 7,
            ],
            [
                'id'           => 91,
                'slug'         => 'shivalaya',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'shivalaya'],
                    'bn'       => ['display_name' => 'শিবালয়']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 7,
            ],
            [
                'id'           => 92,
                'slug'         => 'harirampur',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'harirampur'],
                    'bn'       => ['display_name' => 'হরিরামপুর']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 7,
            ],
            //manikgonj district all thanas
            [
                'id'           => 93,
                'slug'         => 'munshiganj-sadar',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'munshiganj sadar'],
                    'bn'       => ['display_name' => 'মুন্সিগঞ্জ সদর']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 8,
            ],
            [
                'id'           => 94,
                'slug'         => 'sreenagar',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'sreenagar'],
                    'bn'       => ['display_name' => 'শ্রীনগর']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 8,
            ],
            [
                'id'           => 95,
                'slug'         => 'lohajang',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'lohajang'],
                    'bn'       => ['display_name' => 'লৌহজং']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 8,
            ],
            [
                'id'           => 96,
                'slug'         => 'sirajdikhan',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'sirajdikhan'],
                    'bn'       => ['display_name' => 'সিরাজদিখান']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 8,
            ],
            [
                'id'           => 97,
                'slug'         => 'gazaria',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'gazaria'],
                    'bn'       => ['display_name' => 'গজারিয়া']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 8,
            ],
            [
                'id'           => 98,
                'slug'         => 'tongibari',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'tongibari'],
                    'bn'       => ['display_name' => 'টঙ্গিবাড়ী']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 8,
            ],
            //Munshiganj district all thanas
            [
                'id'           => 99,
                'slug'         => 'narayanganj-sadar',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'narayanganj sadar'],
                    'bn'       => ['display_name' => 'নারায়ণগঞ্জ সদর']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 9,
            ],
            [
                'id'           => 100,
                'slug'         => 'araihazar',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'araihazar'],
                    'bn'       => ['display_name' => 'আড়াইহাজার']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 9,
            ],
            [
                'id'           => 101,
                'slug'         => 'rupganj',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'rupganj'],
                    'bn'       => ['display_name' => 'রূপগঞ্জ']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 9,
            ],
            [
                'id'           => 102,
                'slug'         => 'bandar',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'bandar'],
                    'bn'       => ['display_name' => 'বন্দর']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 9,
            ],
            [
                'id'           => 103,
                'slug'         => 'sonargaon',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'sonargaon'],
                    'bn'       => ['display_name' => 'সোনারগাঁও']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 9,
            ],
            [
                'id'           => 104,
                'slug'         => 'siddhirganj',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'siddhirganj'],
                    'bn'       => ['display_name' => 'সিদ্ধিরগঞ্জ']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 9,
            ],
            [
                'id'           => 105,
                'slug'         => 'fatullah',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'fatullah'],
                    'bn'       => ['display_name' => 'ফতুল্লা']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 9,
            ],
            //Narayanganj district all thanas
            [
                'id'           => 106,
                'slug'         => 'narsingdi-sadar',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'narsingdi sadar'],
                    'bn'       => ['display_name' => 'নরসিংদী সদর']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 10,
            ],
            [
                'id'           => 107,
                'slug'         => 'monohardi',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'monohardi'],
                    'bn'       => ['display_name' => 'মনোহরদি']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 10,
            ],
            [
                'id'           => 108,
                'slug'         => 'belabo',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'belabo'],
                    'bn'       => ['display_name' => 'বেলাব']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 10,
            ],
            [
                'id'           => 109,
                'slug'         => 'raipura',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'raipura'],
                    'bn'       => ['display_name' => 'রায়পুরা']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 10,
            ],
            [
                'id'           => 110,
                'slug'         => 'shibpur',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'shibpur'],
                    'bn'       => ['display_name' => 'শিবপুর']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 10,
            ],
            [
                'id'           => 111,
                'slug'         => 'palash',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'palash'],
                    'bn'       => ['display_name' => 'পলাশ']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 10,
            ],
            //Narsingdi District all thanas
            [
                'id'           => 112,
                'slug'         => 'rajbari sadar',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'rajbari sadar'],
                    'bn'       => ['display_name' => 'রাজবাড়ী সদর']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 11,
            ],
            [
                'id'           => 113,
                'slug'         => 'baliakandi',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'baliakandi'],
                    'bn'       => ['display_name' => 'বালিয়াকান্দি']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 11,
            ],
            [
                'id'           => 114,
                'slug'         => 'kalukhali',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'kalukhali'],
                    'bn'       => ['display_name' => 'কালুখালী']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 11,
            ],
            [
                'id'           => 115,
                'slug'         => 'goalandaghat',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'goalandaghat'],
                    'bn'       => ['display_name' => 'গোয়ালন্দঘাট']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 11,
            ],
            [
                'id'           => 116,
                'slug'         => 'pangsha',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'pangsha'],
                    'bn'       => ['display_name' => 'পাংশা']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 11,
            ],
            //rajbari district all thanas
            [
                'id'           => 117,
                'slug'         => 'shariatpur-sadar',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'shariatpur sadar'],
                    'bn'       => ['display_name' => 'শরীয়তপুর সদর']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 12,
            ],
            [
                'id'           => 118,
                'slug'         => 'bhedarganj',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'bhedarganj'],
                    'bn'       => ['display_name' => 'ভেদরগঞ্জ']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 12,
            ],
            [
                'id'           => 119,
                'slug'         => 'damudya',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'damudya'],
                    'bn'       => ['display_name' => 'ডামুড্যা']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 12,
            ],
            [
                'id'           => 120,
                'slug'         => 'gosairhat',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'gosairhat'],
                    'bn'       => ['display_name' => 'গোসাইরহাট']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 12,
            ],
            [
                'id'           => 121,
                'slug'         => 'naria',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'naria'],
                    'bn'       => ['display_name' => 'নড়িয়া']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 12,
            ],
            [
                'id'           => 122,
                'slug'         => 'shakhipur',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'shakhipur'],
                    'bn'       => ['display_name' => 'শখিপুর']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 12,
            ],
            [
                'id'           => 123,
                'slug'         => 'zanjira',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'zanjira'],
                    'bn'       => ['display_name' => 'জাঁজিরা']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 12,
            ],
            //shariatpur district all thanas
            [
                'id'           => 124,
                'slug'         => 'tangail-sadar',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'tangail sadar'],
                    'bn'       => ['display_name' => 'টাঙ্গাইল সদর']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 13,
            ],
            [
                'id'           => 125,
                'slug'         => 'basail',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'basail'],
                    'bn'       => ['display_name' => 'বাসাইল']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 13,
            ],
            [
                'id'           => 126,
                'slug'         => 'bhuapur',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'bhuapur'],
                    'bn'       => ['display_name' => 'ভূঞাপুর']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 13,
            ],
            [
                'id'           => 127,
                'slug'         => 'delduar',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'delduar'],
                    'bn'       => ['display_name' => 'দেলদুয়ার']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 13,
            ],
            [
                'id'           => 128,
                'slug'         => 'dhonbari',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'dhonbari'],
                    'bn'       => ['display_name' => 'ধনবাড়ি']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 13,
            ],
            [
                'id'           => 129,
                'slug'         => 'ghatail',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'ghatail'],
                    'bn'       => ['display_name' => 'ঘাটাইল']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 13,
            ],
            [
                'id'           => 130,
                'slug'         => 'gopalpur',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'gopalpur'],
                    'bn'       => ['display_name' => 'গোপালপুর']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 13,
            ],
            [
                'id'           => 131,
                'slug'         => 'kalihati',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'kalihati'],
                    'bn'       => ['display_name' => 'কালিহাতী']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 13,
            ],
            [
                'id'           => 132,
                'slug'         => 'madhupur',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'madhupur'],
                    'bn'       => ['display_name' => 'মধুপুর']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 13,
            ],
            [
                'id'           => 133,
                'slug'         => 'mirzapur',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'mirzapur'],
                    'bn'       => ['display_name' => 'মির্জাপুর']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 13,
            ],
            [
                'id'           => 134,
                'slug'         => 'nagarpur',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'nagarpur'],
                    'bn'       => ['display_name' => 'নাগরপুর']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 13,
            ],
            [
                'id'           => 135,
                'slug'         => 'sakhipur',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'sakhipur'],
                    'bn'       => ['display_name' => 'সখিপুর']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 13,
            ],
             //tangail district all thanas
            [
                'id'           => 136,
                'slug'         => 'bagerhat-sadar',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'bagerhat sadar'],
                    'bn'       => ['display_name' => 'বাগেরহাট সদর ']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 14,
            ],
            [
                'id'           => 137,
                'slug'         => 'mongla',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'mongla'],
                    'bn'       => ['display_name' => 'মোংলা']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 14,
            ],
            [
                'id'           => 138,
                'slug'         => 'chitalmari',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'chitalmari'],
                    'bn'       => ['display_name' => 'চিতলমারী']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 14,
            ],
            [
                'id'           => 139,
                'slug'         => 'mollahat',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'mollahat'],
                    'bn'       => ['display_name' => 'মোল্লাহাট']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 14,
            ],
            [
                'id'           => 140,
                'slug'         => 'sarankhola',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'sarankhola'],
                    'bn'       => ['display_name' => 'শরণখোলা']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 14,
            ],
            [
                'id'           => 141,
                'slug'         => 'rampal',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'rampal'],
                    'bn'       => ['display_name' => 'রামপাল']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 14,
            ],
            [
                'id'           => 142,
                'slug'         => 'fakirhat',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'fakirhat'],
                    'bn'       => ['display_name' => 'ফকিরহাট ']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 14,
            ],
            [
                'id'           => 143,
                'slug'         => 'morrelganj',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'morrelganj'],
                    'bn'       => ['display_name' => 'মোড়েলগঞ্জ']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 14,
            ],
            [
                'id'           => 144,
                'slug'         => 'kachua',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'kachua'],
                    'bn'       => ['display_name' => 'কচুয়া']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 14,
            ],
                   
            //bagerhat district all thanas

            [
                'id'           => 145,
                'slug'         => 'chuadanga-sadar',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'chuadanga sadar'],
                    'bn'       => ['display_name' => 'চুয়াডাঙ্গা সদর']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 15,
            ],
            [
                'id'           => 146,
                'slug'         => 'alamdanga',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'alamdanga'],
                    'bn'       => ['display_name' => 'আলমডাঙ্গা']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 15,
            ],
            [
                'id'           => 147,
                'slug'         => 'damurhuda',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'damurhuda'],
                    'bn'       => ['display_name' => 'দামুড়হুদা']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 15,
            ],
            [
                'id'           => 148,
                'slug'         => 'jibonnagar',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'jibonnagar'],
                    'bn'       => ['display_name' => 'জীবননগর']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 15,
            ],
            // chuadanga district all thanas
            [
                'id'           => 149,
                'slug'         => 'jessore-sadar',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'jessore sadar'],
                    'bn'       => ['display_name' => 'যশোর সদর']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 16,
            ],
            [
                'id'           => 150,
                'slug'         => 'jhikargachha',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'jhikargachha'],
                    'bn'       => ['display_name' => 'ঝিকরগাছা ']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 16,
            ],
            [
                'id'           => 151,
                'slug'         => 'manirampur',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'manirampur'],
                    'bn'       => ['display_name' => 'মনিরামপুর']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 16,
            ],
            [
                'id'           => 152,
                'slug'         => 'bagherpara ',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'bagherpara '],
                    'bn'       => ['display_name' => 'বাঘারপাড়া ']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 16,
            ],
            [
                'id'           => 153,
                'slug'         => 'abhaynagar',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'abhaynagar'],
                    'bn'       => ['display_name' => 'অভয়নগর']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 16,
            ],
            [
                'id'           => 154,
                'slug'         => 'keshabpur',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'keshabpur'],
                    'bn'       => ['display_name' => 'কেশবপুর']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 16,
            ],
            [
                'id'           => 155,
                'slug'         => 'sharsha',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'sharsha'],
                    'bn'       => ['display_name' => 'শার্শা']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 16,
            ],
            [
                'id'           => 156,
                'slug'         => 'chaugachha',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'chaugachha'],
                    'bn'       => ['display_name' => 'চৌগাছা']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 16,
            ],
            // jessore district all thanas
            [
                'id'           => 157,
                'slug'         => 'jhenaidah-sadar',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'jhenaidah sadar'],
                    'bn'       => ['display_name' => 'ঝিনাইদহ সদর']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 17,
            ],
            [
                'id'           => 158,
                'slug'         => 'shailkupa',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'shailkupa'],
                    'bn'       => ['display_name' => 'শৈলকুপা']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 17,
            ],
            [
                'id'           => 159,
                'slug'         => 'harinakunda',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'harinakunda'],
                    'bn'       => ['display_name' => 'হরিণাকুন্ডু ']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 17,
            ],
            [
                'id'           => 160,
                'slug'         => 'maheshpur',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'maheshpur'],
                    'bn'       => ['display_name' => 'মহেশপুর']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 17,
            ],
            [
                'id'           => 161,
                'slug'         => 'kotchandpur',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'kotchandpur'],
                    'bn'       => ['display_name' => 'কোটচাঁদপুর']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 17,
            ],
            [
                'id'           => 162,
                'slug'         => 'kaliganj-upazila',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'kaliganj upazila'],
                    'bn'       => ['display_name' => 'কালীগঞ্জ']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 17,
            ],
            // jhenaidah district all thanas
            [
                'id'           => 163,
                'slug'         => 'dumuria',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'dumuria'],
                    'bn'       => ['display_name' => 'ডুমুরিয়া']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 18,
            ],
            [
                'id'           => 164,
                'slug'         => 'batiaghata',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'batiaghata'],
                    'bn'       => ['display_name' => 'বটিয়াঘাটা']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 18,
            ],
            [
                'id'           => 165,
                'slug'         => 'dacope',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'dacope'],
                    'bn'       => ['display_name' => 'দাকোপ']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 18,
            ],
            [
                'id'           => 166,
                'slug'         => 'phultala',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'phultala'],
                    'bn'       => ['display_name' => 'ফুলতলা ']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 18,
            ],
            [
                'id'           => 167,
                'slug'         => 'dighalia',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'dighalia'],
                    'bn'       => ['display_name' => 'দিঘলিয়া']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 18,
            ],
            [
                'id'           => 168,
                'slug'         => 'koyra',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'koyra'],
                    'bn'       => ['display_name' => 'কয়রা']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 18,
            ],
            [
                'id'           => 169,
                'slug'         => 'terokhada',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'terokhada'],
                    'bn'       => ['display_name' => 'তেরখাদা']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 18,
            ],
            [
                'id'           => 170,
                'slug'         => 'rupsha',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'rupsha'],
                    'bn'       => ['display_name' => 'রূপসা']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 18,
            ],
            [
                'id'           => 171,
                'slug'         => 'paikgachha',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'paikgachha'],
                    'bn'       => ['display_name' => 'পাইকগাছা']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 18,
            ],
             // khulna district all thanas
            [
                'id'           => 172,
                'slug'         => 'kushtia-sadar',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'kushtia sadar'],
                    'bn'       => ['display_name' => 'কুষ্টিয়া সদর']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 19,
            ],
            [
                'id'           => 173,
                'slug'         => 'miripur',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'miripur'],
                    'bn'       => ['display_name' => 'মিরপুর']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 19,
            ],
            [
                'id'           => 174,
                'slug'         => 'khoksa',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'khoksa'],
                    'bn'       => ['display_name' => 'খোকসা']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 19,
            ],
            [
                'id'           => 175,
                'slug'         => 'bheramara',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'bheramara'],
                    'bn'       => ['display_name' => 'ভেরামারা']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 19,
            ],
            [
                'id'           => 176,
                'slug'         => 'kumarkhali',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'kumarkhali'],
                    'bn'       => ['display_name' => 'কুমারখালী']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 19,
            ],
            [
                'id'           => 177,
                'slug'         => 'daulattpur',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'daulattpur'],
                    'bn'       => ['display_name' => 'দৌলতপুর']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 19,
            ],
             [
                'id'           => 178,
                'slug'         => 'magura-sadar',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'magura sadar'],
                    'bn'       => ['display_name' => 'মাগুরা']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 20,
            ],
             [
                'id'           => 179,
                'slug'         => 'shalikha',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'shalikha'],
                    'bn'       => ['display_name' => 'শালিখা']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 20,
            ],
             [
                'id'           => 180,
                'slug'         => 'sreepur',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'sreepur'],
                    'bn'       => ['display_name' => 'শ্রীপুর']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 20,
            ],
             [
                'id'           => 181,
                'slug'         => 'mohammadpur',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'mohammadpur'],
                    'bn'       => ['display_name' => 'মহম্মদপুর']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 21,
            ],
             [
                'id'           => 182,
                'slug'         => 'meherpur-sadar',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'meherpur sadar'],
                    'bn'       => ['display_name' => 'মেহেরপুর সদর']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 21,
            ],
            [
                'id'           => 183,
                'slug'         => 'mohammadpur',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'mohammadpur'],
                    'bn'       => ['display_name' => 'মহম্মদপুর']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 21,
            ],
            // Meherpur district all thanas
            [
                'id'           => 184,
                'slug'         => 'narail-sadar',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'narail sadar'],
                    'bn'       => ['display_name' => 'নড়াইল সদর']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 22,
            ],
            [
                'id'           => 185,
                'slug'         => 'lohagara',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'lohagara'],
                    'bn'       => ['display_name' => 'লোহাগড়া']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 22,
            ],
            [
                'id'           => 186,
                'slug'         => 'kalia',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'kalia'],
                    'bn'       => ['display_name' => 'কালিয়া']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 22,
            ],
            //Narail  district all thanas
            [
                'id'           => 187,
                'slug'         => 'Satkhira-Sadar',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'satkhira sadar'],
                    'bn'       => ['display_name' => 'সাতক্ষীরা সদর']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 23,
            ],
            [
                'id'           => 188,
                'slug'         => 'shyamnagar',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'shyamnagar'],
                    'bn'       => ['display_name' => 'শ্যামনগর']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 23,
            ],
            [
                'id'           => 189,
                'slug'         => 'assasuni',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'assasuni'],
                    'bn'       => ['display_name' => 'আশাশুনি']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 23,
            ],
            [
                'id'           => 190,
                'slug'         => 'kaliganj',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'kaliganj'],
                    'bn'       => ['display_name' => 'কালিগঞ্জ']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 23,
            ],
            [
                'id'           => 191,
                'slug'         => 'debhata',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'debhata'],
                    'bn'       => ['display_name' => 'দেবহাটা']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 23,
            ],
            [
                'id'           => 192,
                'slug'         => 'kalaroa',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'kalaroa'],
                    'bn'       => ['display_name' => 'কলারোয়া']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 23,
            ],
            [
                'id'           => 193,
                'slug'         => 'tala',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'tala'],
                    'bn'       => ['display_name' => 'তালা']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 23,
            ],
            //satkhira district all thanas
            [
                'id'           => 194,
                'slug'         => 'barguna-sadar',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'barguna sadar'],
                    'bn'       => ['display_name' => 'বরগুনা সদর']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 24,
            ],
            [
                'id'           => 195,
                'slug'         => 'betagi',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'betagi'],
                    'bn'       => ['display_name' => 'বেতাগী']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 24,
            ],
            [
                'id'           => 196,
                'slug'         => 'bamna',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'bamna'],
                    'bn'       => ['display_name' => 'বামনা']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 24,
            ],
            [
                'id'           => 197,
                'slug'         => 'patharghata',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'patharghata'],
                    'bn'       => ['display_name' => 'পাথরঘাটা']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 24,
            ],
            [
                'id'           => 198,
                'slug'         => 'amtali',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'amtali'],
                    'bn'       => ['display_name' => 'আমতলী']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 24,
            ],
            [
                'id'           => 199,
                'slug'         => 'taltali',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'taltali'],
                    'bn'       => ['display_name' => 'তালতলী']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 24,
            ],
            //barguna district all thanas
            [
                'id'           => 200,
                'slug'         => 'barisal-sadar',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'barisal sadar'],
                    'bn'       => ['display_name' => 'বরিশাল সদর']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 25,
            ],
            [
                'id'           =>201 ,
                'slug'         => 'banaripara',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'banaripara'],
                    'bn'       => ['display_name' => 'বানারীপাড়া']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 25,
            ],
            [
                'id'           => 202,
                'slug'         => 'bakerganj',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'bakerganj'],
                    'bn'       => ['display_name' => 'বাকেরগঞ্জ']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 25,
            ],
            [
                'id'           => 203,
                'slug'         => 'babuganj',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'babuganj'],
                    'bn'       => ['display_name' => 'বাবুগঞ্জ']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 25,
            ],
            [
                'id'           => 204,
                'slug'         => 'gaurnadi',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'gaurnadi'],
                    'bn'       => ['display_name' => 'গৌরনদী']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 25,
            ],
            [
                'id'           => 205,
                'slug'         => 'hizla',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'hizla'],
                    'bn'       => ['display_name' => 'হিজলা']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 25,
            ],
            [
                'id'           => 206,
                'slug'         => 'mehendiganj',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'mehendiganj'],
                    'bn'       => ['display_name' => 'মেহেন্দিগঞ্জ']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 25,
            ],
            [
                'id'           => 207,
                'slug'         => 'agailjhara',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'agailjhara'],
                    'bn'       => ['display_name' => 'আগৈলঝারা']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 25,
            ],
            [
                'id'           => 208,
                'slug'         => 'wazirpur',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'wazirpur'],
                    'bn'       => ['display_name' => 'উজিরপুর']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 25,
            ],
            [
                'id'           => 209,
                'slug'         => 'muladi',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'muladi'],
                    'bn'       => ['display_name' => 'মুলাদি']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 25,
            ],
            // Barisal district all thanas
            [
                'id'           => 210,
                'slug'         => 'bhola-sadar',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'bhola sadar'],
                    'bn'       => ['display_name' => 'ভোলা সদর']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 26,
            ],
            [
                'id'           => 211,
                'slug'         => 'char-fasson',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'char fasson'],
                    'bn'       => ['display_name' => 'চরফ্যাশন']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 26,
            ],
            [
                'id'           => 212,
                'slug'         => 'manpura',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'manpura'],
                    'bn'       => ['display_name' => 'মনপুরা']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 26,
            ],
            [
                'id'           => 213,
                'slug'         => 'burhanuddin',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'burhanuddin'],
                    'bn'       => ['display_name' => 'বোরহানউদ্দিন']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 26,
            ],
            [
                'id'           => 214,
                'slug'         => 'tazumuddin',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'tazumuddin'],
                    'bn'       => ['display_name' => 'তজমুদ্দিন']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 26,
            ],
            [
                'id'           => 215,
                'slug'         => 'daulatkhan',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'daulatkhan'],
                    'bn'       => ['display_name' => 'দৌলতখান']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 26,
            ],
            [
                'id'           => 216,
                'slug'         => 'lalmohan',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'lalmohan'],
                    'bn'       => ['display_name' => 'লালমোহন']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 26,
            ],
            //Bhola district all thanas
            [
                'id'           => 217,
                'slug'         => 'jhalokati-sadar',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'jhalokati sadar'],
                    'bn'       => ['display_name' => 'ঝালকাঠি সদর']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 27,
            ],
            [
                'id'           => 218,
                'slug'         => 'nalchity',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'nalchity'],
                    'bn'       => ['display_name' => 'নলসিটি']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 27,
            ],
            [
                'id'           => 219,
                'slug'         => 'kathalia',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'kathalia'],
                    'bn'       => ['display_name' => 'কাঠালিয়া']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 27,
            ],
            [
                'id'           => 220,
                'slug'         => 'rajapur',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'rajapur'],
                    'bn'       => ['display_name' => 'লালমোহন']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 27,
            ],
            //jhalokati district all thanas
            [
                'id'           => 221,
                'slug'         => 'patuakhali sadar',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'patuakhali sadar'],
                    'bn'       => ['display_name' => 'পটুয়াখালী সদর']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 28,
            ],
            [
                'id'           => 222,
                'slug'         => 'galachipa',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'galachipa'],
                    'bn'       => ['display_name' => 'গলাচিপা']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 28,
            ],
            [
                'id'           => 223,
                'slug'         => 'dumki',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'dumki'],
                    'bn'       => ['display_name' => 'ডুমকি']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 28,
            ],
            [
                'id'           => 224,
                'slug'         => 'mirzaganj',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'mirzaganj'],
                    'bn'       => ['display_name' => 'মির্জাগঞ্জ']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 28,
            ],
            [
                'id'           => 225,
                'slug'         => 'dasmina',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'dasmina'],
                    'bn'       => ['display_name' => 'দশমিনা']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 28,
            ],
            [
                'id'           => 226,
                'slug'         => 'bauphal',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'bauphal'],
                    'bn'       => ['display_name' => 'বাউফল']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 28,
            ],
            [
                'id'           => 227,
                'slug'         => 'kalapara',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'kalapara'],
                    'bn'       => ['display_name' => 'কলাপাড়া']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 28,
            ],
            [
                'id'           => 228,
                'slug'         => 'rangabali',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'rangabali'],
                    'bn'       => ['display_name' => 'রাঙ্গাবালি']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 28,
            ],
            //patuakhali district all thanas
            [
                'id'           => 229,
                'slug'         => 'pirojpur-sadar',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'pirojpur sadar'],
                    'bn'       => ['display_name' => 'পিরোজপুর সদর']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 29,
            ],
            [
                'id'           => 230,
                'slug'         => 'zianagar',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'zianagar'],
                    'bn'       => ['display_name' => 'জিয়ানগর']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 29,
            ],
            [
                'id'           => 231,
                'slug'         => 'mathbaria',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'mathbaria'],
                    'bn'       => ['display_name' => 'মঠবাড়িয়া']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 29,
            ],
            [
                'id'           => 232,
                'slug'         => 'bhandaria',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'bhandaria'],
                    'bn'       => ['display_name' => 'ভান্ডারিয়া']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 29,
            ],
            [
                'id'           => 233,
                'slug'         => 'kawkhali',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'kawkhali'],
                    'bn'       => ['display_name' => 'কাউখালী']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 29,
            ],
            [
                'id'           => 234,
                'slug'         => 'nesarabad',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'nesarabad'],
                    'bn'       => ['display_name' => 'নেছারাবাদ']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 29,
            ],
            [
                'id'           => 235,
                'slug'         => 'nazirpur',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'nazirpur'],
                    'bn'       => ['display_name' => 'নাজিরপুর']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 29,
            ],
            //Pirojpur district all thanas
            [
                'id'           => 236,
                'slug'         => 'habiganj-sadar',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'habiganj sadar'],
                    'bn'       => ['display_name' => 'হবিগঞ্জ সদর']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 30,
            ],
            [
                'id'           => 237,
                'slug'         => 'lakhai',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'lakhai'],
                    'bn'       => ['display_name' => 'লাখাই']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 30,
            ],
            [
                'id'           => 238,
                'slug'         => 'madhabpur',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'madhabpur'],
                    'bn'       => ['display_name' => 'মাধবপুর']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 30,
            ],
            [
                'id'           => 239,
                'slug'         => 'nabiganj',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'nabiganj'],
                    'bn'       => ['display_name' => 'নবীগঞ্জ']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 30,
            ],
            [
                'id'           => 240,
                'slug'         => 'chunarughat',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'chunarughat'],
                    'bn'       => ['display_name' => 'চুনারুঘাট']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 30,
            ],
            [
                'id'           => 241,
                'slug'         => 'baniachang',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'baniachang'],
                    'bn'       => ['display_name' => 'বানিয়াচং']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 30,
            ],
            [
                'id'           => 242,
                'slug'         => 'bhahubal',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'bhahubal'],
                    'bn'       => ['display_name' => 'বাহুবল']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 30,
            ],
            [
                'id'           => 243,
                'slug'         => 'ajmiriganj',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'ajmiriganj'],
                    'bn'       => ['display_name' => 'আজমেরীগঞ্জ']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 30,
            ],
            //Habiganj district all thanas
            [
                'id'           => 244,
                'slug'         => 'moulvibazar-sadar',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'moulvibazar sadar'],
                    'bn'       => ['display_name' => 'মৌলভীবাজার সদর']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 31,
            ],
            [
                'id'           => 245,
                'slug'         => 'sreemangal',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'sreemangal'],
                    'bn'       => ['display_name' => 'শ্রীমঙ্গল']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 31,
            ],
            [
                'id'           => 246,
                'slug'         => 'kulaura',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'kulaura'],
                    'bn'       => ['display_name' => 'কুলাউড়া']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 31,
            ],
            [
                'id'           => 247,
                'slug'         => 'kamalganj',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'kamalganj'],
                    'bn'       => ['display_name' => 'কমলগঞ্জ']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 31,
            ],
            [
                'id'           => 248,
                'slug'         => 'juri',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'juri'],
                    'bn'       => ['display_name' => 'জুড়ী']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 31,
            ],
            [
                'id'           => 249,
                'slug'         => 'barlekha',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'barlekha'],
                    'bn'       => ['display_name' => 'বড়লেখা']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 31,
            ],
            [
                'id'           => 250,
                'slug'         => 'rajnagar',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'rajnagar'],
                    'bn'       => ['display_name' => 'রাজনগর']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 31,
            ],
            //moulvibazar district all thanas
            [
                'id'           => 251,
                'slug'         => 'sunamganj-sadar',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'sunamganj sadar'],
                    'bn'       => ['display_name' => 'সুনামগঞ্জ সদর']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 32,
            ],
            [
                'id'           => 252,
                'slug'         => 'sunamganj',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'sunamganj'],
                    'bn'       => ['display_name' => 'সুনামগঞ্জ']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 32,
            ],
            [
                'id'           => 253,
                'slug'         => 'chhatak',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'chhatak'],
                    'bn'       => ['display_name' => 'ছাতক']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 32,
            ],
            [
                'id'           => 254,
                'slug'         => 'jagannathpur',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'jagannathpur'],
                    'bn'       => ['display_name' => 'জগন্নাথপুর']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 32,
            ],
            [
                'id'           => 255,
                'slug'         => 'bishwamvarpur',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'bishwamvarpur'],
                    'bn'       => ['display_name' => 'বিশ্বম্ভরপুর']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 32,
            ],
            [
                'id'           => 256,
                'slug'         => 'tahirpur',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'tahirpur'],
                    'bn'       => ['display_name' => 'তাহিরপুর']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 32,
            ],
            [
                'id'           => 257,
                'slug'         => 'derai',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'derai'],
                    'bn'       => ['display_name' => 'দিরাই']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 32,
            ],
            [
                'id'           => 258,
                'slug'         => 'dharampasha',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'dharampasha'],
                    'bn'       => ['display_name' => 'ধরমপাশা']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 32,
            ],
            [
                'id'           => 259,
                'slug'         => 'sulla',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'sulla'],
                    'bn'       => ['display_name' => 'শাল্লা']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 32,
            ],
            [
                'id'           => 260,
                'slug'         => 'dowarabazar',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'dowarabazar'],
                    'bn'       => ['display_name' => 'দোয়ারাবাজার']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 32,
            ],
            [
                'id'           => 261,
                'slug'         => 'jamalganj',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'jamalganj'],
                    'bn'       => ['display_name' => 'জামালগঞ্জ']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 32,
               
            ],
             //Sunamganj district all thanas
             [
                'id'           => 262,
                'slug'         => 'sylhet-sadar',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'sylhet sadar'],
                    'bn'       => ['display_name' => 'সিলেট সদর']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 33,
               
            ],
             [
                'id'           => 263,
                'slug'         => 'beanibazar',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'beanibazar'],
                    'bn'       => ['display_name' => 'বিয়ানিবাজার']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 33,
               
            ],
             [
                'id'           => 264,
                'slug'         => 'golapganj',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'golapganj'],
                    'bn'       => ['display_name' => 'গোপালগঞ্জ']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 33,
               
            ],
             [
                'id'           => 265,
                'slug'         => 'companiganj',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'companiganj'],
                    'bn'       => ['display_name' => 'কোম্পানীগঞ্জ']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 33,
               
            ],
             [
                'id'           => 266,
                'slug'         => 'fenchuganj',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'fenchuganj'],
                    'bn'       => ['display_name' => 'ফেঞ্চুগঞ্জ']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 33,
               
            ],
             [
                'id'           => 267,
                'slug'         => 'bishwanath',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'bishwanath'],
                    'bn'       => ['display_name' => 'বিশ্বনাথ']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 33,
               
            ],
             [
                'id'           => 268,
                'slug'         => 'gowainghat',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'gowainghat'],
                    'bn'       => ['display_name' => 'গোয়াইনঘাট']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 33,
               
            ],
             [
                'id'           => 269,
                'slug'         => 'jaintiapur',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'jaintiapur'],
                    'bn'       => ['display_name' => 'জৈন্তাপুর']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 33,
               
            ],
             [
                'id'           => 270,
                'slug'         => 'kanaighat',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'kanaighat'],
                    'bn'       => ['display_name' => 'কানাইঘাট']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 33,
               
            ],
             [
                'id'           => 271,
                'slug'         => 'balaganj',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'balaganj'],
                    'bn'       => ['display_name' => 'বালাগঞ্জ']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 33,
               
            ],
             [
                'id'           => 272,
                'slug'         => 'south-shurma',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'south shurma'],
                    'bn'       => ['display_name' => 'দক্ষিণ সুরমা']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 33,
               
            ],
            [
                'id'           => 273,
                'slug'         => 'zakiganj',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'zakiganj'],
                    'bn'       => ['display_name' => 'জকিগঞ্জ']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 33,
               
            ],
            // sylhet district all thanas
            [
                'id'           => 274,
                'slug'         => 'bandarban-sadar',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'bandarban sadar'],
                    'bn'       => ['display_name' => 'বান্দরবান সদর']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 34,
               
            ],
            [
                'id'           => 275,
                'slug'         => 'zakiganj',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'zakiganj'],
                    'bn'       => ['display_name' => 'জকিগঞ্জ']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 34,
               
            ],
            [
                'id'           => 276,
                'slug'         => 'lama',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'lama'],
                    'bn'       => ['display_name' => 'লামা']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 34,
               
            ],
            [
                'id'           => 277,
                'slug'         => 'thanchi',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'thanchi'],
                    'bn'       => ['display_name' => 'থানছি']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 34,
               
            ],
            [
                'id'           => 278,
                'slug'         => 'alikadam',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'alikadam'],
                    'bn'       => ['display_name' => 'কালীকদম']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 34,
               
            ],
            [
                'id'           => 279,
                'slug'         => 'ruma',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'ruma'],
                    'bn'       => ['display_name' => 'রূমা']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 34,
               
            ],
            [
                'id'           => 280,
                'slug'         => 'naikhongchhari',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'naikhongchhari'],
                    'bn'       => ['display_name' => 'নাইখংছড়ি']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 34,
               
            ],
            [
                'id'           => 281,
                'slug'         => 'rowangcchari',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'rowangcchari'],
                    'bn'       => ['display_name' => 'রোয়াংছড়ি']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 34,
               
            ],
            // bandarban district all thanas
            [
                'id'           => 282,
                'slug'         => 'brahmanbaria-sadar',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'brahmanbaria sadar'],
                    'bn'       => ['display_name' => 'ব্রাহ্মণবাড়িয়া সদর']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 35,
               
            ],
            [
                'id'           => 283,
                'slug'         => 'bijoynagar',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'bijoynagar'],
                    'bn'       => ['display_name' => 'বিজয়নগর']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 35,
               
            ],
            [
                'id'           => 284,
                'slug'         => 'akhaura',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'akhaura'],
                    'bn'       => ['display_name' => 'আখাউড়া']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 35,
               
            ],
            [
                'id'           => 285,
                'slug'         => 'ashuganj',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'ashuganj'],
                    'bn'       => ['display_name' => 'আশুগঞ্জ']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 35,
               
            ],
            [
                'id'           => 286,
                'slug'         => 'bancharampur',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'bancharampur'],
                    'bn'       => ['display_name' => 'বাঞ্ছারামপুর']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 35,
               
            ],
            [
                'id'           => 287,
                'slug'         => 'kasba',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'kasba'],
                    'bn'       => ['display_name' => 'কসবা']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 35,
               
            ],
            [
                'id'           => 288,
                'slug'         => 'nabinagar',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'nabinagar'],
                    'bn'       => ['display_name' => 'নবীনগর']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 35,
               
            ],
            [
                'id'           => 289,
                'slug'         => 'nasirnagar',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'nasirnagar'],
                    'bn'       => ['display_name' => 'নাছিরনগর']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 35,
               
            ],
            [
                'id'           => 290,
                'slug'         => 'sarail',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'sarail'],
                    'bn'       => ['display_name' => 'সরাইল']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 35,
               
            ],
            // Brahmanbaria  district all thanas
            [
                'id'           => 291,
                'slug'         => 'chandpur-sadar',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'chandpur sadar'],
                    'bn'       => ['display_name' => 'চাঁদপুর সদর']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 36,
               
            ],
            [
                'id'           => 292,
                'slug'         => 'haziganj',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'haziganj'],
                    'bn'       => ['display_name' => 'হাজীগঞ্জ']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 36,
               
            ],
            [
                'id'           => 293,
                'slug'         => 'shahrasti',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'shahrasti'],
                    'bn'       => ['display_name' => 'শাহরাস্তি']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 36,
               
            ],
            [
                'id'           => 294,
                'slug'         => 'haimchar',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'haimchar'],
                    'bn'       => ['display_name' => 'হাইমচর']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 36,
               
            ],
            [
                'id'           => 295,
                'slug'         => 'faridganj',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'faridganj'],
                    'bn'       => ['display_name' => 'ফরিদগঞ্জ']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 36,
               
            ],
            [
                'id'           => 296,
                'slug'         => 'kachua',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'kachua'],
                    'bn'       => ['display_name' => 'কচুয়া']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 36,
               
            ],
            [
                'id'           => 297,
                'slug'         => 'matlab-uttar',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'matlab uttar'],
                    'bn'       => ['display_name' => 'মতলব উত্তর']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 36,
               
            ],
            [
                'id'           => 298,
                'slug'         => 'matlab-dakkhin',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'matlab dakkhin'],
                    'bn'       => ['display_name' => 'মতলব দক্ষিণ']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 36,
               
            ],
            //Chandpur  district all thanas
            [
                'id'           => 299,
                'slug'         => 'mirsharai',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'mirsharai'],
                    'bn'       => ['display_name' => 'মিরশ্বরাই']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 37,
               
            ],
            [
                'id'           => 300,
                'slug'         => 'mirsharai',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'matlab dakkhin'],
                    'bn'       => ['display_name' => 'মতলব দক্ষিণ']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 37,
               
            ],
            [
                'id'           => 301,
                'slug'         => 'rangunia',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'rangunia'],
                    'bn'       => ['display_name' => 'রাঙ্গুনিয়া']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 37,
               
            ],
            [
                'id'           => 302,
                'slug'         => 'patiya',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'patiya'],
                    'bn'       => ['display_name' => 'পটিয়া']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 37,
               
            ],
            [
                'id'           => 303,
                'slug'         => 'raozan',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'raozan'],
                    'bn'       => ['display_name' => 'রাউজান']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 37,
               
            ],
            [
                'id'           => 304,
                'slug'         => 'sandwip',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'sandwip'],
                    'bn'       => ['display_name' => 'সন্দ্বীপ']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 37,
               
            ],
            [
                'id'           => 305,
                'slug'         => 'satkania',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'satkania'],
                    'bn'       => ['display_name' => 'সাতকানিয়া ']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 37,
               
            ],
            [
                'id'           => 306,
                'slug'         => 'sitakunda',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'sitakunda'],
                    'bn'       => ['display_name' => 'সিতাকুন্ড']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 37,
               
            ],
            [
                'id'           => 307,
                'slug'         => 'anwara',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'anwara'],
                    'bn'       => ['display_name' => 'আনোয়ারা']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 37,
               
            ],
            [
                'id'           => 308,
                'slug'         => 'banshkhali',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'banshkhali'],
                    'bn'       => ['display_name' => 'বাঁশখালী']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 37,
               
            ],
            [
                'id'           => 309,
                'slug'         => 'boalkhali',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'boalkhali'],
                    'bn'       => ['display_name' => 'বোয়ালখালী']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 37,
               
            ],
            [
                'id'           => 310,
                'slug'         => ' chandanaish',
                'localization' => json_encode([
                    'en'       => ['display_name' => ' chandanaish'],
                    'bn'       => ['display_name' => 'চন্দনাইশ']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 37,
               
            ],
            [
                'id'           => 311,
                'slug'         => 'fatikchhari',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'fatikchhari'],
                    'bn'       => ['display_name' => 'ফটিকছড়ি']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 37,
               
            ],
            [
                'id'           => 312,
                'slug'         => 'hathazari',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'hathazari'],
                    'bn'       => ['display_name' => 'হাটহাজারী']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 37,
               
            ],
            [
                'id'           => 313,
                'slug'         => 'lohagara',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'lohagara'],
                    'bn'       => ['display_name' => 'লোহাগড়া']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 37,
               
            ],
            //Chittagong district all thanas
            [
                'id'           => 314,
                'slug'         => 'comilla-sadar',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'comilla sadar'],
                    'bn'       => ['display_name' => 'কুমিল্লা সদর']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 38,
               
            ],
            [
                'id'           => 315,
                'slug'         => 'comilla-adarsa',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'comilla adarsa'],
                    'bn'       => ['display_name' => 'কুমিল্লা আদর্শ']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 38,
               
            ],
            [
                'id'           => 316,
                'slug'         => 'barura',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'barura'],
                    'bn'       => ['display_name' => 'বরুড়া']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 38,
               
            ],
            [
                'id'           => 317,
                'slug'         => 'chandina',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'chandina'],
                    'bn'       => ['display_name' => 'চান্দিনা']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 38,
               
            ],
            [
                'id'           => 318,
                'slug'         => 'chauddagram',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'chauddagram'],
                    'bn'       => ['display_name' => 'চৌদ্দগ্রাম']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 38,
               
            ],
            [
                'id'           => 319,
                'slug'         => 'daudkandi',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'daudkandi'],
                    'bn'       => ['display_name' => 'দাউদকান্দি']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 38,
               
            ],
            [
                'id'           => 320,
                'slug'         => 'brahmanpara',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'brahmanpara'],
                    'bn'       => ['display_name' => 'ব্রাহ্মণপাড়া']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 38,
               
            ],
            [
                'id'           => 321,
                'slug'         => 'homna',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'homna'],
                    'bn'       => ['display_name' => 'হোমনা']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 38,
               
            ],
            [
                'id'           => 322,
                'slug'         => 'monohorgonj',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'monohorgonj'],
                    'bn'       => ['display_name' => 'মনোহরগঞ্জ']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 38,
               
            ],
            [
                'id'           => 323,
                'slug'         => 'laksam',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'laksam'],
                    'bn'       => ['display_name' => 'লোহাগড়া']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 38,
               
            ],
            [
                'id'           => 324,
                'slug'         => 'burichong',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'burichong'],
                    'bn'       => ['display_name' => 'বুড়িচং']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 38,
               
            ],
            [
                'id'           => 325,
                'slug'         => 'debidwar',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'debidwar'],
                    'bn'       => ['display_name' => 'দেবীদ্বার']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 38,
               
            ],
            [
                'id'           => 326,
                'slug'         => 'meghna',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'meghna'],
                    'bn'       => ['display_name' => 'মেঘনা']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 38,
               
            ],
            [
                'id'           => 327,
                'slug'         => 'muradnagar',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'muradnagar'],
                    'bn'       => ['display_name' => 'মুরাদনগর']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 38,
               
            ],
            [
                'id'           => 328,
                'slug'         => 'nangalkot',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'nangalkot'],
                    'bn'       => ['display_name' => 'নাঙ্গলকোট']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 38,
               
            ],
            [
                'id'           => 329,
                'slug'         => 'titas',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'titas'],
                    'bn'       => ['display_name' => 'তিতাস']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 38,
               
            ],
            //Comilla district all thanas
            [
                'id'           => 330,
                'slug'         => 'ramu',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'ramu'],
                    'bn'       => ['display_name' => 'তিতাস']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 39,
               
            ],
            [
                'id'           => 331,
                'slug'         => 'cox`s bazar',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'cox`s bazar'],
                    'bn'       => ['display_name' => 'কক্সবাজার']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 39,
               
            ],
            [
                'id'           => 332,
                'slug'         => 'teknaf',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'teknaf'],
                    'bn'       => ['display_name' => 'টেকনাফ']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 39,
               
            ],
            [
                'id'           => 333,
                'slug'         => 'chakaria',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'chakaria'],
                    'bn'       => ['display_name' => 'চকোরিয়া']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 39,
               
            ],
            [
                'id'           => 334,
                'slug'         => 'maheshkhali',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'maheshkhali'],
                    'bn'       => ['display_name' => 'মহেশখালী']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 39,
               
            ],
            [
                'id'           => 335,
                'slug'         => 'pekua',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'pekua'],
                    'bn'       => ['display_name' => 'পেকুয়া']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 39,
               
            ],
            [
                'id'           => 336,
                'slug'         => 'kutubdia',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'kutubdia'],
                    'bn'       => ['display_name' => 'কুতুবদিয়া']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 39,
               
            ],
            [
                'id'           => 337,
                'slug'         => 'ukhia',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'ukhia'],
                    'bn'       => ['display_name' => 'উখিয়া']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 39,
               
            ],
            //Cox's Bazar district all thanas
            [
                'id'           => 338,
                'slug'         => 'feni-sadar',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'feni sadar'],
                    'bn'       => ['display_name' => 'ফেনী সদর']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 40,
               
            ],
            [
                'id'           => 339,
                'slug'         => 'daganbhuiyan',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'daganbhuiyan'],
                    'bn'       => ['display_name' => 'দাগনভূঞা']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 40,
               
            ],
            [
                'id'           => 340,
                'slug'         => 'chhagalnaiya',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'chhagalnaiya'],
                    'bn'       => ['display_name' => 'ছাগলন্যাইয়া']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 40,
               
            ],
            [
                'id'           => 341,
                'slug'         => 'porshuram',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'porshuram'],
                    'bn'       => ['display_name' => 'পরশুরাম']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 40,
               
            ],
            [
                'id'           => 342,
                'slug'         => 'fulgazi',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'fulgazi'],
                    'bn'       => ['display_name' => 'ফুলগাজী']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 40,
               
            ],
            [
                'id'           => 343,
                'slug'         => 'sonagazi',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'sonagazi'],
                    'bn'       => ['display_name' => 'সোনাগাজী']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 40,
               
            ],
            // Feni district all thanas
            [
                'id'           => 344,
                'slug'         => 'khagrachhari-sadar',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'khagrachhari sadar'],
                    'bn'       => ['display_name' => 'খাগড়াছড়ি সদর']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 41,
               
            ],
            [
                'id'           => 345,
                'slug'         => 'panchhari',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'panchhari'],
                    'bn'       => ['display_name' => 'পানছড়ি']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 41,
               
            ],
            [
                'id'           => 346,
                'slug'         => 'dighinala',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'dighinala'],
                    'bn'       => ['display_name' => 'দিঘীনালা']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 41,
               
            ],
            [
                'id'           => 347,
                'slug'         => 'manikchhari',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'manikchhari'],
                    'bn'       => ['display_name' => 'মানিকছড়ি']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 41,
               
            ],
            [
                'id'           => 348,
                'slug'         => 'lakshmichhari',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'lakshmichhari'],
                    'bn'       => ['display_name' => 'লক্ষ্মীছড়ি']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 41,
               
            ],
            [
                'id'           => 349,
                'slug'         => 'ramgarh',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'ramgarh'],
                    'bn'       => ['display_name' => 'রামগড়']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 41,
               
            ],
            [
                'id'           => 350,
                'slug'         => 'mahalchhari',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'mahalchhari'],
                    'bn'       => ['display_name' => 'মহালছড়ি']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 41,
               
            ],
            [
                'id'           => 351,
                'slug'         => 'matiranga',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'matiranga'],
                    'bn'       => ['display_name' => 'মাটিরাঙ্গা']
                ], JSON_UNESCAPED_UNICODE),
                'district_id'  => 41,
               
            ],
        ]);
    }
}
