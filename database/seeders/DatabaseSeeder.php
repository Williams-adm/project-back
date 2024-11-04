<?php

namespace Database\Seeders;

use App\Models\Supplier;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Supplier::factory(5)->create();
        $this->call(BranchSeeder::class);
    }
}
