<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserFarm extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // DB::table('users')->insert([
        //     'name'      => 'Sulton',
        //     'email'     => 'sultoniromadhan16@gmail.com',
        //     'password'  => Hash::make('sultoniromadhan16@gmail.com'),
        // ]);
        User::create([
            'name'      => 'Sultoni Romadhon',
            'email'     => 'zagzegzagzegzagzeg@gmail.com',
            'password'  => Hash::make('zagzegzagzegzagzeg@gmail.com'),
        ]);
        User::create([
            'name'      => 'Bahri',
            'email'     => 'admin@cazh.com',
            'password'  => Hash::make('admin@cazh.com'),
        ]);
        User::create([
            'name'      => 'rijal',
            'email'     => 'rijal@gmail.com',
            'password'  => Hash::make('rijal@gmail.com'),
        ]);

    }
}
