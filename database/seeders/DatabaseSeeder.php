<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        \App\Models\User::factory(10)->create();
        \App\Models\ProductCategory::factory(20)->create();
        \App\Models\ServiceCategory::factory(20)->create();
        \App\Models\Product::factory(40)->create();
        \App\Models\Service::factory(40)->create();
    }
}
