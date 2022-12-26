<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('places')->insert([
            'invitation_id' => 1,
            'name' => "Lowaka Somalia",
            'address' => "Jl. Toa Landak Selatan",
            'image' => "BGUltra.jpg",
            'place_desc' => 'Calm place to do party and dinner'
        ]);
        
        DB::table('places')->insert([
            'invitation_id' => 2,
            'name' => "Lowaka Somalia",
            'address' => "Jl. Toa Landak Selatan",
            'image' => "BGUltra.jpg",
            'place_desc' => 'Calm place to do party and dinner'
        ]);
    }
}
