<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GuestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('guests')->insert([
            'invitation_id' => 1,
            'presence' => 'Hadir',
            'name' => 'Romans',
            'congratulation' => 'Horas carasso'
        ]);

        DB::table('guests')->insert([
            'invitation_id' => 1,
            'presence' => 'Hadir',
            'name' => 'Raming',
            'congratulation' => 'Horaso carassotto'
        ]);
    }
}
