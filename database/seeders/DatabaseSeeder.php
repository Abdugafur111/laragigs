<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Listing::factory(5)->create();
        // Listing::create([

        //     'title'=> 'Laravel Senior Developer',
        //     'tags'=>'laravel,js',
        //     'company'=>'ACME',
        //     'location'=>'Boston,MA',
        //     'email'=>'email1@email.com',
        //     'website'=>'www.google.com',
        //     'description'=>'ABCDEFGHJKLMNOPRST'
        // ]);
        // Listing::create([

        //     'title'=> 'Senior Developer',
        //     'tags'=>'laravel,js',
        //     'company'=>'ACME',
        //     'location'=>'Boston,MA',
        //     'email'=>'email1@email.com',
        //     'website'=>'www.google.com',
        //     'description'=>'ABCDEFGHJKLMNOPRST'
        // ]);
    }
}
