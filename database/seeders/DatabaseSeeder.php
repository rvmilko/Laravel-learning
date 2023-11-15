<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        $user = User::factory()->create([
                'name' => 'John Doe',
                'email' => 'john@gmail.com'
        ]);

        Listing::factory(6)->create([
            'user_id' => $user->id
        ]);

        // \App\Models\Listing::create([
        //     'title' => 'Laravel Senior Developer',
        //     'tags' => 'laravel, javascript',
        //     'company' => 'Acme Corp',
        //     'location' => 'Boston, MA',
        //     'email' => 'email1@email.com',
        //     'website' => 'https://www.acme.com',
        //     'description' => 'Curabitur turpis purus, pulvinar at scelerisque a, molestie nec elit. Duis ultrices vitae mauris ac semper. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Aliquam malesuada vestibulum dolor quis dictum. '
        // ]);

        // \App\Models\Listing::create([
        //     'title' => 'Full-Stack Engineer',
        //     'tags' => 'html, css, javascript, php',
        //     'company' => 'Acme Corp',
        //     'location' => 'Boston, MA',
        //     'email' => 'email2@email.com',
        //     'website' => 'https://www.acme.com',
        //     'description' => 'Curabitur finibus ante non facilisis accumsan. Aenean tempor tortor ut orci commodo auctor in sed nulla. Suspendisse nec magna non turpis tristique sagittis.'
        // ]);
    }
}
