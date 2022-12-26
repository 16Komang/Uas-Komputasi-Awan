<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('galleries')->insert([
            'invitation_id' => 1,
            'name' => 'BGUltra.jpg',
        ]);

        DB::table('galleries')->insert([
            'invitation_id' => 2,
            'name' => 'BGUltra.jpg',
        ]);
    }
}
