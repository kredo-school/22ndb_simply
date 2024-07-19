<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DonationItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
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

