<?php

namespace Database\Seeders;

use App\Models\Phone;
use App\Models\User;
use App\Models\Order;
use App\Models\ProductOrder;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run ()
    {
        //User::factory(10)->create();
        //Phone::factory(1)->create();
        //$this->run(CategorySeeder::class);
        //Category::factory(1000)->create();

        // Order::factory(10)->create();

        ProductOrder::factory(1)->create();
    }
}
