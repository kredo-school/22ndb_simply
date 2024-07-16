<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    private $category;

    public function __construct(Category $category){
        $this->category = $category;
    }
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category = [
            [
                "name" => "Clothes",
                "created_at" => NOW(),
                "updated_at" => NOW(),
            ],
            
            [
                "name" => "Kitchen",
                "created_at" => NOW(),
                "updated_at" => NOW(),
            ],

            [
                "name" => "Garage",
                "created_at" => NOW(),
                "updated_at" => NOW(),
            ],

            [
                "name" => "Hobby",
                "created_at" => NOW(),
                "updated_at" => NOW(),
            ]
            
        ];

        $this->category->insert($category);
       
    }
}
