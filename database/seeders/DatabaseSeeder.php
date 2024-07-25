<?php

namespace Database\Seeders;

use App\Models\Employer;
use App\Models\Tag;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'first_name' => 'Dmitrii',
            'last_name' => 'Kabatsyura',
            'email' => 'test@example.com',
        ]);

        $this->call(JobSeeder::class);

        Employer::factory(2)->create();

        Tag::factory(2)->create();
    }
}
