<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\DonationItem;

class DonationItemSeeder extends Seeder
{

    private $donation_item;

    public function __construct(DonationItem $donation_item)
    {
        $this->donation_item = $donation_item;
    }


    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $donation_item = [
            [
                'user_id' => '1',
                'item_id' => '1',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'user_id' => '2',
                'item_id' => '2',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'user_id' => '3',
                'item_id' => '3',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'user_id' => '1',
                'item_id' => '4',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'user_id' => '2',
                'item_id' => '5',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ]
        ];

        $this->donation_item->insert($donation_item);
    } 
}

