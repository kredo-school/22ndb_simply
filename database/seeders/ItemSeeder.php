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
                'description' => 'I just used one time. So it is almost new!',
                'image' => 'images/perfume.jpg',
                'user_id' => '1',
                'category_id' => '1',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => 'cup',
                'description' => 'I bought it in Spain.',
                'image' => 'images/cup.jpg',
                'user_id' => '2',
                'category_id' => '2',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => 'shoes',
                'description' => 'I got but it is a bit small for me.',
                'image' => 'images/shoes.jpg',
                'user_id' => '3',
                'category_id' => '3',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => 'skateboard',
                'description' => 'My son used this but he does not need anymore.',
                'image' => 'images/skateboard.jpg',
                'user_id' => '1',
                'category_id' => '4',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => 'winter coat',
                'description' => 'I got from my sister but it is not my style.',
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
