<?php

namespace Database\Factories;

use App\Models\Model;
use App\Models\Product;
use App\Models\ProductOrder;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductOrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ProductOrder::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition ()
    {
        return [
            'product_id' => 1,
            'order_id' => 1
        ];
    }
}
