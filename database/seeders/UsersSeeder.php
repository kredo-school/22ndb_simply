<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert(
            [
            'avatar'=>'/images/avatar1.jpg',
            'username'=>'Ami',
            'email'=>'ami@gmail.com',
            'address'=>'Nagoya',
            'introduction'=>'I am testing user 1......from Japan.....',
            'password'=>Hash::make('password'),
            'created_at'=>now(),
            'updated_at'=>now(),
            ]

    );
    }
}
