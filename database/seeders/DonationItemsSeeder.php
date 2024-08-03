<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\DonationItem;


class DonationItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

     private $donationItem;

     public function __construct(DonationItem $donationItem){
         $this->donationItem = $donationItem;
     }


    public function run(): void
    {
        $donationItems = [

            [
                "user_id" => "2",
                "item_id" => "76",
                "created_at" => NOW(),
                "updated_at" => NOW(),
            ],

            [
                "user_id" => "2",
                "item_id" => "74",
                "created_at" => NOW(),
                "updated_at" => NOW(),
            ],

            [
                "user_id" => "2",
                "item_id" => "72",
                "created_at" => NOW(),
                "updated_at" => NOW(),
            ],

            [
                "user_id" => "2",
                "item_id" => "70",
                "created_at" => NOW(),
                "updated_at" => NOW(),
            ],

            [
                "user_id" => "2",
                "item_id" => "68",
                "created_at" => NOW(),
                "updated_at" => NOW(),
            ],

            [
                "user_id" => "2",
                "item_id" => "65",
                "created_at" => NOW(),
                "updated_at" => NOW(),
            ],

            [
                "user_id" => "2",
                "item_id" => "63",
                "created_at" => NOW(),
                "updated_at" => NOW(),
            ],

            [
                "user_id" => "2",
                "item_id" => "59",
                "created_at" => NOW(),
                "updated_at" => NOW(),
            ]

            ];

            $this->donationItem->insert($donationItems);

    }
}
