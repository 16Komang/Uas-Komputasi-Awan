<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrideSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brides')->insert([
            'invitation_id' => 1,
            'name' => 'Alice',
            'mother' => 'Mrs. Alice',
            'father' => 'Mr. Alice',
            'image' => 'BGUltra.jpg'
        ]);

        DB::table('brides')->insert([
            'invitation_id' => 2,
            'name' => 'Alice',
            'mother' => 'Mrs. Alice',
            'father' => 'Mr. Alice',
            'image' => 'BGUltra.jpg'
        ]);
    }
}
