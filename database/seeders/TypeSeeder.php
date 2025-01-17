<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('types')->insert([
            ['name'=>'Inn'],
            ['name'=>'Resort'],
            ['name' => 'Chain Hotel'],
            ['name' => 'Boutique Hotel'],
            ['name' => 'Transit Hotel'],
        ]);
    }
}
