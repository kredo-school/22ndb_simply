<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class DonatedItemsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('donated_items')->insert([
            ['image_path' => 'images/item1.jpg', 'donation_date' => Carbon::parse('2023-02-02'), 'location' => 'Nagoya'],
            ['image_path' => 'images/item2.jpg', 'donation_date' => Carbon::parse('2024-03-04'), 'location' => 'Tokyo'],
            
        ]);
    }
}

