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
                "user_id" => "1",
                "category_id" =>"13",
                "created_at" => NOW(),
                "updated_at" => NOW(),
            ],

            [
                "name" => "Blue Tie",
                "description" => "From high school uniform",
                "image" => "/storage/assets/blue-tie.jpg",
                "user_id" => "1",
                "category_id" =>"13",
                "created_at" => NOW(),
                "updated_at" => NOW(),
            ],

            [
                "name" => "Shiny Short Pants",
                "description" => "Never worn",
                "image" => "/storage/assets/shiny-shortpants.jpg",
                "user_id" => "1",
                "category_id" =>"13",
                "created_at" => NOW(),
                "updated_at" => NOW(),
            ],

            [
                "name" => "Denim Pants",
                "description" => "My favorite",
                "image" => "/storage/assets/denim-pants.jpg",
                "user_id" => "1",
                "category_id" =>"13",
                "created_at" => NOW(),
                "updated_at" => NOW(),
            ],

            [
                "name" => "Cup",
                "description" => "Daily use",
                "image" => "/storage/assets/cup.jpg",
                "user_id" => "1",
                "category_id" =>"14",
                "created_at" => NOW(),
                "updated_at" => NOW(),
            ],

            [
                "name" => "Sushi Plate",
                "description" => "Souvenir from Japan",
                "image" => "/storage/assets/sushi-plate.jpg",
                "user_id" => "1",
                "category_id" =>"14",
                "created_at" => NOW(),
                "updated_at" => NOW(),
            ],

            [
                "name" => "White Plate",
                "description" => "My favorite one",
                "image" => "/storage/assets/white-plate.jpg",
                "user_id" => "1",
                "category_id" =>"14",
                "created_at" => NOW(),
                "updated_at" => NOW(),
            ],

            [
                "name" => "Cup",
                "description" => "Daily use",
                "image" => "/storage/assets/cup.jpg",
                "user_id" => "1",
                "category_id" =>"14",
                "created_at" => NOW(),
                "updated_at" => NOW(),
            ],

            [
                "name" => "Sushi Plate",
                "description" => "Souvenir from Japan",
                "image" => "/storage/assets/sushi-plate.jpg",
                "user_id" => "1",
                "category_id" =>"14",
                "created_at" => NOW(),
                "updated_at" => NOW(),
            ],

            [
                "name" => "White Plate",
                "description" => "My favorite one",
                "image" => "/storage/assets/white-plate.jpg",
                "user_id" => "1",
                "category_id" =>"14",
                "created_at" => NOW(),
                "updated_at" => NOW(),
            ],

            [
                "name" => "Cup",
                "description" => "Daily use",
                "image" => "/storage/assets/cup.jpg",
                "user_id" => "1",
                "category_id" =>"14",
                "created_at" => NOW(),
                "updated_at" => NOW(),
            ],

            [
                "name" => "Sushi Plate",
                "description" => "Souvenir from Japan",
                "image" => "/storage/assets/sushi-plate.jpg",
                "user_id" => "1",
                "category_id" =>"14",
                "created_at" => NOW(),
                "updated_at" => NOW(),
            ],

            [
                "name" => "White Plate",
                "description" => "My favorite one",
                "image" => "/storage/assets/white-plate.jpg",
                "user_id" => "1",
                "category_id" =>"14",
                "created_at" => NOW(),
                "updated_at" => NOW(),
            ],

            [
                "name" => "Cup",
                "description" => "Daily use",
                "image" => "/storage/assets/cup.jpg",
                "user_id" => "1",
                "category_id" =>"14",
                "created_at" => NOW(),
                "updated_at" => NOW(),
            ],

            [
                "name" => "Sushi Plate",
                "description" => "Souvenir from Japan",
                "image" => "/storage/assets/sushi-plate.jpg",
                "user_id" => "1",
                "category_id" =>"14",
                "created_at" => NOW(),
                "updated_at" => NOW(),
            ],

            [
                "name" => "White Plate",
                "description" => "My favorite one",
                "image" => "/storage/assets/white-plate.jpg",
                "user_id" => "1",
                "category_id" =>"14",
                "created_at" => NOW(),
                "updated_at" => NOW(),
            ],

            [
                "name" => "Cup",
                "description" => "Daily use",
                "image" => "/storage/assets/cup.jpg",
                "user_id" => "1",
                "category_id" =>"14",
                "created_at" => NOW(),
                "updated_at" => NOW(),
            ],

            [
                "name" => "Sushi Plate",
                "description" => "Souvenir from Japan",
                "image" => "/storage/assets/sushi-plate.jpg",
                "user_id" => "1",
                "category_id" =>"14",
                "created_at" => NOW(),
                "updated_at" => NOW(),
            ],

            [
                "name" => "White Plate",
                "description" => "My favorite one",
                "image" => "/storage/assets/white-plate.jpg",
                "user_id" => "1",
                "category_id" =>"14",
                "created_at" => NOW(),
                "updated_at" => NOW(),
            ],

            [
                "name" => "Cup",
                "description" => "Daily use",
                "image" => "/storage/assets/cup.jpg",
                "user_id" => "1",
                "category_id" =>"14",
                "created_at" => NOW(),
                "updated_at" => NOW(),
            ],

            [
                "name" => "Sushi Plate",
                "description" => "Souvenir from Japan",
                "image" => "/storage/assets/sushi-plate.jpg",
                "user_id" => "1",
                "category_id" =>"14",
                "created_at" => NOW(),
                "updated_at" => NOW(),
            ],

            [
                "name" => "White Plate",
                "description" => "My favorite one",
                "image" => "/storage/assets/white-plate.jpg",
                "user_id" => "1",
                "category_id" =>"14",
                "created_at" => NOW(),
                "updated_at" => NOW(),
            ],

            [
                "name" => "Cup",
                "description" => "Daily use",
                "image" => "/storage/assets/cup.jpg",
                "user_id" => "1",
                "category_id" =>"14",
                "created_at" => NOW(),
                "updated_at" => NOW(),
            ],

            [
                "name" => "Sushi Plate",
                "description" => "Souvenir from Japan",
                "image" => "/storage/assets/sushi-plate.jpg",
                "user_id" => "1",
                "category_id" =>"14",
                "created_at" => NOW(),
                "updated_at" => NOW(),
            ],

            [
                "name" => "White Plate",
                "description" => "My favorite one",
                "image" => "/storage/assets/white-plate.jpg",
                "user_id" => "1",
                "category_id" =>"14",
                "created_at" => NOW(),
                "updated_at" => NOW(),
            ],

            [
                "name" => "Cup",
                "description" => "Daily use",
                "image" => "/storage/assets/cup.jpg",
                "user_id" => "1",
                "category_id" =>"14",
                "created_at" => NOW(),
                "updated_at" => NOW(),
            ],

            [
                "name" => "Sushi Plate",
                "description" => "Souvenir from Japan",
                "image" => "/storage/assets/sushi-plate.jpg",
                "user_id" => "1",
                "category_id" =>"14",
                "created_at" => NOW(),
                "updated_at" => NOW(),
            ],

            [
                "name" => "White Plate",
                "description" => "My favorite one",
                "image" => "/storage/assets/white-plate.jpg",
                "user_id" => "1",
                "category_id" =>"14",
                "created_at" => NOW(),
                "updated_at" => NOW(),
            ],

            [
                "name" => "Knitsweater",
                "description" => "present from Mom",
                "image" => "/storage/assets/knitsweater.jpg",
                "user_id" => "2",
                "category_id" =>"2",
                "created_at" => NOW(),
                "updated_at" => NOW(),
            ],

            [
                "name" => "Blue Tie",
                "description" => "From high school uniform",
                "image" => "/storage/assets/blue-tie.jpg",
                "user_id" => "2",
                "category_id" =>"2",
                "created_at" => NOW(),
                "updated_at" => NOW(),
            ],

            [
                "name" => "Shiny Short Pants",
                "description" => "Never worn",
                "image" => "/storage/assets/shiny-shortpants.jpg",
                "user_id" => "2",
                "category_id" =>"2",
                "created_at" => NOW(),
                "updated_at" => NOW(),
            ],

            [
                "name" => "Denim Pants",
                "description" => "My favorite",
                "image" => "/storage/assets/denim-pants.jpg",
                "user_id" => "2",
                "category_id" =>"2",
                "created_at" => NOW(),
                "updated_at" => NOW(),
            ],

            [
                "name" => "Knitsweater",
                "description" => "present from Mom",
                "image" => "/storage/assets/knitsweater.jpg",
                "user_id" => "2",
                "category_id" =>"2",
                "created_at" => NOW(),
                "updated_at" => NOW(),
            ],

            [
                "name" => "Blue Tie",
                "description" => "From high school uniform",
                "image" => "/storage/assets/blue-tie.jpg",
                "user_id" => "2",
                "category_id" =>"2",
                "created_at" => NOW(),
                "updated_at" => NOW(),
            ],

            [
                "name" => "Shiny Short Pants",
                "description" => "Never worn",
                "image" => "/storage/assets/shiny-shortpants.jpg",
                "user_id" => "2",
                "category_id" =>"2",
                "created_at" => NOW(),
                "updated_at" => NOW(),
            ],

            [
                "name" => "Denim Pants",
                "description" => "My favorite",
                "image" => "/storage/assets/denim-pants.jpg",
                "user_id" => "2",
                "category_id" =>"2",
                "created_at" => NOW(),
                "updated_at" => NOW(),
            ],

            [
                "name" => "Knitsweater",
                "description" => "present from Mom",
                "image" => "/storage/assets/knitsweater.jpg",
                "user_id" => "2",
                "category_id" =>"2",
                "created_at" => NOW(),
                "updated_at" => NOW(),
            ],

            [
                "name" => "Blue Tie",
                "description" => "From high school uniform",
                "image" => "/storage/assets/blue-tie.jpg",
                "user_id" => "2",
                "category_id" =>"2",
                "created_at" => NOW(),
                "updated_at" => NOW(),
            ],

            [
                "name" => "Shiny Short Pants",
                "description" => "Never worn",
                "image" => "/storage/assets/shiny-shortpants.jpg",
                "user_id" => "2",
                "category_id" =>"2",
                "created_at" => NOW(),
                "updated_at" => NOW(),
            ],

            [
                "name" => "Denim Pants",
                "description" => "My favorite",
                "image" => "/storage/assets/denim-pants.jpg",
                "user_id" => "2",
                "category_id" =>"2",
                "created_at" => NOW(),
                "updated_at" => NOW(),
            ],

            [
                "name" => "Knitsweater",
                "description" => "present from Mom",
                "image" => "/storage/assets/knitsweater.jpg",
                "user_id" => "2",
                "category_id" =>"2",
                "created_at" => NOW(),
                "updated_at" => NOW(),
            ],

            [
                "name" => "Blue Tie",
                "description" => "From high school uniform",
                "image" => "/storage/assets/blue-tie.jpg",
                "user_id" => "2",
                "category_id" =>"2",
                "created_at" => NOW(),
                "updated_at" => NOW(),
            ],

            [
                "name" => "Shiny Short Pants",
                "description" => "Never worn",
                "image" => "/storage/assets/shiny-shortpants.jpg",
                "user_id" => "2",
                "category_id" =>"2",
                "created_at" => NOW(),
                "updated_at" => NOW(),
            ],

            [
                "name" => "Denim Pants",
                "description" => "My favorite",
                "image" => "/storage/assets/denim-pants.jpg",
                "user_id" => "2",
                "category_id" =>"2",
                "created_at" => NOW(),
                "updated_at" => NOW(),
            ],

            [
                "name" => "Knitsweater",
                "description" => "present from Mom",
                "image" => "/storage/assets/knitsweater.jpg",
                "user_id" => "2",
                "category_id" =>"2",
                "created_at" => NOW(),
                "updated_at" => NOW(),
            ],

            [
                "name" => "Blue Tie",
                "description" => "From high school uniform",
                "image" => "/storage/assets/blue-tie.jpg",
                "user_id" => "2",
                "category_id" =>"2",
                "created_at" => NOW(),
                "updated_at" => NOW(),
            ],

            [
                "name" => "Shiny Short Pants",
                "description" => "Never worn",
                "image" => "/storage/assets/shiny-shortpants.jpg",
                "user_id" => "2",
                "category_id" =>"2",
                "created_at" => NOW(),
                "updated_at" => NOW(),
            ],

            [
                "name" => "Denim Pants",
                "description" => "My favorite",
                "image" => "/storage/assets/denim-pants.jpg",
                "user_id" => "2",
                "category_id" =>"2",
                "created_at" => NOW(),
                "updated_at" => NOW(),
            ]

        ];

        $this->item->insert($items);


    // private $item;

    // public function __construct(Item $item)
    // {
    //     $this->item = $item;
    // }
    // /**
    //  * Run the database seeds.
    //  */
    // public function run(): void
    // {
    //     $item = [
    //         [
    //             'name' => 'perfume',
    //             'description' => 'I just used one time. So it is almost new!',
    //             'image' => 'images/perfume.jpg',
    //             'user_id' => '1',
    //             'category_id' => '1',
    //             'created_at' => NOW(),
    //             'updated_at' => NOW(),
    //         ],
    //         [
    //             'name' => 'cup',
    //             'description' => 'I bought it in Spain.',
    //             'image' => 'images/cup.jpg',
    //             'user_id' => '2',
    //             'category_id' => '2',
    //             'created_at' => NOW(),
    //             'updated_at' => NOW(),
    //         ],
    //         [
    //             'name' => 'shoes',
    //             'description' => 'I got but it is a bit small for me.',
    //             'image' => 'images/shoes.jpg',
    //             'user_id' => '3',
    //             'category_id' => '3',
    //             'created_at' => NOW(),
    //             'updated_at' => NOW(),
    //         ],
    //         [
    //             'name' => 'skateboard',
    //             'description' => 'My son used this but he does not need anymore.',
    //             'image' => 'images/skateboard.jpg',
    //             'user_id' => '1',
    //             'category_id' => '4',
    //             'created_at' => NOW(),
    //             'updated_at' => NOW(),
    //         ],
    //         [
    //             'name' => 'winter coat',
    //             'description' => 'I got from my sister but it is not my style.',
    //             'image' => 'images/cloth.jpg',
    //             'user_id' => '2',
    //             'category_id' => '3',
    //             'created_at' => NOW(),
    //             'updated_at' => NOW(),
    //         ],
    //         [
    //             'name' => 'clean robot',
    //             'description' => 'I just used one time. So it is almost new!',
    //             'image' => 'images/cleanrobot.jpg',
    //             'user_id' => '4',
    //             'category_id' => '2',
    //             'created_at' => NOW(),
    //             'updated_at' => NOW(),
    //         ],
    //         [
    //             'name' => 'camp goods',
    //             'description' => 'I just used one time. So it is almost new!',
    //             'image' => 'images/campgoods.jpg',
    //             'user_id' => '1',
    //             'category_id' => '3',
    //             'created_at' => NOW(),
    //             'updated_at' => NOW(),
    //         ],
    //         [
    //             'name' => 'crocs',
    //             'description' => 'I got from my brother but it is not my style.',
    //             'image' => 'images/crocs.jpg',
    //             'user_id' => '5',
    //             'category_id' => '4',
    //             'created_at' => NOW(),
    //             'updated_at' => NOW(),
    //         ],
    //         [
    //             'name' => 'lipstick and cheek powder',
    //             'description' => 'I got from my sister but it is not my style.',
    //             'image' => 'images/lipstick.jpg',
    //             'user_id' => '4',
    //             'category_id' => '1',
    //             'created_at' => NOW(),
    //             'updated_at' => NOW(),
    //         ],
    //         [
    //             'name' => 'mixer',
    //             'description' => 'I bought but I will move out. So I do not need any more.',
    //             'image' => 'images/mixer.jpg',
    //             'user_id' => '2',
    //             'category_id' => '3',
    //             'created_at' => NOW(),
    //             'updated_at' => NOW(),
    //         ],
    //         [
    //             'name' => 'notebooks',
    //             'description' => 'I do not need so please use them.',
    //             'image' => 'images/notebook.jpg',
    //             'user_id' => '5',
    //             'category_id' => '2',
    //             'created_at' => NOW(),
    //             'updated_at' => NOW(),
    //         ],
    //         [
    //             'name' => 'tent',
    //             'description' => 'I will move out so no need.',
    //             'image' => 'images/tent.jpg',
    //             'user_id' => '4',
    //             'category_id' => '3',
    //             'created_at' => NOW(),
    //             'updated_at' => NOW(),
    //         ],
    //         [
    //             'name' => 'swim ring',
    //             'description' => 'I bougth for my kids but it is too big.',
    //             'image' => 'images/swimring.jpg',
    //             'user_id' => '1',
    //             'category_id' => '2',
    //             'created_at' => NOW(),
    //             'updated_at' => NOW(),
    //         ],
    //         [
    //             'name' => 'Xmas tree',
    //             'description' => 'I bought new one. So this is no need. But it is still new. ',
    //             'image' => 'images/xmastree.jpg',
    //             'user_id' => '5',
    //             'category_id' => '1',
    //             'created_at' => NOW(),
    //             'updated_at' => NOW(),
    //         ],
    //         [
    //             'name' => 'Umbrella',
    //             'description' => 'I have many umbrella so I want to give someone this.',
    //             'image' => 'images/umbrella.jpg',
    //             'user_id' => '5',
    //             'category_id' => '1',
    //             'created_at' => NOW(),
    //             'updated_at' => NOW(),
    //         ],
    //         [
    //             'name' => 'Necklace',
    //             'description' => 'I bought in Paris. But I will not use.',
    //             'image' => 'images/necklace.jpg',
    //             'user_id' => '4',
    //             'category_id' => '4',
    //             'created_at' => NOW(),
    //             'updated_at' => NOW(),
    //         ]
    //     ];

    //     $this->item->insert($item);
    // }

    }
}
