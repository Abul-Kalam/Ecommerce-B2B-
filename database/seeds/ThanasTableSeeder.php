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
        ]);
    }
}
