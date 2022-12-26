<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'role_id' => 1,
            'email' => 'none@gmail.com',
            'password' => Hash::make('password')
        ]);
        DB::table('users')->insert([
            'name' => 'user',
            'role_id' => 2,
            'email' => 'user@gmail.com',
            'password' => Hash::make('password')
        ]);
    }
}
