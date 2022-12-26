<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RoleSeeder::class,
            TemplateSeeder::class,
            AdminSeeder::class,
            UserSeeder::class,
            InvitationSeeder::class,
            BrideSeeder::class,
            GroomSeeder::class,
            PlaceSeeder::class,
            GallerySeeder::class,
            UserSeeder::class,
            GuestSeeder::class,
        ]);
    }
}
