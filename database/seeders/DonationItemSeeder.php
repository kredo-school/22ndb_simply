<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DonationItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('donation_items')->insert([
            [
                "user_id" => 1,
                "item_id" => 2,
                "created_at" => NOW(),
                "updated_at" => NOW(),
            ],

            [
                "user_id" => 1,
                "item_id" => 3,
                "created_at" => NOW(),
                "updated_at" => NOW(),
            ],

            [
                "user_id" => 2,
                "item_id" => 2,
                "created_at" => NOW(),
                "updated_at" => NOW(),
            ],

            [
                "user_id" => 2,
                "item_id" => 1,
                "created_at" => NOW(),
                "updated_at" => NOW(),
            ],

            [
                "user_id" => 1,
                "item_id" => 3,
                "created_at" => NOW(),
                "updated_at" => NOW(),
            ],
        ]);
    }
}
