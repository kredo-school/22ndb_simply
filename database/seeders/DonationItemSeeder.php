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
                'item_id' => '11',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'user_id' => '2',
                'item_id' => '12',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'user_id' => '3',
                'item_id' => '13',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'user_id' => '1',
                'item_id' => '14',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'user_id' => '2',
                'item_id' => '15',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ]
        ];

        $this->donation_item->insert($donation_item);
    } 
}

