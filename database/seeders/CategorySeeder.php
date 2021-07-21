<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run ()
    {
        //
        for ($i = 0; $i < 10; $i++) {
            DB::table('category')->insert([
                'name' => 'Gucci',
                'slug' => 'Gucci',
                'parent_id' => 0
            ]);
        }
    }
}
