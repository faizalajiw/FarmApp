<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LembagaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('institutions')->insert([
            'image' => '',
            'name' => 'Cazh',
            'leader' => 'Supri',
            'address' => 'Purwokerto',
            'phone' => '089576377887',
            'legal_permit' => 'AHU_ABCD011',
        ]);
    }
}
