<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Vince',
            'email' => 'vince@vince.com',
            'password' => '12345678'
        ]);

        \App\Models\AcDatabase::factory()->create([
            'ac_name' => "Assassin's Creed",
            'ac_url' => '/image/ac1',
            'ac_title' => "Assassin's Creed",
            'ac_text' => "Assassin's Creed first game 2007",
            'ac_image_path' => '/ac1.jpg'
        ]);
        \App\Models\AcDatabase::factory()->create([
            'ac_name' => "Assassin's Creed 2",
            'ac_url' => '/image/ac2',
            'ac_title' => "Assassin's Creed 2",
            'ac_text' => "Assassin's Creed 2 game 2009",
            'ac_image_path' => '/ac2.jpg'
        ]);
        \App\Models\AcDatabase::factory()->create([
            'ac_name' => "Assassin's Creed Brotherhood",
            'ac_url' => '/image/acb',
            'ac_title' => "Assassin's Creed Brotherhood",
            'ac_text' => "Assassin's Creed Brotherhood game 2010",
            'ac_image_path' => '/acb.jpg'
        ]);
        \App\Models\AcDatabase::factory()->create([
            'ac_name' => "Assassin's Creed Revelation",
            'ac_url' => '/image/acre',
            'ac_title' => "Assassin's Creed Revelation",
            'ac_text' => "Assassin's Creed Revelation game 2011",
            'ac_image_path' => '/acre.jpg'
        ]);
        \App\Models\AcDatabase::factory()->create([
            'ac_name' => "Assassin's Creed 3",
            'ac_url' => '/image/ac3',
            'ac_title' => "Assassin's Creed 3",
            'ac_text' => "Assassin's Creed 3 game 2012",
            'ac_image_path' => '/ac3.jpg'
        ]);
        \App\Models\AcDatabase::factory()->create([
            'ac_name' => "Assassin's Creed Black Flag",
            'ac_url' => '/image/ac4',
            'ac_title' => "Assassin's Creed Black Flag",
            'ac_text' => "Assassin's Creed Black Flag game 2013",
            'ac_image_path' => '/ac4.jpg'
        ]);
        \App\Models\AcDatabase::factory()->create([
            'ac_name' => "Assassin's Creed Unity",
            'ac_url' => '/image/acu',
            'ac_title' => "Assassin's Creed Unity",
            'ac_text' => "Assassin's Creed Unity game 2014",
            'ac_image_path' => '/acu.jpg'
        ]);
        \App\Models\AcDatabase::factory()->create([
            'ac_name' => "Assassin's Creed Rogue",
            'ac_url' => '/image/acro',
            'ac_title' => "Assassin's Creed Rogue",
            'ac_text' => "Assassin's Creed Rogue game 2014",
            'ac_image_path' => '/acro.jpg'
        ]);
        \App\Models\AcDatabase::factory()->create([
            'ac_name' => "Assassin's Creed Syndicate",
            'ac_url' => '/image/acs',
            'ac_title' => "Assassin's Creed Syndicate",
            'ac_text' => "Assassin's Creed Syndicate game 2015",
            'ac_image_path' => '/acs.jpg'
        ]);
        \App\Models\AcDatabase::factory()->create([
            'ac_name' => "Assassin's Creed Origins",
            'ac_url' => '/image/acor',
            'ac_title' => "Assassin's Creed Origins",
            'ac_text' => "Assassin's Creed Origins game 2017",
            'ac_image_path' => '/acor.jpg'
        ]);
        \App\Models\AcDatabase::factory()->create([
            'ac_name' => "Assassin's Creed Odyssey",
            'ac_url' => '/image/acod',
            'ac_title' => "Assassin's Creed Odyssey",
            'ac_text' => "Assassin's Creed Odyssey game 2018",
            'ac_image_path' => '/acod.jpg'
        ]);
        \App\Models\AcDatabase::factory()->create([
            'ac_name' => "Assassin's Creed Valhalla",
            'ac_url' => '/image/acv',
            'ac_title' => "Assassin's Creed Valhalla",
            'ac_text' => "Assassin's Creed Valhalla game 2020",
            'ac_image_path' => '/acv.jpg'
        ]);
        \App\Models\AcDatabase::factory()->create([
            'ac_name' => "Assassin's Creed Mirage",
            'ac_url' => '/image/acm',
            'ac_title' => "Assassin's Creed Mirage",
            'ac_text' => "Assassin's Creed Mirage game 2023",
            'ac_image_path' => '/acm.jpg'
        ]);
    }
}
