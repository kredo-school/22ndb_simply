<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Item;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    private $item;

    public function __construct(Item $item){
        $this->item = $item;
    }

    public function run(): void
    {
        $items = [
            [
                "name" => "Knitsweater",
                "description" => "present from Mom",
                "image" => "/storage/assets/knitsweater.jpg",
                "user_id" => "2",
                "category_id" =>"3",
                "created_at" => NOW(),
                "updated_at" => NOW(),
            ],

            [
                "name" => "Blue Tie",
                "description" => "From high school uniform",
                "image" => "/storage/assets/blue-tie.jpg",
                "user_id" => "2",
                "category_id" =>"3",
                "created_at" => NOW(),
                "updated_at" => NOW(),
            ],

            [
                "name" => "Shiny Short Pants",
                "description" => "Never worn",
                "image" => "/storage/assets/shiny-shortpants.jpg",
                "user_id" => "2",
                "category_id" =>"3",
                "created_at" => NOW(),
                "updated_at" => NOW(),
            ],

            [
                "name" => "Denim Pants",
                "description" => "My favorite",
                "image" => "/storage/assets/denim-pants.jpg",
                "user_id" => "2",
                "category_id" =>"3",
                "created_at" => NOW(),
                "updated_at" => NOW(),
            ],

            [
                "name" => "Cup",
                "description" => "Daily use",
                "image" => "/storage/assets/cup.jpg",
                "user_id" => "2",
                "category_id" =>"2",
                "created_at" => NOW(),
                "updated_at" => NOW(),
            ],

            [
                "name" => "Sushi Plate",
                "description" => "Souvenir from Japan",
                "image" => "/storage/assets/sushi-plate.jpg",
                "user_id" => "2",
                "category_id" =>"2",
                "created_at" => NOW(),
                "updated_at" => NOW(),
            ],

            [
                "name" => "White Plate",
                "description" => "My favorite one",
                "image" => "/storage/assets/white-plate.jpg",
                "user_id" => "2",
                "category_id" =>"2",
                "created_at" => NOW(),
                "updated_at" => NOW(),
            ]

        ];

        $this->item->insert($items);

    }
}
