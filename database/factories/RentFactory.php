<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Rent>
 */
class RentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => 1,
            'house_id' => 1,
            'initial_date' => '2022-08-23 14:00:00',
            'final_date' => '2022-08-28 10:00:00',
            'daily_price' => 300.00,
            'cleaning_price' => 100.00,
            'discount' => 0,
        ];
    }
}
//1661274000
//1661691600

