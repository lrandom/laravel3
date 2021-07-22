<?php

namespace Database\Factories;

use App\Models\Model;
use App\Models\Phone;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PhoneFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Phone::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition ()
    {
        return [
            'home_phone' => '0868120192',
            'personal_phone' => '0868271095',
            'user_id' => 1
        ];
    }
}
