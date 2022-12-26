<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InvitationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('invitations')->insert([
            'user_id' => 2,
            'template_id' => 1,
            'rekening' => '7632-01-007520-53-0',
            'date' => Carbon::create('2023', '01', '01'),
            'time_start' => '08:00',
            'time_end' => '22:00'
        ]);

        DB::table('invitations')->insert([
            'user_id' => 2,
            'template_id' => 2,
            'rekening' => '7336-01-013479-53-1',
            'date' => Carbon::create('2023', '01', '01'),
            'time_start' => '08:00',
            'time_end' => '22:00'
        ]);
    }
}
