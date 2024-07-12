<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Item;

class ItemSeeder extends Seeder
{

    private $item;

    public function __construct(Item $item){
        $this->item = $item;
    }

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $item = [
            [
               "name" => "sushi plate",
               "description" => "favorite one",
               "image" => "/storage/assets/sushi-plate.jpg",
               "user_id" => "1",
               "category_id" => "2",
               "created_at" => NOW(),
               "updated_at" => NOW(),
            ],

            [
                "name" => "denim pants",
                "description" => "motivation for diet",
                "image" => "/storage/assets/denim-pants.jpg",
                "user_id" => "1",
                "category_id" => "1",
                "created_at" => NOW(),
                "updated_at" => NOW(),
            ],
            
            [
                "name" => "white plate",
                "description" => "reminds me of grandma's house",
                "image" => "/storage/assets/white-plate.jpg",
                "user_id" => "1",
                "category_id" => "2",
                "created_at" => NOW(),
                "updated_at" => NOW(),
            ],

            [
                "name" => "blue tie",
                "description" => "a part of uniform in highschool",
                "image" => "/storage/assets/blue-tie.jpg",
                "user_id" => "1",
                "category_id" => "1",
                "created_at" => NOW(),
                "updated_at" => NOW(),
            ],

            [
                "name" => "knitsweater",
                "description" => "long live one",
                "image" => "/storage/assets/knitsweater.jpg",
                "user_id" => "1",
                "category_id" => "1",
                "created_at" => NOW(),
                "updated_at" => NOW(),
            ],

            [
                "name" => "shiny shortpants",
                "description" => "never worn yet",
                "image" => "/storage/assets/shiny-shortpants.jpg",
                "user_id" => "1",
                "category_id" => "1",
                "created_at" => NOW(),
                "updated_at" => NOW(),
            ],

            [
                "name" => "cup",
                "description" => "favorite cup",
                "image" => "/storage/assets/cup.jpg",
                "user_id" => "1",
                "category_id" => "2",
                "created_at" => NOW(),
                "updated_at" => NOW(),
            ]

        ];

        $this->item->insert($item);
    }
}
