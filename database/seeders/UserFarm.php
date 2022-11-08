<?php

namespace Database\Seeders;

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
        DB::table('users')->insert([
            'name'      => 'Sulton',
            'email'     => 'sultoniromadhan16@gmail.com',
            'password'  => Hash::make('sultoniromadhan16@gmail.com'),
        ]);
    }
}
