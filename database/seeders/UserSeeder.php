<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{

    private $user;

    public function __construct(User $user){
        $this->user = $user;
    }
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
            [
                "avatar" => "storage/app/assets/avatar.jpg",
                "username" => "Saya",
                "email" => "saya@email.com",
                "address" => "Hyogo",
                "introduction" => "Hello",
                "password" => Hash::make("saya9999"),
                "created_at" => NOW(),
                "updated_at" => NOW(),
            ]
        ];

        $this->user->insert($user);

    }
}
