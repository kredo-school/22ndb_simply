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
                'item_id' => '17',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'user_id' => '2',
                'item_id' => '18',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'user_id' => '3',
                'item_id' => '19',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'user_id' => '1',
                'item_id' => '20',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'user_id' => '2',
                'item_id' => '21',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'user_id' => '4',
                'item_id' => '22',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'user_id' => '1',
                'item_id' => '23',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'user_id' => '5',
                'item_id' => '24',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'user_id' => '4',
                'item_id' => '25',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'user_id' => '2',
                'item_id' => '26',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'user_id' => '5',
                'item_id' => '27',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'user_id' => '4',
                'item_id' => '28',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'user_id' => '1',
                'item_id' => '29',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'user_id' => '5',
                'item_id' => '30',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'user_id' => '5',
                'item_id' => '31',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'user_id' => '4',
                'item_id' => '32',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ]
        ];

        $this->donation_item->insert($donation_item);
    } 
}

