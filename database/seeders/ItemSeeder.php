<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('items')->insert([
            [
                "name" => "pants",
                "description" => "AAA",
                "image" => "/images/check_man.png",
                "user_id" => 1,
                "category_id" => 2,
                "created_at" => NOW(),
                "updated_at" => NOW(),
            ],

            [
                "name" => "browse",
                "description" => "BBB",
                "image" => "/images/check_man.png",
                "user_id" => 2,
                "category_id" => 1,
                "created_at" => NOW(),
                "updated_at" => NOW(),
            ],

            [
                "name" => "shirt",
                "description" => "CCC",
                "image" => "/images/check_man.png",
                "user_id" => 1,
                "category_id" => 3,
                "created_at" => NOW(),
                "updated_at" => NOW(),
            ],

            [
                "name" => "brouse1",
                "description" => "DDD",
                "image" => "/images/check_man.png",
                "user_id" => 1,
                "category_id" => 1,
                "created_at" => NOW(),
                "updated_at" => NOW(),
            ],

            [
                "name" => "brouse2",
                "description" => "EEE",
                "image" => "/images/check_man.png",
                "user_id" => 2,
                "category_id" => 2,
                "created_at" => NOW(),
                "updated_at" => NOW(),
            ],

            [
                "name" => "pants1",
                "description" => "FFF",
                "image" => "/images/check_man.png",
                "user_id" => 1,
                "category_id" => 2,
                "created_at" => NOW(),
                "updated_at" => NOW(),
            ],

            [
                "name" => "pants2",
                "description" => "GGG",
                "image" => "/images/check_man.png",
                "user_id" => 1,
                "category_id" => 2,
                "created_at" => NOW(),
                "updated_at" => NOW(),
            ],

            [
                "name" => "shirt1",
                "description" => "GGG",
                "image" => "/images/check_man.png",
                "user_id" => 2,
                "category_id" => 2,
                "created_at" => NOW(),
                "updated_at" => NOW(),
            ],

            [
                "name" => "shirt2",
                "description" => "HHH",
                "image" => "/images/check_man.png",
                "user_id" => 2,
                "category_id" => 3,
                "created_at" => NOW(),
                "updated_at" => NOW(),
            ],

            [
                "name" => "shirt3",
                "description" => "III",
                "image" => "/images/check_man.png",
                "user_id" => 1,
                "category_id" => 1,
                "created_at" => NOW(),
                "updated_at" => NOW(),
            ],

            [
                "name" => "hummer",
                "description" => "JJJ",
                "image" => "/images/check_man.png",
                "user_id" => 1,
                "category_id" => 1,
                "created_at" => NOW(),
                "updated_at" => NOW(),
            ],

            [
                "name" => "shirt3",
                "description" => "KKK",
                "image" => "/images/check_man.png",
                "user_id" => 1,
                "category_id" => 2,
                "created_at" => NOW(),
                "updated_at" => NOW(),
            ],

            [
                "name" => "shirt4",
                "description" => "LLL",
                "image" => "/images/check_man.png",
                "user_id" => 2,
                "category_id" => 3,
                "created_at" => NOW(),
                "updated_at" => NOW(),
            ],

            [
                "name" => "shirt5",
                "description" => "MMM",
                "image" => "/images/check_man.png",
                "user_id" => 1,
                "category_id" => 3,
                "created_at" => NOW(),
                "updated_at" => NOW(),
            ],

            [
                "name" => "shirt5",
                "description" => "NNN",
                "image" => "/images/check_man.png",
                "user_id" => 1,
                "category_id" => 1,
                "created_at" => NOW(),
                "updated_at" => NOW(),
            ],

            [
                "name" => "shirt6",
                "description" => "OOO",
                "image" => "/images/check_man.png",
                "user_id" => 2,
                "category_id" => 3,
                "created_at" => NOW(),
                "updated_at" => NOW(),
            ],

            [
                "name" => "shirt7",
                "description" => "PPP",
                "image" => "/images/check_man.png",
                "user_id" => 2,
                "category_id" => 2,
                "created_at" => NOW(),
                "updated_at" => NOW(),
            ],

        ]);
    }
}
