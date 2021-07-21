<?php

namespace Database\Seeders;

use Database\Factories\CategoryFactory;
use Illuminate\Database\Seeder;
use App\Models\Category;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run ()
    {
        //\App\Models\User::factory(10)->create();
        //$this->run(CategorySeeder::class);
        Category::factory(1000)->create();
    }
}
