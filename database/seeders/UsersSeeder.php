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
        DB::table('users')->insert([
            [
            'avatar'=>'/images/avatar1.jpg',
            'username'=>'Ami',
            'email'=>'ami@gmail.com',
            'address'=>'Nagoya',
            'introduction'=>'I am testing user 1......from Japan.....',
            'password'=>Hash::make('password'),
            'created_at'=>now(),
            'updated_at'=>now(),
            ],
            [
            'avatar'=>null,
            'username'=>'Yuki',
            'email'=>'yuki@gmail.com',
            'address'=>'Nagoya',
            'introduction'=>'I am testing user 2......from Japan.....',
            'password'=>Hash::make('password'),
            'created_at'=>now(),
            'updated_at'=>now(),
            ],
            [
            'avatar'=>null,
            'username'=>'Maiko',
            'email'=>'maiko@gmail.com',
            'address'=>'Tokyo',
            'introduction'=>'I am testing user 3......from Japan.....',
            'password'=>Hash::make('password'),
            'created_at'=>now(),
            'updated_at'=>now(),
            ],
            [
            'avatar'=>null,
            'username'=>'Saya',
            'email'=>'saya@gmail.com',
            'address'=>'Tokyo',
            'introduction'=>'I am testing user 4......from Japan.....',
            'password'=>Hash::make('password'),
            'created_at'=>now(),
            'updated_at'=>now(),
            ],
            [
            'avatar'=>null,
            'username'=>'Masaya',
            'email'=>'masaya@gmail.com',
            'address'=>'Tokyo',
            'introduction'=>'I am testing user 5......from Japan.....',
            'password'=>Hash::make('password'),
            'created_at'=>now(),
            'updated_at'=>now(),
            ],
    ]);
    }
}
