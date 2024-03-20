<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Hotel;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $hotels = Hotel::all();
        
        $fpRoom     = ["Junior Suite", "Premium Deluxe Twin Room", "Deluxe Guest Room", "Family Room", "Premium Suite", "Deluxe King Room"];
        $slRoom     = ["Executive Suite", "Horizon Executive King Room", "Executive King Room", "Horizon Deluxe King Room", "Deluxe Twin Room", "Residence Suite"];
        $vasaRoom   = ["Three Bedroom Apartment", "Two - Bedroom Apartment", "Glacier Suite", "Select Twin Room", "Breccia Suite", "Premium Twin", "Select King Room", "Executive Twin Room", "Premium King"];

        foreach ($hotels as $hotel) {
            $rooms = [];

            if ($hotel->id == 1) {
                $rooms = $fpRoom;
            } elseif ($hotel->id == 2) {
                $rooms = $slRoom;
            } elseif ($hotel->id == 3) {
                $rooms = $vasaRoom;
            }

            $data = [];

            foreach ($rooms as $room) {
                $data[] = [
                    'idhotel' => $hotel->id,
                    'type_of_room' => $room,
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            }

            DB::table('products')->insert($data);
        }
    }
}
