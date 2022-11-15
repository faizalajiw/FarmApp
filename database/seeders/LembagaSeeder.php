<?php

namespace Database\Seeders;

use App\Models\Breeder;
use App\Models\Cage;
use App\Models\Group;
use App\Models\Institution;
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

        Cage::create([
            'breeders_id' => 1,
            'location' => 'Lorem Ipsum',
            'category' => 'Lorem',
        ]);

        Cage::create([
            'breeders_id' => 1,
            'location' => 'Lorem Ipsum',
            'category' => 'Lorem',
        ]);

        Cage::create([
            'breeders_id' => 1,
            'location' => 'Lorem Ipsum',
            'category' => 'Lorem',
        ]);

        Group::create([
            'institutions_id' => 1,
            'image' => 'Lorem Ipsum',
            'name' => 'Lorem Ipsum',
            'address' => 'Lorem Ipsum',
            'phone' => 'Lorem Ipsum',
            'legal_permit' => 'Lorem Ipsum',
            'leader' => 'Lorem Ipsum',
        ]);

        Group::create([
            'institutions_id' => 1,
            'image' => 'Lorem Ipsum',
            'name' => 'Lorem Ipsum',
            'address' => 'Lorem Ipsum',
            'phone' => 'Lorem Ipsum',
            'legal_permit' => 'Lorem Ipsum',
            'leader' => 'Lorem Ipsum',
        ]);

        Breeder::create([
            'groups_id' => 1,
            'identity_number' => 123,
            'name' => 'Lorem',
            'phone' => 8123123,
            'address' => 'Lorem Ipsum',
        ]);

        Breeder::create([
            'groups_id' => 1,
            'identity_number' => 123,
            'name' => 'Lorem',
            'phone' => 8123123,
            'address' => 'Lorem Ipsum',
        ]);

        Breeder::create([
            'groups_id' => 1,
            'identity_number' => 123,
            'name' => 'Lorem',
            'phone' => 8123123,
            'address' => 'Lorem Ipsum',
        ]);

        Breeder::create([
            'groups_id' => 1,
            'identity_number' => 123,
            'name' => 'Lorem',
            'phone' => 8123123,
            'address' => 'Lorem Ipsum',
        ]);

        foreach(range(0,rand(1,15)) as $i){
            Institution::create([
                'image' => '',
                'name' => 'Cazh1',
                'leader' => 'CBS',
                'address' => 'Purwokerto',
                'phone' => '089576377887',
                'legal_permit' => 'AHU_ABCD010',
            ]);
        }

        foreach(range(0,rand(1,15)) as $i){
            Institution::create([
                'image' => '',
                'name' => 'Cazh1',
                'leader' => 'Cazh',
                'address' => 'Purwokerto',
                'phone' => '089576377887',
                'legal_permit' => 'AHU_ABCD010',
            ]);
        }

        foreach(range(0,rand(1,15)) as $i){
            Institution::create([
                'image' => '',
                'name' => 'Cazh1',
                'leader' => 'Cards',
                'address' => 'Purwokerto',
                'phone' => '089576377887',
                'legal_permit' => 'AHU_ABCD010',
            ]);
        }
    }
}
