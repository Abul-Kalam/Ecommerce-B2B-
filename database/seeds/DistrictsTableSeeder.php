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
                'id'           => 1,
                'slug'         => 'dhaka',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'dhaka'],
                    'bn'       => ['display_name' => 'ঢাকা']
                ], JSON_UNESCAPED_UNICODE),
                'division_id'  => 1,
            ],
            [
                'id'           => 2,
                'slug'         => 'faridpur',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'faridpur'],
                    'bn'       => ['display_name' => 'ফরিদপুর ']
                ], JSON_UNESCAPED_UNICODE),
                'division_id'  => 1,
            ],
            [
                'id'           => 3,
                'slug'         => 'gazipur',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'gazipur'],
                    'bn'       => ['display_name' => 'গাজীপুর']
                ], JSON_UNESCAPED_UNICODE),
                'division_id'  => 1,
            ],
            [
                'id'           => 4,
                'slug'         => 'gopalganj',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'gopalganj'],
                    'bn'       => ['display_name' => 'গোপালগঞ্জ']
                ], JSON_UNESCAPED_UNICODE),
                'division_id'  => 1,
            ],
            [
                'id'           => 5,
                'slug'         => 'kishoreganj',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'kishoreganj'],
                    'bn'       => ['display_name' => 'কিশোরগঞ্জ']
                ], JSON_UNESCAPED_UNICODE),
                'division_id'  => 1,
            ],
            [
                'id'           => 6,
                'slug'         => 'madaripur ',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'madaripur '],
                    'bn'       => ['display_name' => 'মাদারীপুর']
                ], JSON_UNESCAPED_UNICODE),
                'division_id'  => 1,
            ],
            [
                'id'           => 7,
                'slug'         => 'manikganj',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'manikganj'],
                    'bn'       => ['display_name' => 'মানিকগঞ্জ']
                ], JSON_UNESCAPED_UNICODE),
                'division_id'  => 1,
            ],
            [
                'id'           => 8,
                'slug'         => 'munshiganj',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'munshiganj'],
                    'bn'       => ['display_name' => 'মুন্সীগঞ্জ']
                ], JSON_UNESCAPED_UNICODE),
                'division_id'  => 1,
            ],
            [
                'id'           => 9,
                'slug'         => 'narayanganj',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'narayanganj'],
                    'bn'       => ['display_name' => 'নারায়ণগঞ্জ']
                ], JSON_UNESCAPED_UNICODE),
                'division_id'  => 1,
            ],
            [
                'id'           => 10,
                'slug'         => 'narsingdi',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'narsingdi'],
                    'bn'       => ['display_name' => 'নরসিংদী']
                ], JSON_UNESCAPED_UNICODE),
                'division_id'  => 1,
            ],
            [
                'id'           => 11,
                'slug'         => 'rajbari',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'rajbari'],
                    'bn'       => ['display_name' => 'রাজবাড়ী']
                ], JSON_UNESCAPED_UNICODE),
                'division_id'  => 1,
            ],
            [
                'id'           => 12,
                'slug'         => 'shariatpur',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'shariatpur'],
                    'bn'       => ['display_name' => 'শরীয়তপুর']
                ], JSON_UNESCAPED_UNICODE),
                'division_id'  => 1,
            ],
            [
                'id'           => 13,
                'slug'         => 'tangail',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'tangail'],
                    'bn'       => ['display_name' => 'টাঙ্গাইল']
                ], JSON_UNESCAPED_UNICODE),
                'division_id'  => 1,
            ],
            [
                'id'           => 14,
                'slug'         => 'bagerhat',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'bagerhat'],
                    'bn'       => ['display_name' => 'বাগেরহাট']
                ], JSON_UNESCAPED_UNICODE),
                'division_id'  => 4,
            ],
            [
                'id'           => 15,
                'slug'         => 'chuadanga',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'chuadanga'],
                    'bn'       => ['display_name' => 'চুয়াডাঙ্গা']
                ], JSON_UNESCAPED_UNICODE),
                'division_id'  => 4,
            ],
            [
                'id'           => 16,
                'slug'         => 'jessore',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'jessore'],
                    'bn'       => ['display_name' => 'যশোর']
                ], JSON_UNESCAPED_UNICODE),
                'division_id'  => 4,
            ],
            [
                'id'           => 17,
                'slug'         => 'jhenaidah',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'jhenaidah'],
                    'bn'       => ['display_name' => 'ঝিনাইদহ']
                ], JSON_UNESCAPED_UNICODE),
                'division_id'  => 4,
            ],
            [
                'id'           => 18,
                'slug'         => 'khulna',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'khulna'],
                    'bn'       => ['display_name' => 'খুলনা']
                ], JSON_UNESCAPED_UNICODE),
                'division_id'  => 4,
            ],
            [
                'id'           => 19,
                'slug'         => 'kushtia',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'kushtia'],
                    'bn'       => ['display_name' => 'কুষ্টিয়া']
                ], JSON_UNESCAPED_UNICODE),
                'division_id'  => 4,
            ],
            [
                'id'           => 20,
                'slug'         => 'magura',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'magura'],
                    'bn'       => ['display_name' => 'মাগুরা']
                ], JSON_UNESCAPED_UNICODE),
                'division_id'  => 4,
            ],
            [
                'id'           => 21,
                'slug'         => 'meherpur',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'meherpur'],
                    'bn'       => ['display_name' => 'মেহেরপুর']
                ], JSON_UNESCAPED_UNICODE),
                'division_id'  => 4,
            ],
            [
                'id'           => 22,
                'slug'         => 'narail',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'narail'],
                    'bn'       => ['display_name' => 'নড়াইল']
                ], JSON_UNESCAPED_UNICODE),
                'division_id'  => 4,
            ],
            [
                'id'           => 23,
                'slug'         => 'satkhira',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'satkhira'],
                    'bn'       => ['display_name' => 'সাতক্ষিরা']
                ], JSON_UNESCAPED_UNICODE),
                'division_id'  => 4,
            ],
            [
                'id'           => 24,
                'slug'         => 'barguna',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'barguna'],
                    'bn'       => ['display_name' => 'বরগুনা']
                ], JSON_UNESCAPED_UNICODE),
                'division_id'  => 2,
            ],
            [
                'id'           => 25,
                'slug'         => 'barisal',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'barisal'],
                    'bn'       => ['display_name' => 'বরিশাল']
                ], JSON_UNESCAPED_UNICODE),
                'division_id'  => 2,
            ],
            [
                'id'           => 26,
                'slug'         => 'bhola',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'bhola'],
                    'bn'       => ['display_name' => 'ভোলা']
                ], JSON_UNESCAPED_UNICODE),
                'division_id'  => 2,
            ],
            [
                'id'           => 27,
                'slug'         => 'jhalokati',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'jhalokati'],
                    'bn'       => ['display_name' => 'ঝালকাঠি']
                ], JSON_UNESCAPED_UNICODE),
                'division_id'  => 2,
            ],
            [
                'id'           => 28,
                'slug'         => 'patuakhali',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'patuakhali'],
                    'bn'       => ['display_name' => 'পটুয়াখালী']
                ], JSON_UNESCAPED_UNICODE),
                'division_id'  => 2,
            ],
            [
                'id'           => 29,
                'slug'         => 'pirojpur',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'pirojpur'],
                    'bn'       => ['display_name' => 'পিরোজপুর']
                ], JSON_UNESCAPED_UNICODE),
                'division_id'  => 2,
            ],
            [
                'id'           => 30,
                'slug'         => 'habiganj ',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'habiganj '],
                    'bn'       => ['display_name' => 'হবিগঞ্জ']
                ], JSON_UNESCAPED_UNICODE),
                'division_id'  => 2,
            ],
            [
                'id'           => 31,
                'slug'         => 'moulvibazar',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'moulvibazar'],
                    'bn'       => ['display_name' => 'মৌলভীবাজার']
                ], JSON_UNESCAPED_UNICODE),
                'division_id'  => 3,
            ],
            [
                'id'           => 32,
                'slug'         => 'sunamganj',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'sunamganj'],
                    'bn'       => ['display_name' => 'সুনামগঞ্জ']
                ], JSON_UNESCAPED_UNICODE),
                'division_id'  => 3,
            ],
            [
                'id'           => 33,
                'slug'         => 'sylhet',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'sylhet'],
                    'bn'       => ['display_name' => 'সিলেট']
                ], JSON_UNESCAPED_UNICODE),
                'division_id'  => 3,
            ],
            [
                'id'           => 34,
                'slug'         => 'bandarban',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'bandarban'],
                    'bn'       => ['display_name' => 'বান্দরবান']
                ], JSON_UNESCAPED_UNICODE),
                'division_id'  => 5,
            ],
            [
                'id'           => 35,
                'slug'         => 'brahmanbaria',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'brahmanbaria'],
                    'bn'       => ['display_name' => 'ব্রাহ্মণবাড়িয়া']
                ], JSON_UNESCAPED_UNICODE),
                'division_id'  => 5,
            ],
            [
                'id'           => 36,
                'slug'         => 'chandpur',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'chandpur'],
                    'bn'       => ['display_name' => 'চাঁদপুর']
                ], JSON_UNESCAPED_UNICODE),
                'division_id'  => 5,
            ],
            [
                'id'           => 37,
                'slug'         => 'chittagong',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'chittagong'],
                    'bn'       => ['display_name' => 'চট্টগ্রাম']
                ], JSON_UNESCAPED_UNICODE),
                'division_id'  => 5,
            ],
            [
                'id'           => 38,
                'slug'         => 'comilla',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'comilla'],
                    'bn'       => ['display_name' => 'কুমিল্লা']
                ], JSON_UNESCAPED_UNICODE),
                'division_id'  => 5,
            ],
            [
                'id'           => 39,
                'slug'         => 'cox`s bazar ',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'cox`s bazar '],
                    'bn'       => ['display_name' => 'কক্সবাজার	']
                ], JSON_UNESCAPED_UNICODE),
                'division_id'  => 5,
            ],
            [
                'id'           => 40,
                'slug'         => 'feni',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'feni'],
                    'bn'       => ['display_name' => 'ফেনী']
                ], JSON_UNESCAPED_UNICODE),
                'division_id'  => 5,
            ],
            [
                'id'           => 41,
                'slug'         => 'khagrachhari',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'khagrachhari'],
                    'bn'       => ['display_name' => 'খাগড়াছড়ি']
                ], JSON_UNESCAPED_UNICODE),
                'division_id'  => 5,
            ],
            [
                'id'           => 42,
                'slug'         => 'lakshmipur',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'lakshmipur'],
                    'bn'       => ['display_name' => 'লক্ষ্মীপুর']
                ], JSON_UNESCAPED_UNICODE),
                'division_id'  => 5,
            ],
            [
                'id'           => 43,
                'slug'         => 'noakhali',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'noakhali'],
                    'bn'       => ['display_name' => 'নোয়াখালী']
                ], JSON_UNESCAPED_UNICODE),
                'division_id'  => 5,
            ],
            [
                'id'           => 44,
                'slug'         => 'rangamati',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'rangamati'],
                    'bn'       => ['display_name' => 'রাঙ্গামাটি']
                ], JSON_UNESCAPED_UNICODE),
                'division_id'  => 5,
            ],
            [
                'id'           => 45,
                'slug'         => 'jamalpur',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'jamalpur'],
                    'bn'       => ['display_name' => 'জামালপুর']
                ], JSON_UNESCAPED_UNICODE),
                'division_id'  => 6,
            ],
            [
                'id'           => 46,
                'slug'         => 'mymensingh',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'mymensingh'],
                    'bn'       => ['display_name' => 'ময়মনসিংহ']
                ], JSON_UNESCAPED_UNICODE),
                'division_id'  => 6,
            ],
            [
                'id'           => 47,
                'slug'         => 'netrokona',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'netrokona'],
                    'bn'       => ['display_name' => 'নেত্রকোনা']
                ], JSON_UNESCAPED_UNICODE),
                'division_id'  => 6,
            ],
            [
                'id'           => 48,
                'slug'         => 'sherpur',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'sherpur'],
                    'bn'       => ['display_name' => 'শেরপুর']
                ], JSON_UNESCAPED_UNICODE),
                'division_id'  => 6,
            ],
            [
                'id'           => 49,
                'slug'         => 'bogra',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'bogra'],
                    'bn'       => ['display_name' => 'বগুড়া']
                ], JSON_UNESCAPED_UNICODE),
                'division_id'  => 7,
            ],
            [
                'id'           => 50,
                'slug'         => 'joypurhat ',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'joypurhat '],
                    'bn'       => ['display_name' => 'জয়পুরহাট']
                ], JSON_UNESCAPED_UNICODE),
                'division_id'  => 7,
            ],
            [
                'id'           => 51,
                'slug'         => 'naogaon',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'naogaon'],
                    'bn'       => ['display_name' => 'নওগাঁ']
                ], JSON_UNESCAPED_UNICODE),
                'division_id'  => 7,
            ],
            [
                'id'           => 52,
                'slug'         => 'natore',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'natore'],
                    'bn'       => ['display_name' => 'নাটোর']
                ], JSON_UNESCAPED_UNICODE),
                'division_id'  => 7,
            ],
            [
                'id'           => 53,
                'slug'         => 'chapai nawabganj',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'chapai nawabganj'],
                    'bn'       => ['display_name' => 'চাঁপাই নবাবগঞ্জ']
                ], JSON_UNESCAPED_UNICODE),
                'division_id'  => 7,
            ],
            [
                'id'           => 54,
                'slug'         => 'pabna',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'pabna'],
                    'bn'       => ['display_name' => 'পাবনা']
                ], JSON_UNESCAPED_UNICODE),
                'division_id'  => 7,
            ],
            [
                'id'           => 55,
                'slug'         => 'rajshahi',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'rajshahi'],
                    'bn'       => ['display_name' => 'রাজশাহী']
                ], JSON_UNESCAPED_UNICODE),
                'division_id'  => 7,
            ],
            [
                'id'           => 56,
                'slug'         => 'sirajganj',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'sirajganj'],
                    'bn'       => ['display_name' => 'সিরাজগঞ্জ']
                ], JSON_UNESCAPED_UNICODE),
                'division_id'  => 7,
            ],
            [
                'id'           => 57,
                'slug'         => 'dinajpur',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'dinajpur'],
                    'bn'       => ['display_name' => 'দিনাজপুর']
                ], JSON_UNESCAPED_UNICODE),
                'division_id'  => 8,
            ],
            [
                'id'           => 58,
                'slug'         => 'gaibandha',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'gaibandha'],
                    'bn'       => ['display_name' => 'গাইবান্ধা']
                ], JSON_UNESCAPED_UNICODE),
                'division_id'  => 8,
            ],
            [
                'id'           => 59,
                'slug'         => 'kurigram',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'kurigram'],
                    'bn'       => ['display_name' => 'কুড়িগ্রাম']
                ], JSON_UNESCAPED_UNICODE),
                'division_id'  => 8,
            ],
            [
                'id'           => 60,
                'slug'         => 'lalmonirhat',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'lalmonirhat'],
                    'bn'       => ['display_name' => 'লালমনিরহাট']
                ], JSON_UNESCAPED_UNICODE),
                'division_id'  => 8,
            ],
            [
                'id'           => 61,
                'slug'         => 'nilphamari',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'nilphamari'],
                    'bn'       => ['display_name' => 'নীলফামারী']
                ], JSON_UNESCAPED_UNICODE),
                'division_id'  => 8,
            ],
            [
                'id'           => 62,
                'slug'         => 'panchagarh',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'panchagarh'],
                    'bn'       => ['display_name' => 'পঞ্চগড়']
                ], JSON_UNESCAPED_UNICODE),
                'division_id'  => 8,
            ],
            [
                'id'           => 63,
                'slug'         => 'rangpur',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'rangpur'],
                    'bn'       => ['display_name' => 'রংপুর']
                ], JSON_UNESCAPED_UNICODE),
                'division_id'  => 8,
            ],
            [
                'id'           => 64,
                'slug'         => 'thakurgaon',
                'localization' => json_encode([
                    'en'       => ['display_name' => 'thakurgaon'],
                    'bn'       => ['display_name' => 'ঠাকুরগাঁও']
                ], JSON_UNESCAPED_UNICODE),
                'division_id'  => 8,
            ],
            
            
            
            
        ]);
    }
}
