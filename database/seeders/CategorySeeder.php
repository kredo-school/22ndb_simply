<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
        $category =[
            [
                "name" => "Closet",
                "user_id" => "1",
                "created_at" => NOW(),
                "updated_at" => NOW(),
            ],
            [
                "name" => "Garage",
                "user_id" => "1",
                "created_at" => NOW(),
                "updated_at" => NOW(),
            ],
            [
                "name" => "Kitchen",
                "user_id" => "1",
                "created_at" => NOW(),
                "updated_at" => NOW(),
            ],
            [
                "name" => "Living room",
                "user_id" => "1",
                "created_at" => NOW(),
                "updated_at" => NOW(),
            ],
            [
                "name" => "Room1",
                "user_id" => "1",
                "created_at" => NOW(),
                "updated_at" => NOW(),
            ],

            [
                "name" => "Closet",
                "user_id" => "2",
                "created_at" => NOW(),
                "updated_at" => NOW(),
            ],
            [
                "name" => "Garage",
                "user_id" => "2",
                "created_at" => NOW(),
                "updated_at" => NOW(),
            ],
            [
                "name" => "Kitchen",
                "user_id" => "2",
                "created_at" => NOW(),
                "updated_at" => NOW(),
            ],
            [
                "name" => "Living room",
                "user_id" => "2",
                "created_at" => NOW(),
                "updated_at" => NOW(),
            ],
            [
                "name" => "Room1",
                "user_id" => "2",
                "created_at" => NOW(),
                "updated_at" => NOW(),
            ],
            [
                "name" => "Closet",
                "user_id" => "3",
                "created_at" => NOW(),
                "updated_at" => NOW(),
            ],
            [
                "name" => "Garage",
                "user_id" => "3",
                "created_at" => NOW(),
                "updated_at" => NOW(),
            ],
            [
                "name" => "Kitchen",
                "user_id" => "3",
                "created_at" => NOW(),
                "updated_at" => NOW(),
            ],
            [
                "name" => "Living room",
                "user_id" => "3",
                "created_at" => NOW(),
                "updated_at" => NOW(),
            ],
            [
                "name" => "Room1",
                "user_id" => "3",
                "created_at" => NOW(),
                "updated_at" => NOW(),
            ],
        ];
            $this->category->insert($category);
    }
}
