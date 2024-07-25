<?php

namespace Database\Seeders;

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
        // $this->call(EmployerSeeder::class);
        // $this->call(TagSeeder::class);
    }
}
