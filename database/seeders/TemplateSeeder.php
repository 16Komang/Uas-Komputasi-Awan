<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TemplateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('templates')->insert([
            'name' => 'Template A',
            'cover' => 'desainA.png',
            'filename' => 'desainA',
            'desc' => 'Original template that created by Maulana Rosandy',
        ]);

        DB::table('templates')->insert([
            'name' => 'Template B',
            'cover' => 'desainB.png',
            'filename' => 'desainB',
            'desc' => 'Original template that created by Maulana Rosandy',
        ]);
    }
}
