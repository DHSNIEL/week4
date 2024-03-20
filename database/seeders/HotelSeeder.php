<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class HotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $hotelData = [
            [
                'id' => 1,
                'name' => 'Four Points',
                'address' => 'Pakuwon Trade Center Mall',
                'postcode' => '60123',
                'longitude' => '7.000',
                'latitude' => '112.670',
                'type_id' => '3',
            ],
            [
                'id' => 2,
                'name' => 'Shangri-La',
                'address' => 'Mayjend Sungkono',
                'postcode' => '60256',
                'longitude' => '7.000',
                'latitude' => '112.710',
            ],
            [
                'id' => 3,
                'name' => 'Vasa',
                'address' => 'Mayjen Hr Muhammad',
                'postcode' => '60189',
                'longitude' => '7.000',
                'latitude' => '112.690',
            ],
        ];

        foreach ($hotelData as $data) {
            DB::table('hotel')->insert($data);
        }
    }
}
