<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\TransactionType;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\Client::factory(10)->create();
        \App\Models\Bank::factory(10)->create();

        $this->call([
            SubjectSeeder::class,
            TransactionTypeSeeder::class,
        ]);
    }
}
