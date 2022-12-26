<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GroomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('grooms')->insert([
            'invitation_id' => 1,
            'name' => 'Romans',
            'mother' => 'Mrs. Romans',
            'father' => 'Mr. Romans',
            'image' => 'BGUltra.jpg'
        ]);

        DB::table('grooms')->insert([
            'invitation_id' => 2,
            'name' => 'Romans',
            'mother' => 'Mrs. Romans',
            'father' => 'Mr. Romans',
            'image' => 'BGUltra.jpg'
        ]);
    }
}
