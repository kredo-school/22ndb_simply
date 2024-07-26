<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Item;

class ItemSeeder extends Seeder
{
    private $item;

    public function __construct(Item $item)
    {
        $this->item = $item;
    }
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $item = [
            [
                'name' => 'perfume',
                'description' => 'Category1',
                'image' => 'images/perfume.jpg',
                'user_id' => '1',
                'category_id' => '1',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => 'cup',
                'description' => 'Category1',
                'image' => 'images/cup.jpg',
                'user_id' => '2',
                'category_id' => '2',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => 'shoes',
                'description' => 'Category1',
                'image' => 'images/shoes.jpg',
                'user_id' => '3',
                'category_id' => '3',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => 'skateboard',
                'description' => 'Category1',
                'image' => 'images/skateboard.jpg',
                'user_id' => '1',
                'category_id' => '4',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => 'winter coat',
                'description' => 'Category1',
                'image' => 'images/cloth.jpg',
                'user_id' => '2',
                'category_id' => '3',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ]
        ];

        $this->item->insert($item);
    } 
    
}
